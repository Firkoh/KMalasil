<?php
include '../../service/basisdata.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $jumlah_penduduk = $_POST['jumlah_penduduk'];
    $sql = "UPDATE rtrw SET rt=?, rw=?, jumlah_penduduk=? WHERE id=?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("iiii", $rt, $rw, $jumlah_penduduk, $id);
        if ($stmt->execute()) {
            header("location: ../rt.php#hal");
        } else {
        echo "<script>alert('Data Gagal di Ubah');window.location.replace('../rt.php');</script>";
            connection_status($conn);
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
}
?>

