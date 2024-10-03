<?php
include "../../service/basisdata.php";

$id = $_GET['id'];
if (!is_numeric($id)) {
    echo "ID informasi tidak valid.";
    exit;
};

// Ambil data dari database (sesuaikan dengan struktur tabel Anda)
$stmt = $conn->prepare("SELECT `id`, `Nip`, `Nama`, `Agama`, `Tempat_Lhr`, `Tanggal_Lhr`, `Jns_Kelamin`, `Gol_Darah`, `Pendidikan`, `Jabatan` FROM `plurah` WHERE `id` = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$id = $row['id'];
$Nip = $row['Nip'];
$Nama = $row['Nama'];
$Agama = $row['Agama'];
$Tempat_Lhr = $row['Tempat_Lhr'];
$Tanggal_Lhr = $row['Tanggal_Lhr'];
$Jns_Kelamin = $row['Jns_Kelamin'];
$Gol_Darah = $row['Gol_Darah'];
$Pendidikan = $row['Pendidikan'];
$Jabatan = $row['Jabatan'];


// Hapus informasi dari database
$stmt->close();
$stmt = $conn->prepare("DELETE FROM `plurah` WHERE `id` = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: ../Plurah.php#hal");
    exit;
} else {
    // pesan error
    echo "Gagal menghapus informasi. Silahkan coba lagi.";
}

$stmt->close();
$conn->close();


