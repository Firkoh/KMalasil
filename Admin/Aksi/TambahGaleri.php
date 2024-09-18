<?php
include '../../service/basisdata.php';

if (isset($_POST['nama_gambar'])) {

    $nama_gambar = $_POST['nama_gambar'];
    $gambar = $_FILES['path_file']['name'];
    $path = "uploads/" . $gambar;
    $tmp_name = $_FILES['path_file']['tmp_name'];

    if (!file_exists($path)) {
        if (move_uploaded_file($tmp_name, $path)) {
            $sql = "INSERT INTO galeri (nama_gambar, path_file) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $nama_gambar, $path);
            $stmt->execute();
            if ($stmt->affected_rows > 0) {
                header("location: ../galeri.php");
            } else {
                echo "Gagal upload gambar";
            }
        } else {
            echo "Gagal upload gambar (file sudah ada)";
        }
    } else {
        echo "Gagal upload gambar (file sudah ada)";
    }
}
?>

