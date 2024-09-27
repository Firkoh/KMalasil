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
    <h2 class="display-7 text-center">Tabel Penduduk</h2>
  
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
                <button style="font-size: 10px; padding: 2px 5px; height: 20px; width: 40px;" class="btn btn-info" data-toggle="modal" data-target="#editModal" data-id="<?php echo $row['Nik']; ?>">Edit</button>
            </td>
            <td>
                <button style="font-size: 10px; padding: 2px 5px; height: 20px; width: 40px;" class="btn btn-danger" onclick="hapus(<?php echo $row['Nik']; ?>)">Hapus</button>
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
    <button type="submit" class="btn btn-primary mb-2">Tambah</button>
  </form>
</div>
</div>
</div>
    </div>
  </div>

<script>
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
<?php include 'partials/footer.html'?>