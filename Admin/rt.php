

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
  <div class="container-fluid mt-2">
    <div class="row">


    
<!-- sidebar -->
      <div class="col-md-3 col-12">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary border border-2">
          <div class="container text-center">
            <div class="row">
              <div class="col">
                <a href="#">
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
              <a href="penduduk.php" class="nav-link link-body-emphasis ">
                <i class="bi bi-people me-2"></i>
                Data penduduk
              </a>
            </li>
            <li>
              <a href="#" class="nav-link link-body-emphasis active">
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

   <div class="col-md-9 col-12">
<div class="row">
  <div class="col-md-7 col-12 border border-2">
    <h2 class="display-7 text-center" id="hal">RT/RW</h2>
  
 <div class="table-responsive" style="font-size: 60%; height: 400px; overflow-y: auto;">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Jumlah Penduduk</th>
                    <th colspan="2" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                   <?php
include "../service/basisdata.php";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM rtrw ORDER BY id ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
              <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['rt']; ?></td>
            <td><?php echo $row['rw']; ?></td>
            <td><?php echo $row['jumlah_penduduk']; ?></td>
            <td>
               <button style="font-size: 10px; padding: 2px 5px; height: 20px; width: 40px;" class="btn btn-info" data-toggle="modal" data-target="#editModal" data-id="<?php echo $row['id']; ?>">Edit</button>
            </td>
            <td>
             <button style="font-size: 10px; padding: 2px 5px; height: 20px; width: 40px;" class="btn btn-danger" onclick="if(confirm('Anda yakin ingin menghapus informasi ini?')) location.href = 'Aksi/hapusRt.php?id=<?php echo $row['id']; ?>'">Hapus</button>
            </td>
        </tr>
        <?php
    }
}
?>
                </tbody>
              </table>
            </div>
  </div>

  <div class="col-md-5 col-12 border border-2" style="height:500px; overflow-x: auto;">
<div class="form-container mt-5">
  <div class="form-title mb-3">Tambah Data RT RW</div>
  <div class="form-subtitle mb-3">Isikan data dengan lengkap</div>

  <form action="Aksi/TambahRT.php" method="post">
    <div class="mb-3">
      <input type="number" class="form-control" id="rt" placeholder="RT" name="rt" required>
    </div>
    <div class="mb-3">
      <input type="number" class="form-control" id="rw" placeholder="RW" name="rw" required>
    </div>
    <div class="mb-3">
      <input type="number" class="form-control" id="jumlah_penduduk" placeholder="Jumlah Penduduk" name="jumlah_penduduk" required>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Tambah</button>
  </form>
</div></div>
</div>
    </div>
  </div>

<?php include 'partials/footer.html'?>