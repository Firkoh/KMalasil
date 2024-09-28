<?php 
if (!isset($_SESSION)) {
    session_start(); // Mulai sesi jika belum aktif
}

include '../service/basisdata.php';

?>

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
  
              <a href="#" class="nav-link link-body-emphasis  active">
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
  <div class="row">
    <div class="col-md-7 col-12 border border-2">
      <h2 class="display-7 text-center" id="hal">Tabel Informasi Kelurahan</h2>
      
      <div class="table-responsive" style="font-size: 60%; height: 400px; overflow-y: auto;">
        <table class="table table-striped table-hover" id="myTable">
          <thead>
            <tr>
              <th>Judul Berita</th>
              <th>ISI</th>
              <th>gambar</th>
              <th>Penulis</th>
              <th>Created At</th>
              <th colspan="2" class="text-center">Aksi</th>
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
                      <td><?php echo $row['Jb']; ?></td>
                      <td><?php echo substr($row['isi'], 0, 100) . (strlen($row['isi']) > 100 ? "..." : ""); ?></td>
                      <td><img src="Aksi/<?php echo $row['path_gambar']; ?>" alt="<?php echo $row['Jb']; ?>" style="width: 100px; height: 100px; object-fit: cover;"></td>
                      <td><?php echo $row['penulis']; ?></td>
                      <td><?php echo $row['created_at']; ?></td>
                      <td>
                        <button style="font-size: 10px; padding: 2px 5px; height: 20px; width: 40px;" class="btn btn-info" data-toggle="modal" data-target="#editModal" onclick="editInformasi(<?php echo $row['id']; ?>)">edit</button>
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="Aksi/editInformasi.php" enctype="multipart/form-data">
                                  <input type="hidden" name="id" id="id">
                                  <div class="mb-3">
                                    <label for="judul" class="form-label">Judul Berita</label>
                                    <input type="text" class="form-control" id="judul" name="judul" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="isi" class="form-label">Isi Berita</label>
                                    <textarea class="form-control" id="isi" name="isi" rows="3" required></textarea>
                                  </div>
                                  <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                  </div>
                                  <div class="mb-3">
                                    <label for="penulis" class="form-label">Penulis</label>
                                    <input type="text" class="form-control" id="penulis" name="penulis" required>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                          <button style="font-size: 10px; padding: 2px 5px; height: 20px; width: 40px;"  class="btn btn-danger" onclick="if(confirm('Anda yakin ingin menghapus informasi ini?')) location.href = 'Aksi/hapusInformasi.php?id=<?php echo $row['id']; ?>'">Hapus</button>
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
  <div class="form-title mb-3">Tambah Data Kelurahan</div>
  <div class="form-subtitle mb-3">Isikan data dengan lengkap</div>

  <form method="post" action="Aksi/Tambahinformasi.php" enctype="multipart/form-data">
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Judul Berita" name="Jb" required>
    </div>
    <div class="mb-3">
      <input type="file" class="form-control" placeholder="gambar" name="path_gambar" required>
    </div>
    <div class="mb-3">
      <textarea class="form-control" placeholder="Isi" name="isi" required></textarea>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Penulis" name="penulis" required>
    </div>
    <button type="submit" class="btn btn-primary" >Tambah</button>
  </form></div>
  </div>
</div>
    </div>
  </div>

<script>




// funggsi hapus
<script>
  
</script>
<?php include 'partials/footer.html'?>