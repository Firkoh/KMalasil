<?php
include '../../service/basisdata.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nama_gambar = $_POST['nama_gambar'];
    $path_file = $_FILES['path_file'];
    $file = $_FILES['path_file']['name'];
    $tmp_name = $_FILES['path_file']['tmp_name'];

    if ($path_file['size'] > 0) {
        // Validate file type and size
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/tiff', 'image/webp'];
        $notAllowedTypes = ['video/mp4', 'video/avi', 'video/mpeg', 'video/quicktime'];
        $maxFileSize = 5 * 1024 * 1024; // 5MB
        if (!in_array($path_file['type'], $allowedTypes) || in_array($path_file['type'], $notAllowedTypes) || $path_file['size'] > $maxFileSize) {
            $_SESSION['error'] = 'File type or size is not allowed';
            header("location: ../galeri.php#hal");
            exit;
        }

        $path = "uploads/galeri/$file";
        if (file_exists($path)) {
            unlink($path);
        }

        if (move_uploaded_file($tmp_name, $path)) {
            $sql = "UPDATE galeri SET nama_gambar=?, path_file=? WHERE id=?";
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("ssi", $nama_gambar, $path, $id);
                if ($stmt->execute()) {
                    header("location: ../galeri.php#hal");
                } else {
                    echo "<script>alert('Data Gagal di Ubah');window.location.replace('../galeri.php');</script>";
                    connection_status($conn);
                }
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<script>alert('Gagal upload gambar');window.location.replace('../galeri.php#hal');</script>";
        }
    } else {
        $sql = "UPDATE galeri SET nama_gambar=? WHERE id=?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("si", $nama_gambar, $id);
            if ($stmt->execute()) {
                header("location: ../galeri.php#hal");
            } else {
                echo "<script>alert('Data Gagal di Ubah');window.location.replace('../galeri.php');</script>";
                connection_status($conn);
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $stmt->close();
}
?>

