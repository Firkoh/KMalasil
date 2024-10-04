<?php
include "../../service/basisdata.php";

$id = $_GET['id'];
if (!is_numeric($id)) {
    echo "ID RT tidak valid.";
    exit;
};

// Ambil nama file gambar dari database (sesuaikan dengan struktur tabel Anda)
$stmt = $conn->prepare("SELECT `id`, `rt`, `rw`, `jumlah_penduduk` FROM `rtrw` WHERE `id` = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Hapus galeri dari database
$stmt->close();
$stmt = $conn->prepare("DELETE FROM `rtrw` WHERE `id` = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: ../rt.php#hal");
    exit;
} else {
    // pesan error
    echo "Gagal menghapus RT. Silahkan coba lagi.";
}

$stmt->close();
$conn->close();

