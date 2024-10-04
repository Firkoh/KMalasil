<?php
include '../../service/basisdata.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $Nik = $_POST['Nik'];
    $Nama = $_POST['Nama'];
    $Agama = $_POST['Agama'];
    $Tempat_Lhr = $_POST['Tempat_Lhr'];
    $Tanggal_Lhr = $_POST['Tanggal_Lhr'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
    $Gol_Darah = $_POST['Gol_Darah'];
    $Pendidikan = $_POST['Pendidikan'];
    $Pekerjaan = $_POST['Pekerjaan'];
    $Status = $_POST['Status'];
    $sql = "UPDATE penduduk SET Nik=?, Nama=?, Agama=?, Tempat_Lhr=?, Tanggal_Lhr=?, Jenis_Kelamin=?, Gol_Darah=?, Pendidikan=?, Pekerjaan=?, Status=? WHERE id=?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssssssssi", $Nik, $Nama, $Agama, $Tempat_Lhr, $Tanggal_Lhr, $Jenis_Kelamin, $Gol_Darah, $Pendidikan, $Pekerjaan, $Status, $id);
        if ($stmt->execute()) {
            header("location: ../penduduk.php#hal");
        } else {
        echo "<script>alert('Data Gagal di Ubah');window.location.replace('../penduduk.php');</script>";
            connection_status($conn);
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
}
?>

