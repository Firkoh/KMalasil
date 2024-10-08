  <?php include 'partials/head.html'?>

  <!-- header -->
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
<!-- tengah -->
<div class="col-md-9 col-12">
<div class="row">
            <div class="col-md-6 col-12 text-center border border-2 overflow-auto" style="height: 500px;">
    <?php
include '../service/basisdata.php';
    $sql = "SELECT * FROM galeri";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
              <div class="card m-2 d-inline-block" style="width: 18rem;">
                <img alt="Gambar Kartu" class="card-img-top" src="Aksi/<?php echo $row['path_file']; ?>"/>
                <div class="card-body">
                <h5 class="card-title"><?php echo $row['nama_gambar']; ?></h5>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger" onclick="hapus(<?php echo $row['id']; ?>)">Hapus</button>

                </div>
              </div>
            <?php
        }
    }
    ?>
            </div>
<!-- sebelah kanan -->
      <div class="col-md-6 col-12 border border-2"  style="height:500px; overflow-x: auto;">
<div class="form-container mt-5">
  <div class="form-title mb-3">Tambah Gambar</div>
  <div class="form-subtitle mb-3">Isikan data dengan lengkap</div>

  <form action="Aksi/TambahGaleri.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <input name="nama_gambar" type="text" class="form-control" placeholder="Nama Gambar" required>
    </div>
    <div class="mb-3">
      <input name="path_file" type="file" class="form-control mb-3" placeholder="Pilih Gambar" required>
      <button class="btn btn-primary">Tambah Gambar</button>
    </div>
  </form>
</div>
      </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>

<script>
function hapus(<?php echo $row['id']; ?>) {
    Swal.fire({
  title: "Apakah Kamu Yakin Inggin Mengghapus Gambar Ini",
  showCancelButton: true,
  confirmButtonText: "Hapus",
  cancelButtonText: "Batal"
}).then((result) => {

  if (result.isConfirmed) {
    Swal.fire("Di Hapus");
  }else{Swal.fire({
    icon: 'warning',
    title: 'Gagal Hapus',
    text: 'Pastikan Anda telah memilih gambar yang ingin dihapus'
  });}
});
}
</script>
  <?php include 'partials/footer.html'?>
