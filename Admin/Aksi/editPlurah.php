<?php
include '../../service/basisdata.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $Nip = $_POST['Nip'];
    $Nama = $_POST['Nama'];
    $Agama = $_POST['Agama'];
    $Tempat_Lhr = $_POST['Tempat_Lhr'];
    $Tanggal_Lhr = $_POST['Tanggal_Lhr'];
    $Jns_Kelamin = $_POST['Jns_Kelamin'];
    $Gol_Darah = $_POST['Gol_Darah'];
    $Pendidikan = $_POST['Pendidikan'];
    $Jabatan = $_POST['Jabatan'];
    $sql = "UPDATE plurah SET id=?, Nip=?, Nama=?, Agama=?, Tempat_Lhr=?, Tanggal_Lhr=?, Jns_Kelamin=?, Gol_Darah=?, Pendidikan=?, Jabatan=? WHERE id=?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("isssssssssi", $id, $Nip, $Nama, $Agama, $Tempat_Lhr, $Tanggal_Lhr, $Jns_Kelamin, $Gol_Darah, $Pendidikan, $Jabatan, $id);
        if ($stmt->execute()) {
            header("location: ../Plurah.php#hal");
        } else {
        echo "<script>alert('Data Gagal di Ubah');window.location.replace('../Plurah.php');</script>";
            connection_status($conn);
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
}
?>

