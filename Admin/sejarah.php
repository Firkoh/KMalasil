<?php 
if (!isset($_SESSION)) {
    session_start(); // Mulai sesi jika belum aktif
}

include '../service/basisdata.php';

?>
<?php include 'partials/head.html'?>


 <div class="bg-primary border border-2">
    <div class="container">
      <div class="row">
          <nav class="nav justify-content-end">
            <a href="#" class="nav-link nav-fill" style="color: azure;">Log Out</a>
          </nav>
        <div class="col-md-10 offset-md-1 col-10">
          <h3 class="text-center">Admin Kelurahan Malasilen</h3>
        </div>
      </div>
    </div>
  </div>

<!-- pemisah  -->
  <div class="container-fluid mt-2">
    <div class="row">
     <div class="col-md-3 col-12">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary border border-2">
          <div class="container text-center">
            <div class="row">
              <div class="col">
                <a href="homes.php">
                  <i class="bi bi-person-circle" style="font-size: 300%;"></i>
                </a>
              </div>
              <a href="homes.php" class="">
                <strong style="font-size: 18px;">Admin</strong>
              </a>
            </div>
          </div>
  
          <hr>
       <ul class="nav nav-pills flex-column mb-auto">
  <li class="nav-item">
    <a href="homes.php" class="nav-link link-body-emphasis" aria-current="page">
      <i class="bi bi-house me-2"></i>
      Dashboard
    </a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link active link-body-emphasis">
      <i class="bi bi-clock-history me-2"></i>
      Sejarah Kelurahan
    </a>
  </li>
  <li>
    <a href="informasi.php" class="nav-link link-body-emphasis">
      <i class="bi bi-newspaper me-2"></i>
      Informasi Kelurahan
    </a>
  </li>
  <li>
    <a href="penduduk.php" class="nav-link link-body-emphasis">
      <i class="bi bi-people me-2"></i>
      Data penduduk
    </a>
  </li>
  <li>
    <a href="rt.php" class="nav-link link-body-emphasis">
      <i class="bi bi-bar-chart-line me-2"></i>
      Data RT/RW
    </a>
  </li>
 <li>
              <a href="Plurah.php" class="nav-link link-body-emphasis">
                <i class="bi bi-bar-chart-line me-2"></i>
                Perangkat Kelurahan
              </a>
            </li>
  <li>
    <a href="galeri.php" class="nav-link link-body-emphasis">
      <i class="bi bi-file-image me-2"></i>
      Galeri
    </a>
  </li>
  <li>
    <a href="kontak.php" class="nav-link link-body-emphasis">
      <i class="bi bi-person-lines-fill me-2"></i>
      Kontak
    </a>
  </li>
</ul>
          <hr>
        </div>
      </div>
    <?php
include '../service/basisdata.php';
$sql = "SELECT * FROM visi_misi LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row['Visi_Id'];

    $ISI = $row['ISI'];
    $VISI = $row['Visi'];
    $MISI = $row['Misi'];
    $TGL = $row['Tanggal_Update'];
} else {
    echo "<p class='text-center'>Informasi sejarah tidak ditemukan.</p>";
}
?>
<div class="col-md-9 col-12">
<div class="row">
<div class="col-md-6 col-12 border border-1">
    <h2 class="display-6 text-center">Sejarah</h2>
    <p><?php echo $ISI; ?></p>
    <h2 class="display-6 text-center">Visi</h2>
    <p><?php echo $VISI; ?></p>
    <h2 class="display-6 text-center">Misi</h2>
    <p><?php echo $MISI; ?></p>
    <p><i>Tanggal Update : <?php echo $TGL; ?></i>></p>
</div>

  <div class="col-md-6 col-12 border border-1">

<div class="form-container mt-5">
  <div class="form-title mb-3">Ubah Data Sejarah</div>
  <div class="form-subtitle mb-3">Isikan data dengan lengkap</div>



  <form action="Aksi/ubahSejarah.php" method="post">
  <input type="hidden" name="visi_id" value="<?php echo $id; ?>">
  <div class="mb-3">
    <input type="text" class="form-control" id="judul_sejarah" name="judul_sejarah" value="<?php echo $VISI; ?>" placeholder="Judul Sejarah" required>
  </div>
  <div class="mb-3">
    <textarea class="form-control" id="isi" name="isi" placeholder="ISI" required><?php echo $ISI; ?></textarea>
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" id="visi" name="visi" value="<?php echo $VISI; ?>" placeholder="Visi" required>
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" id="misi" name="misi" value="<?php echo $MISI; ?>" placeholder="Misi" required>  </div>
  <button type="submit" class="btn btn-primary">Ubah</button>
  <button type="reset" class="btn btn-primary">Batal</button>
</form>
</div>
</div>
    </div>
  </div>
<?php
include 'partials/footer.html';
?>