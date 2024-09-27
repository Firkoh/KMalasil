<?php
include '../../service/basisdata.php';
if (isset($_POST['visi_id'])) {
    $visi_id = $_POST['visi_id'];
    $judul_sejarah = $_POST['judul_sejarah'];
    $isi = $_POST['isi'];
    $visi = $_POST['visi'];
    $misi = $_POST['misi'];
    $tanggal_update = date('Y-m-d H:i:s');
    $sql = "UPDATE visi_misi SET judul_sejarah=?, isi=?, visi=?, misi=?, tanggal_update=? WHERE visi_id=?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssi",  $judul_sejarah, $isi, $visi, $misi, $tanggal_update, $visi_id);
        if ($stmt->execute()) {
            echo "<script>alert('Data Berhasil di Ubah');window.location.replace('../sejarah.php');</script>";
        } else {
           echo "<script>alert('Data Gagal di Ubah');window.location.replace('../sejarah.php');</script>";
            connection_status($conn);
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
}
?>
