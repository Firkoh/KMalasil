<?php
include "../../service/basisdata.php";

$id = $_GET['id'];
if (!is_numeric($id)) {
    echo "ID informasi tidak valid.";
    exit;
}

// Ambil nama file gambar dari database (sesuaikan dengan struktur tabel Anda)
$stmt = $conn->prepare("SELECT `id`, `Jb`, `path_gambar`, `isi`, `penulis`, `created_at` FROM `kelurahan` WHERE `id` = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$Jb = $row['Jb'];
$path_file = $row['path_gambar'];
$isi = $row['isi'];
$penulis = $row['penulis'];
$created_at = $row['created_at'];


// Hapus informasi dari database
$stmt->close();
$stmt = $conn->prepare("DELETE FROM `kelurahan` WHERE `id` = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    // Hapus file gambar jika ada
    if ($path_file) {
        $file_path = "" . $path_file;
        if (file_exists($file_path)) {
            unlink($file_path);
        }
    }

    header("Location: ../informasi.php#hal");
    exit;
} else {
    // pesan error
    echo "Gagal menghapus informasi. Silahkan coba lagi.";
}

$stmt->close();
$conn->close();

