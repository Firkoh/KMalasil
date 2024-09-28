<?php
include '../../service/basisdata.php';

$Jb = $_POST['Jb'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];

$sql = "INSERT INTO kelurahan (Jb, isi, penulis) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $Jb, $isi, $penulis);

try {
    $stmt->execute();
    header("location: ../informasi.php");
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $sql . "<br>" . $e->getMessage();
}

$stmt->close();
$conn->close();
?>

