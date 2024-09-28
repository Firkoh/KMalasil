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
  
<!-- sidebar -->

        <div class="col-md-3 col-12">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary border border-2">
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
    <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="home.php" class="nav-link link-body-emphasis" aria-current="page">
<i class="bi bi-house me-2"></i>
                Dashboard
              </a>
            </li>
            <li>
              <a href="sejarah.php" class="nav-link link-body-emphasis">
                <i class="bi bi-clock-history me-2"></i>
                Sejarah Kelurahan
              </a>
            </li>
            <li>
  
              <a href="#" class="nav-link link-body-emphasis  active">
                <i class="bi bi-newspaper me-2"></i>
                Informasi Kelurahan
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

<!-- ini tabel informasi kelurahan -->
<div class="col-md-9 col-12 ">
  <div class="row me-2">
    <div class="col-md-12 col-12 border border-2">
       <!-- awal carausal -->
        <div class="carousel-item">
          <div class="p-5 text-center bg-body-tertiary rounded-3" style="height: 400px ;background-image: url('../assets/Malasilen.jpeg'); background-position: center; background-size: cover;">
            <div class="bg-black opacity-50">
            <h1 class="display-4 text-white">Selamat Datang</h1>
            <p class="lead text-white">Kantor kelurahan memiliki</p>
            <hr class="my-4 border-white">
            <p class="text-white">Tentang Kami</p>
            <div class="m-2">
              <a href="sejarah.php"><button class="btn btn-primary btn-lg text-white" type="button">Sejarah Kelurahan</button></a>
              <a href="informasi.php"><button class="btn btn-primary btn-lg mx-2 text-white" type="button">Informasi kelurahan</button></a>
            </div>
            <a href="rt.php"><button class="btn btn-primary btn-lg me-2 text-white" type="button">Data RT/RW</button></a>
            <a href="Plurah.php"><button class="btn btn-primary btn-lg me-2 text-white" type="button">Peranggkat Kelurahan</button></a>
            <a href="kontak.php"><button class="btn btn-primary btn-lg text-white" type="button">Kontak</button></a>
            </div>
          </div>
        </div>
  <!-- akhir carausal -->
      </div>
    </div>
 
</div>
</div>
</div>
    </div>


