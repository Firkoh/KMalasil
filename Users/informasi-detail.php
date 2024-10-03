<?php
include '../service/basisdata.php'; // Koneksi ke database

// Cek apakah ID ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data berdasarkan ID
    $sql = "SELECT `Jb`, `path_gambar`, `isi`, `penulis`, `created_at` FROM `kelurahan` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah ada data yang ditemukan
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan!";
        exit();
    }
} else {
    echo "ID tidak ditemukan!";
    exit();
}
?>

<?php include 'partials/head.html'; ?>

<!-- Konten Halaman Detail -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card border border-2">
                <div class="card-body">
                    <h1 class="card-title"><?php echo $row['Jb']; ?></h1>
                    <p class="card-text">
                        <?php echo $row['isi']; ?>
                    </p>
                    <p><strong>Penulis:</strong> <?php echo $row['penulis']; ?></p>
                    <p><strong>Tanggal:</strong> <?php echo $row['created_at']; ?></p>
                </div>
            </div>

            <!-- Jika ada gambar -->
            <?php if (!empty($row['path_gambar'])): ?>
            <div class="mt-4">
                <img src="../Admin/Aksi/<?php echo $row['path_gambar']; ?>" width="90" height="90" class="img-fluid" alt="Gambar terkait">
            </div>
            <?php endif; ?>

            <div class="mt-3">
                <a href="informasi.php" class="btn btn-primary">Kembali ke Dashboard</a>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.html'; ?>
