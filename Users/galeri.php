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
                <a href="#" class="nav-link link-body-emphasis active">
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


    <div class="col-md-9 col-12">
  <div class="row me-1">
    <div class="col-md-12 col-12 text-center border border-2">
<div class="row"> 
        <?php
        include '../service/basisdata.php';

            $sql = "SELECT * FROM galeri ORDER BY id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
      <div class="card m-2" style="width: 11rem; overflow-y: auto; max-height: 500px;">
        <img alt="<?php echo $row['nama_gambar'] ?>" class="card-img-top" src="Admin/Aksi/<?php echo $rows['path_file']?> "/>
        <div class="card-body">
          <h5 class="card-title">Judul Kartu</h5>
        </div>
      </div>
                  <?php }
          } 
          else{echo "<h5>Admin Sedang Cuti</h5>";
          }
          ?>
</div>
    </div>
  </div>
</div>

  </div>
  </div>
  <?php include 'partials/footer.html'?>
