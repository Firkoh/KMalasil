<?php
include '../../service/basisdata.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$agama = $_POST['agama'];
$tempat_lhr = $_POST['tempat_lhr'];
$tanggal_lhr = $_POST['tanggal_lhr'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$gol_darah = $_POST['gol_darah'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$status = $_POST['status'];

$sql = "INSERT INTO penduduk (nik, nama, agama, tempat_lhr, tanggal_lhr, jenis_kelamin, gol_darah, pendidikan, pekerjaan, status) VALUES ('$nik', '$nama', '$agama', '$tempat_lhr', '$tanggal_lhr', '$jenis_kelamin', '$gol_darah', '$pendidikan', '$pekerjaan', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "Data penduduk berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
