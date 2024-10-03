<?php
session_start();
include '../../service/basisdata.php';

$nama_gambar = $_POST['nama_gambar'];
$file = $_FILES['path_file'];
// Validate file type and size
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/tiff', 'image/webp'];
$notAllowedTypes = ['video/mp4', 'video/avi', 'video/mpeg', 'video/quicktime'];
$maxFileSize = 5 * 1024 * 1024; // 5MB
if (!in_array($file['type'], $allowedTypes) || in_array($file['type'], $notAllowedTypes) || $file['size'] > $maxFileSize) {
    $_SESSION['error'] = 'File type or size is not allowed';
    header("location: ../galeri.php#hal");
    exit;
}

// Generate a unique file name
$gambar = uniqid() . '_' . $file['name'];
$path = "uploads/galeri/$gambar";
$tmp_name = $file['tmp_name'];
// Check if file already exists
if (file_exists($path)) {
    $_SESSION['error'] = 'Gagal upload gambar (file sudah ada)';
    header("location: ../galeri.php#hal");
    exit;
}

// Move uploaded file to destination
if (move_uploaded_file($tmp_name, $path)) {
    // Prepare and execute SQL query
    $sql = "INSERT INTO galeri (nama_gambar, path_file) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nama_gambar, $path);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['pesan'] = "Berhasil upload gambar";
        header("location: ../galeri.php#hal");
    } else {
        $_SESSION['pesan'] = "Gagal upload gambar";
    }
} else {
    $_SESSION['pesan'] = "Gagal upload gambar (file sudah ada)";
}

