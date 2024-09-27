<?php 

include '../service/basisdata.php';

?>
<?php include 'partials/head.html'?>


<!-- header -->
 <div class="bg-primary border border-2">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1 col-10">
          <h3 class="text-center">Kelurahan Malasilen</h3>
        </div>
      </div>
    </div>
  </div>

<!-- pemisah  -->
  <div class="container-fluid mt-2">
    <div class="row">
     <div class="col-md-3 col-12">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary border border-2">
         
  
          <hr>
       <ul class="nav nav-pills flex-column mb-auto">
  <li class="nav-item">
    <a href="home.php" class="nav-link link-body-emphasis" aria-current="page">
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
    $jdlsjr = $row['judul_sejarah'];
    $ISI = $row['ISI'];
    $VISI = $row['Visi'];
    $MISI = $row['Misi'];
    $TGL = $row['Tanggal_Update'];
} else {
    echo "<p class='text-center'>Informasi sejarah tidak ditemukan.</p>";
}
?>

<div class="col-md-9 col-12 border border-2">
<div class="row">
<div class="col-md-12 col-12 border border-2">
    <h2 class="display-6 text-center"><?php echo $jdlsjr; ?></h2>
    <p><?php echo $ISI; ?></p>
    <h2 class="display-6 text-center">Visi</h2>
    <p><?php echo $VISI; ?></p>
    <h2 class="display-6 text-center">Misi</h2>
    <p><?php echo $MISI; ?></p>
    <p><i>Tanggal Update : <?php echo $TGL; ?></i>></p>
</div>
</div>
</div>
<?php
include 'partials/footer.html';
?>