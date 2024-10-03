<?php
session_start();
include '../../service/basisdata.php';

if (isset($_POST['Jb'])) {
    $Jb = $_POST['Jb'];
    $isi = $_POST['isi'];
    $file = $_FILES['path_gambar'];
    $penulis = $_POST['penulis'];

    // Validate file type and size
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/tiff', 'image/webp'];
    $notAllowedTypes = ['video/mp4', 'video/avi', 'video/mpeg', 'video/quicktime'];
    $maxFileSize = 5 * 1024 * 1024; // 5MB
    if (!in_array($file['type'], $allowedTypes) || in_array($file['type'], $notAllowedTypes) || $file['size'] > $maxFileSize) {
        $_SESSION['error'] = 'File type or size is not allowed';
        header("location: ../informasi.php#hal");
        exit;
    }

    // Generate a unique file name
    $gambar = uniqid() . '_' . $file['name'];
    $path = "uploads/informasi/$gambar";
    $tmp_name = $file['tmp_name'];

    // Check if file already exists
    if (file_exists($path)) {
        $_SESSION['error'] = 'Gagal upload gambar (file sudah ada)';
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
            $_SESSION['success'] = 'Berhasil upload informasi';
            header("location: ../informasi.php#hal");
        } catch (mysqli_sql_exception $e) {
            $_SESSION['error'] = 'Gagal upload informasi';
            header("location: ../informasi.php#hal");
        } finally {
            $stmt->close();
            $conn->close();
        }
    } else {
        $_SESSION['error'] = 'Gagal upload gambar';
        header("location: ../informasi.php#hal");
    }
}


