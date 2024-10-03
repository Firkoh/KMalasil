<?php include '../service/basisdata.php'; ?>
<?php include 'partials/head.html'; ?>

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

<!-- pemisah -->
<div class="container-fluid mt-4"> <!-- Menambah margin top untuk memberi jarak -->
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
                  <i class="bi bi-house me-2"></i> Dashboard
                </a>
              </li>
              <li>
                <a href="sejarah.php" class="nav-link link-body-emphasis">
                  <i class="bi bi-clock-history me-2"></i> Sejarah Kelurahan
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-body-emphasis active">
                  <i class="bi bi-newspaper me-2"></i> Informasi Kelurahan
                </a>
              </li>
              <li>
                <a href="rt.php" class="nav-link link-body-emphasis">
                  <i class="bi bi-bar-chart-line me-2"></i> Data RT/RW
                </a>
              </li>
              <li>
                <a href="Plurah.php" class="nav-link link-body-emphasis">
                  <i class="bi bi-bar-chart-line me-2"></i> Perangkat Kelurahan
                </a>
              </li>
              <li>
                <a href="galeri.php" class="nav-link link-body-emphasis">
                  <i class="bi bi-file-image me-2"></i> Galeri
                </a>
              </li>
              <li>
                <a href="kontak.php" class="nav-link link-body-emphasis">
                  <i class="bi bi-person-lines-fill me-2"></i> Kontak
                </a>
              </li>
            </ul>
            <hr>
          </li>
        </ul>
      </div>
    </div>

    <!-- ini tabel informasi kelurahan -->
    <div class="col-md-9 col-12">
      <div id="carouselExampleControls" class="carousel slide d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary border border-2" data-bs-ride="carousel" style="min-height: 80vh;"> <!-- Menambahkan min-height -->
        <div class="carousel-inner">
          <!-- awal carousal -->
          <?php
          $sql = "SELECT `id`, `Jb`, `path_gambar`, `isi`, `penulis`, `created_at` FROM `kelurahan` WHERE 1";
          $result = $conn->query($sql);
          $isFirst = true; // Untuk mengatur item pertama sebagai "active"
          
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
          ?>
              <div class="carousel-item <?php echo $isFirst ? 'active' : ''; ?>">
                <div class="p-5 text-center bg-primary rounded-3 d-flex justify-content-center align-items-center" style="height: 400px; background-image: url('../Admin/Aksi/<?php echo $row['path_gambar']; ?>'); background-position: center; background-size: contain; background-repeat: no-repeat;">
                  <div class="bg-black opacity-50 p-3">
                    <p class="text-white">Tanggal: <?php echo $row['created_at']; ?></p>
                    <div class="m-2">
                      <h1 class="display-4 text-white"><?php echo $row['Jb']; ?></h1>
                      <p class="lead text-white"><?php echo substr($row['isi'], 0, 40) . (strlen($row['isi']) > 40 ? "..." : ""); ?></p>
                      <hr class="my-4 border-white">
                      <p class="text-white">Penulis: <?php echo $row['penulis']; ?></p>
                      <a href="informasi-detail.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary btn-lg text-white" type="button">Detail</button></a>
                    </div>
                  </div>
                </div>
              </div>
          <?php
              $isFirst = false; // Set active hanya untuk item pertama
            }
          }
          ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

  </div>
</div>

<?php include 'partials/footer.html'; ?>
