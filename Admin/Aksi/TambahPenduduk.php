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

$sql = "INSERT INTO penduduk (nik, nama, agama, tempat_lhr, tanggal_lhr, jenis_kelamin, gol_darah, pendidikan, pekerjaan, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssss", $nik, $nama, $agama, $tempat_lhr, $tanggal_lhr, $jenis_kelamin, $gol_darah, $pendidikan, $pekerjaan, $status);

try {
    $stmt->execute();
    header("location: ../penduduk.php#hal");
} catch (mysqli_sql_exception $e) {
    if ($e->getCode() === 1062) {
        echo "<script>alert('NIK sudah terdaftar')</script>"; // Nik sudah terdaftar";
    } else {
        throw $e;
    };
    if ($e->getCode() === 1048) {
        echo "<script>alert('Kolom Tidak Boleh Duplikat')</script>";
    } else {
        throw $e;
    };
}

$stmt->close();
$conn->close();

?>

