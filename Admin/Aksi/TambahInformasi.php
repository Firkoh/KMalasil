<?php
session_start();
include '../../service/basisdata.php';

if (isset($_POST['Jb'])) {
    $Jb = $_POST['Jb'];
    $isi = $_POST['isi'];
    $file = $_FILES['path_gambar'];
    $penulis = $_POST['penulis'];

    // Validate file type and size
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $maxFileSize = 1024 * 1024; // 1MB
    if (!in_array($file['type'], $allowedTypes) || $file['size'] > $maxFileSize) {
        echo "<script>alert('File type or size is not allowed');</script>";
        header("location: ../informasi.php#hal");
        exit;
    }

    // Generate a unique file name
    $gambar = uniqid() . '_' . $file['name'];
    $path = "uploads/" . $gambar;
    $tmp_name = $file['tmp_name'];

    // Check if file already exists
    if (file_exists($path)) {
        echo "<script>alert('Gagal upload gambar (file sudah ada)');</script>";
        header("location: ../informasi.php");
        exit;
    }

    // Move uploaded file to destination
    if (move_uploaded_file($tmp_name, $path)) {
        // Prepare and execute SQL query
        $sql = "INSERT INTO kelurahan (Jb, isi, path_gambar, penulis) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $Jb, $isi, $path, $penulis);

        try {
            $stmt->execute();
            echo "<script>alert('Berhasil upload informasi');</script>";
            header("location: ../informasi.php#hal");
        } catch (mysqli_sql_exception $e) {
            echo "<script>alert('Gagal upload informasi');</script>";
            header("location: ../informasi.php#hal");
        } finally {
            $stmt->close();
            $conn->close();
        }
    } else {
        echo "<script>alert('Gagal upload gambar');</script>";
    }
}

