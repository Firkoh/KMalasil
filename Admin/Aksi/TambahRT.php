<?php
include '../../service/basisdata.php';

$rt = $_POST['rt'];
$rw = $_POST['rw'];
$jumlah_penduduk = $_POST['jumlah_penduduk'];
$sql = "INSERT INTO rtrw (rt, rw, jumlah_penduduk) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $rt, $rw, $jumlah_penduduk);

try {
    $stmt->execute();
    header("location: ../rt.php#hal");
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $sql . "<br>" . $e->getMessage();
}

$stmt->close();
$conn->close();
?>

