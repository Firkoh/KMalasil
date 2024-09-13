<?php include 'partials/head.html'?>
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

<!-- pemisah  -->
  <div class="container-fluid mt-2">
    <div class="row">
  
<!-- sidebar -->

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
            <li>
              <a href="sejarah.php" class="nav-link link-body-emphasis">
                <i class="bi bi-clock-history me-2"></i>
                Sejarah Kelurahan
              </a>
            </li>
            <li>
  
              <a href="informasi.php" class="nav-link link-body-emphasis  ">
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
              <a href="#" class="nav-link link-body-emphasis active">
                <i class="bi bi-person-lines-fill me-2"></i>
                Kontak
              </a>
            </li>
          </ul>
          <hr>
        </div>
      </div>


<div class="col-md-9 col-12">
  <div class="row me-1">
<div class="col-md-12 col-12 border border-2">
    <h2 class="display-8 text-center">Kontak Kami <?php ?></h2>
        <table class="table table-borderless mt-4 fs-5">
            <tbody>
                <th>
                    <a href="<?php ?>" target="_blank" class="text" style="font-size: 200%;"><i class="bi bi-instagram"></i></a>
                </th>
                <th>
                    <a href="<?php ?>" target="_blank" class="link" style="font-size: 200%;"><i class="bi bi-whatsapp"></i></a>
                </th>
                <th>
                    <a href="<?php ?>" target="_blank" class="link" style="font-size: 200%;"><i class="bi bi-facebook"></i></a>
                </th>
                <th>
                    <a href="<?php ?>" target="_blank" class="link" style="font-size: 200%;"><i class="bi bi-youtube"></i></a>
                </th>
                <th>
                   <a href="<?php ?>" target="_blank" class="link" style="font-size: 200%;"><i class="bi bi-instagram"></i></a>
                </th>
                <th>
                    <a href="<?php ?>" target="_blank" class="link" style="font-size: 200%;"><i class="bi bi-instagram"></i></a>
                </th>
            </tbody>
        </table>
  </div>


</div>
</div>
</div>
    </div>
<?php
include 'partials/footer.html';
?>