<?php include 'partials/head.html'?>

<!-- header -->
 <div class="bg-primary border border-2">
    <div class="container">
      <div class="row">
          <nav class="nav justify-content-end">
            <a href="#" class="nav-link nav-fill" style="color: azure;">Log Out</a>
          </nav>
        <div class="col-md-10 offset-md-1 col-10">
          <h3 class="text-center">Kelurahan Malasilen</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-2">
    <div class="row">

<!-- sidebar -->
      <div class="col-md-3 col-12">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary border border-2">
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
    <hr>
              <a href="#" class="nav-link active" aria-current="page">
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
  
              <a href="informasi.php" class="nav-link link-body-emphasis">
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
<div class="mb-5"></div>
        </div>
      </div>

   <div class="col-md-9 col-12 ">
  <div class=" d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary border border-2"> <!-- added pt-5 class -->
    <div class="p-5 text-center bg-body-tertiary rounded-3">
      <h1 class="display-4">Selamat Datang <?php  ?></h1>
      <p class="lead">Kantor kelurahan memiliki</p>
      <hr class="my-4">
      <p>tentang </p>
<div class="m-2">
      <a href="sejarah.php"><button class="btn btn-primary btn-lg" type="button">Sejarah Kelurahan</button></a>
      <a href="informasi.php"><button class="btn btn-primary btn-lg mx-2" type="button">Informasi kelurahan</button></a>
</div>
      <a href="rt.php"><button class="btn btn-primary btn-lg me-2" type="button">Data RT/RW</button></a>
      <a href="Plurah.php"><button class="btn btn-primary btn-lg me-2" type="button">Peranggkat Kelurahan</button></a>
      <a href="kontak.php"><button class="btn btn-primary btn-lg" type="button">Kontak</button></a>
    
    </div>
  </div>
</div>

</div>
    </div>
  </div>
<?php include 'partials/footer.html'?>
