    <?php
    session_start();
    if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
        include 'partials/head.html'?>
        <?php
    } else {
        header("Location: index.php");
        exit;
    }
    ?>
<?php include 'partials/head.html'?>

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
                <img alt="Gambar Kartu" class="card-img-top img-fluid" src="Aksi/<?php echo $row['path_file']; ?>" style="width: 100%; height: 200px; object-fit: contain;"/>
                <div class="card-body">
                <h5 class="card-title"><?php echo $row['nama_gambar']; ?></h5>
               
                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['id']; ?>">edit</button>

                        <div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Galeri</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="Aksi/editGaleri.php" method="post" enctype="multipart/form-data">
                                  <div class="form-group mb-3">
                                    <label for="nama_gambar" class="form-label">Nama Gambar</label>
                                    <input type="text" class="form-control" id="nama_gambar" name="nama_gambar" value="<?php echo $row['nama_gambar']; ?>">
                                  </div>
                                  <div class="form-group mb-3">
                                    <label for="path_file" class="form-label">Ganti Gambar</label>
                                    <input type="file" class="form-control" id="path_file" name="path_file">
                                  </div>
                                  <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    
                <button class="btn btn-danger" onclick="if(confirm('Anda yakin ingin menghapus galeri?')) location.href = 'Aksi/hapusGaleri.php?id=<?php echo $row['id']; ?>'">Hapus</button>
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
      <label for="nama_gambar" class="form-label">Nama Gambar</label>
      <input name="nama_gambar" type="text" class="form-control" id="nama_gambar" placeholder="Nama Gambar" required>
    </div>
    <div class="mb-3">
      <label for="path_file" class="form-label">Pilih Gambar</label>
      <input name="path_file" type="file" class="form-control" id="path_file" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Gambar</button>
  </form>
</div>
      </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div
<script>

</script>
  <?php include 'partials/footer.html'?>
