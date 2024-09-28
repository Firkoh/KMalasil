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
      <h2 class="display-7 text-center">Tabel Informasi Kelurahan</h2>
      
      <div class="table-responsive" style="font-size: 60%; height: 400px; overflow-y: auto;">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Nama Kelurahan</th>
              <th>RT/RW</th>
              <th>Distrik</th>
              <th>Kabupaten/Kota</th>
              <th>Provinsi</th>
              <th>Jumlah Penduduk</th>
        
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM kelurahan ORDER BY id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                      h<?php echo $row['judul']; ?></td>
                      <td><?php echo $row['RT_RW']; ?></td>
                      <td><?php echo $row['Distrik']; ?></td>
                      <td><?php echo $row['Kabupaten_Kota']; ?></td>
                      <td><?php echo $row['Provinsi']; ?></td>
                      <td><?php echo $row['Jumlah_Penduduk']; ?></td>
                    
                    </tr>
                         <?php }
          } 
          else{echo "<h5>Admin Sedang Cuti</h5>";
          }
          ?>
          </tbody>
        </table>
      </div>
    </div>
 
</div>
</div>
</div>
    </div>


