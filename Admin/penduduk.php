    <?php
    session_start();
    if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
        include 'partials/head.php'?>
        <?php
    } else {
        header("Location: index.php");
        exit;
    }
    ?>

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
              <a href="#" class="nav-link link-body-emphasis active">
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

   <div class="col-md-9 col-12 ">
<div class="row">
  <div class="col-md-7 col-12 border border-2">
    <h2 class="display-7 text-center" id="hal">Tabel Penduduk</h2>
  
 <div class="table-responsive" style="font-size: 60%; height: 400px; overflow-y: auto;">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Agama</th>
                    <th>Tempat Lhr</th>
                    <th>Tanggal_Lhr</th>
                    <th>Jns Kelamin</th>
                    <th>Gol Darah</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Status</th>
                    <th colspan="2" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
              <?php
include "../service/basisdata.php";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM penduduk ORDER BY Nik ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row['Nik']; ?></td>
            <td><?php echo $row['Nama']; ?></td>
            <td><?php echo $row['Agama']; ?></td>
            <td><?php echo $row['Tempat_Lhr']; ?></td>
            <td><?php echo $row['Tanggal_Lhr']; ?></td>
            <td><?php echo $row['Jenis_Kelamin']; ?></td>
            <td><?php echo $row['Gol_Darah']; ?></td>
            <td><?php echo $row['Pendidikan']; ?></td>
            <td><?php echo $row['Pekerjaan']; ?></td>
            <td><?php echo $row['Status']; ?></td>
            <td>
                        <button style="font-size: 10px; padding: 2px 5px; height: 20px; width: 40px;" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['ID']; ?>">edit</button>

                        <div class="modal fade" id="editModal<?php echo $row['ID']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Informasi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="Aksi/editPenduduk.php" method="post">
                                  <div class="form-group mb-3">
                                    <label for="Nik" class="form-label">Nik</label>
                                    <input type="text" class="form-control" id="Nik" name="Nik" value="<?php echo $row['Nik']; ?>">
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
                                    <select class="form-control" id="Jenis_Kelamin" name="Jenis_Kelamin">
                                      <option value="">-- Pilih Jenis Kelamin --</option>
                                      <option value="Laki-laki" <?php echo $row['Jenis_Kelamin'] == 'Laki-laki' ? 'selected' : ''; ?>>Pria</option>
                                      <option value="Perempuan" <?php echo $row['Jenis_Kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Wanita</option>
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
                                    <label for="Pekerjaan" class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" id="Pekerjaan" name="Pekerjaan" value="<?php echo $row['Pekerjaan']; ?>">
                                  </div>
                                  <div class="form-group mb-3">
                                    <label for="Status" class="form-label">Status</label>
                                    <input type="text" class="form-control" id="Status" name="Status" value="<?php echo $row['Status']; ?>">
                                  </div>
                                  <input type="hidden" name="id" id="id" value="<?php echo $row['ID']; ?>">
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
            <td>
              <button style="font-size: 10px; padding: 2px 5px; height: 20px; width: 40px;" class="btn btn-danger" onclick="if(confirm('Anda yakin ingin menghapus informasi ini?')) location.href = 'Aksi/hapusPenduduk.php?id=<?php echo $row['ID']; ?>'">Hapus</button>
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
  <form action="Aksi/TambahPenduduk.php" method="post">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nik" name="nik">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nama" name="nama">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Agama" name="agama">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Tempat Lhr" name="tempat_lhr">
            </div>
            <div class="mb-3">
                <input type="date" class="form-control" id="tanggal_lhr" placeholder="Tanggal Lhr" required min="1940-01-01" max="2006-12-31" name="tanggal_lhr">
            </div>
            <div class="mb-3">
                <select class="form-control" name="jenis_kelamin">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-laki">Pria</option>
                    <option value="Perempuan">Wanita</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Gol Darah" name="gol_darah">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Pendidikan" name="pendidikan">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Status" name="status">
            </div>
    <button type="submit" class="btn btn-primary mb-2" onclick="tambahData()">Tambah</button>

  </form>
</div>
</div>
</div>
    </div>
  </div>

<script>
function tambahData() {
    Swal.fire({
        title: 'Apakah Kamu Yakin?',
        text: 'Data yang diinputkan tidak dapat diubah',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Tambah',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire('Data Berhasil Ditambahkan', '', 'success')
        }
    })
}

function hapus(Nik) {
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
<?php include 'partials/footer.php'?>