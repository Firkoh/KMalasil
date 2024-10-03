<?php
include "../../service/basisdata.php";

$id = $_GET['id'];
if (!is_numeric($id)) {
    echo "ID informasi tidak valid.";
    exit;
};

// Ambil data dari database (sesuaikan dengan struktur tabel Anda)
$stmt = $conn->prepare("SELECT `ID`, `Nik`, `Nama`, `Agama`, `Tempat_Lhr`, `Tanggal_Lhr`, `Jenis_Kelamin`, `Gol_Darah`, `Pendidikan`, `Pekerjaan`, `Status` FROM `penduduk` WHERE `ID` = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$ID = $row['ID'];
$Nik = $row['Nik'];
$Nama = $row['Nama'];
$Agama = $row['Agama'];
$Tempat_Lhr = $row['Tempat_Lhr'];
$Tanggal_Lhr = $row['Tanggal_Lhr'];
$Jenis_Kelamin = $row['Jenis_Kelamin'];
$Gol_Darah = $row['Gol_Darah'];
$Pendidikan = $row['Pendidikan'];
$Pekerjaan = $row['Pekerjaan'];
$Status = $row['Status'];


// Hapus informasi dari database
$stmt->close();
$stmt = $conn->prepare("DELETE FROM `penduduk` WHERE `ID` = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: ../penduduk.php#hal");
    exit;
} else {
    // pesan error
    echo "Gagal menghapus informasi. Silahkan coba lagi.";
}

$stmt->close();
$conn->close();

