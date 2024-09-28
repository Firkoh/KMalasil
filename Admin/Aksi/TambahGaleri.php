<?php
session_start();
include '../../service/basisdata.php';

if (isset($_POST['nama_gambar'])) {
    $nama_gambar = $_POST['nama_gambar'];
    $file = $_FILES['path_file'];

    // Validate file type and size
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $maxFileSize = 1024 * 1024; // 1MB
    if (!in_array($file['type'], $allowedTypes) || $file['size'] > $maxFileSize) {
        echo "<script>alert('Tipe atau ukuran file tidak diizinkan');</script>";
        header("location: ../galeri.php#hal");
        exit;
    }

    // Generate a unique file name
    $gambar = uniqid() . '_' . $file['name'];
    $path = "uploads/" . $gambar;
    $tmp_name = $file['tmp_name'];

    // Check if file already exists
    if (file_exists($path)) {
        echo "<script>alert('Gagal upload gambar (file sudah ada)');</script>";
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
}
?>