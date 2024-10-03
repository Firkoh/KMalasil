<?php
include '../../service/basisdata.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$agama = $_POST['agama'];
$tempat_lhr = $_POST['tempat_lhr'];
$tanggal_lhr = $_POST['tanggal_lhr'];
$jk = $_POST['jk'];
$gol_darah = $_POST['gol_darah'];
$pendidikan = $_POST['pendidikan'];
$jabatan = $_POST['jabatan'];

$sql = "INSERT INTO plurah (nip, nama, agama, tempat_lhr, tanggal_lhr, jns_kelamin, gol_darah, pendidikan, jabatan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssss", $nip, $nama, $agama, $tempat_lhr, $tanggal_lhr, $jk, $gol_darah, $pendidikan, $jabatan);

try {
    $stmt->execute();
    header("location: ../plurah.php#hal");
} catch (mysqli_sql_exception $e) {
    if ($e->getCode() === 1062) {
        echo "<script>alert('NIP sudah terdaftar')</script>";
    } else {
        throw $e;
    }
}

$stmt->close();
$conn->close();

