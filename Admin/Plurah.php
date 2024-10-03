
<?php 
if (!isset($_SESSION)) {
    session_start(); // Mulai sesi jika belum aktif
}

include '../service/basisdata.php';

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
  
              <a href="informasi.php" class="nav-link link-body-emphasis  ">
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
              <a href="#" class="nav-link link-body-emphasis active">
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
    <h2 class="display-7 text-center" id="hal">Perangkat Kelurahan</h2>
  
 <div class="table-responsive" style="font-size: 60%; height: 400px; overflow-y: auto;">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Agama</th>
                    <th>Tempat Lhr</th>
                    <th>Tanggal_Lhr</th>
                    <th>Jenis Kelamin</th>
                    <th>Gol Darah</th>
                    <th>Pendidikan</th>
                    <th>Jabatan</th>
                    <th colspan="2" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
include "../service/basisdata.php";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM plurah ORDER BY Nip ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
              <td><?php echo $row['Nip']; ?></td>
            <td><?php echo $row['Nama']; ?></td>
            <td><?php echo $row['Agama']; ?></td>
            <td><?php echo $row['Tempat_Lhr']; ?></td>
            <td><?php echo $row['Tanggal_Lhr']; ?></td>
            <td><?php echo $row['Jns_Kelamin']; ?></td>
            <td><?php echo $row['Gol_Darah']; ?></td>
            <td><?php echo $row['Pendidikan']; ?></td>
            <td><?php echo $row['Jabatan']; ?></td>
           <td>
                        <button style="font-size: 10px; padding: 2px 5px; height: 20px; width: 40px;" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['id']; ?>">edit</button>

                        <div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Plurah</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="Aksi/editPlurah.php" method="post">
                                  <div class="form-group mb-3">
                                    <label for="Nip" class="form-label">NIP</label>
                                    <input type="text" class="form-control" id="Nip" name="Nip" value="<?php echo $row['Nip']; ?>">
                                  </div>
                                  <div class="form-group mb-3">
                                    <label for="Nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="Nama" name="Nama" value="<?php echo $row['Nama']; ?>">
                                  </div>
                                  <div class="form-group mb-3">
                                    <label for="Agama" class="form-label">Agama</label>
                                    <input type="text" class="form-control" id="Agama" name="Agama" value="<?php echo $row['Agama']; ?>">
                                  </div>
                                  <div class="form-group mb-3">
                                    <label for="Tempat_Lhr" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="Tempat_Lhr" name="Tempat_Lhr" value="<?php echo $row['Tempat_Lhr']; ?>">
                                  </div>
                                  <div class="form-group mb-3">
                                    <label for="Tanggal_Lhr" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="Tanggal_Lhr" name="Tanggal_Lhr" value="<?php echo $row['Tanggal_Lhr']; ?>">
                                  </div>
                                  <div class="form-group mb-3">
                                    <label for="Jenis_Kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-control" id="Jns_Kelamin" name="Jns_Kelamin">
                                      <option value="">-- Pilih Jenis Kelamin --</option>
                                      <option value="Laki-laki" <?php echo $row['Jns_Kelamin'] == 'Laki-laki' ? 'selected' : ''; ?>>Pria</option>
                                      <option value="Perempuan" <?php echo $row['Jns_Kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Wanita</option>
                                    </select>
                                  </div>
                                  <div class="form-group mb-3">
                                    <label for="Gol_Darah" class="form-label">Golongan Darah</label>
                                    <input type="text" class="form-control" id="Gol_Darah" name="Gol_Darah" value="<?php echo $row['Gol_Darah']; ?>">
                                  </div>
                                  <div class="form-group mb-3">
                                    <label for="Pendidikan" class="form-label">Pendidikan</label>
                                    <input type="text" class="form-control" id="Pendidikan" name="Pendidikan" value="<?php echo $row['Pendidikan']; ?>">
                                  </div>
                                  <div class="form-group mb-3">
                                    <label for="Jabatan" class="form-label">Jabatan</label>
                                    <input type="text" class="form-control" id="Jabatan" name="Jabatan" value="<?php echo $row['Jabatan']; ?>">
                                  </div>
                                  <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
             <td>
              <button style="font-size: 10px; padding: 2px 5px; height: 20px; width: 40px;" class="btn btn-danger" onclick="if(confirm('Anda yakin ingin menghapus informasi ini?')) location.href = 'Aksi/hapusPlurah.php?id=<?php echo $row['id']; ?>'">Hapus</button>
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
  <div class="form-title mb-3">Tambah Data Penduduk</div>
  <div class="form-subtitle mb-3">Isikan data dengan lengkap</div>

  <form method="post" action="Aksi/Tambahplurah.php">
    <div class="mb-3">
      <label for="nip" class="form-label">NIP</label>
      <input type="text" class="form-control" id="nip" placeholder="nip" name="nip" required>
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required>
    </div>
    <div class="mb-3">
      <label for="agama" class="form-label">Agama</label>
      <input type="text" class="form-control" id="agama" placeholder="Agama" name="agama" required>
    </div>
    <div class="mb-3">
      <label for="tempat_lhr" class="form-label">Tempat Lahir</label>
      <input type="text" class="form-control" id="tempat_lhr" placeholder="Tempat Lhr" name="tempat_lhr" required>
    </div>
    <div class="mb-3">
      <label for="tanggal_lhr" class="form-label">Tanggal Lahir</label>
      <input type="date" class="form-control" id="tanggal_lhr" placeholder="Tanggal Lhr" name="tanggal_lhr" required min="1940-01-01" max="2006-12-31">
    </div>
    <div class="mb-3">
        <label for="jk" class="form-label">Jenis Kelamin</label>
        <select class="form-control" id="jk" name="jk">
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="Laki-laki">Pria</option>
            <option value="Perempuan">Wanita</option>
        </select>
    </div>
      <label for="gol_darah" class="form-label">Gol Darah</label>
      <input type="text" class="form-control" id="gol_darah" placeholder="Gol Darah" name="gol_darah" required>
    </div>
    <div class="mb-3">
      <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
      <input type="text" class="form-control" id="pendidikan" placeholder="Pendidikan" name="pendidikan" required>
    </div>
    <div class="mb-3">
      <label for="jabatan" class="form-label">Jabatan</label>
      <input type="text" class="form-control" id="jabatan" placeholder="jabatan" name="jabatan" required>
    </div>

    <button type="submit" class="btn btn-primary mb-2">Tambah</button>
  </form>
</div>
</div>
</div>
    </div>
  </div>
<script>
function hapus() {
    Swal.fire({
  title: "Apakah Kamu Yakin Inggin Mengghapus Ini",
  showCancelButton: true,
  confirmButtonText: "Hapus",
  cancelButtonText: "Batal"
}).then((result) => {

  if (result.isConfirmed) {
    Swal.fire("Di Hapus", "");
  }
});
}
</script>
<?php include 'partials/footer.html'?>