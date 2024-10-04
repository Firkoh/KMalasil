<?php
include '../../service/basisdata.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $Jb = $_POST['Jb'];
    $isi = $_POST['isi'];
    $penulis = $_POST['penulis'];
    $path_file = $_FILES['path_gambar'];
    $file = $_FILES['path_gambar']['name'];
    $tmp_name = $_FILES['path_gambar']['tmp_name'];
    if ($path_file['size'] > 0) {
        if (!in_array($path_file['type'], ['image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/tiff', 'image/webp']) || $path_file['size'] > 5 * 1024 * 1024) {
            echo "<script>alert('File type or size is not allowed');window.location.replace('../informasi.php#hal');</script>";
            exit;
        }
        $path = "uploads/informasi/$file";
        if (file_exists($path)) {
            unlink($path);
        }
        if (move_uploaded_file($tmp_name, $path)) {
            $sql = "UPDATE kelurahan SET Jb=?, path_gambar=?, isi=?, penulis=? WHERE id=?";
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("ssssi", $Jb, $path, $isi, $penulis, $id);
                if ($stmt->execute()) {
                    header("location: ../informasi.php#hal");
                } else {
                    echo "<script>alert('Data Gagal di Ubah');window.location.replace('../informasi.php');</script>";
                    connection_status($conn);
                }
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<script>alert('Gagal upload gambar');window.location.replace('../informasi.php#hal');</script>";
        }
    } else {
        $sql = "UPDATE kelurahan SET Jb=?, isi=?, penulis=? WHERE id=?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sssi", $Jb, $isi, $penulis, $id);
            if ($stmt->execute()) {
                header("location: ../informasi.php#hal");
            } else {
                echo "<script>alert('Data Gagal di Ubah');window.location.replace('../informasi.php');</script>";
                connection_status($conn);
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $stmt->close();
}
?>

