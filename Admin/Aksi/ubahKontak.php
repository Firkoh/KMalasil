<?php
include '../../service/basisdata.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $te = $_POST['te'];
    $em = $_POST['em'];
    $wa = $_POST['wa'];
    $in = $_POST['in'];
    $fa = $_POST['fa'];
    $yo = $_POST['yo'];

    $sql = "UPDATE kontak SET te=?, em=?, wa=?, ins=?, fa=?, yo=? WHERE id=?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssssi", $te, $em, $wa, $in, $fa, $yo, $id);
        if ($stmt->execute()) {
            $message = "Data Berhasil di Ubah";
            $status = true;
        } else {
            $message = "Data Gagal di Ubah";
            $status = false;
        }
        echo "<script>alert('$message');window.location.replace('../kontak.php#hal');</script>";
        if (!$status) {
            connection_status($conn);
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
}
?>