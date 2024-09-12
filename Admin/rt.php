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
              <a href="#" class="">
                <strong style="font-size: 18px;">Admin</strong>
              </a>
            </div>
          </div>
  
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="homes.php" class="nav-link" aria-current="page">
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
  <div class="col-md-7 col-12">
    <h2 class="display-7 text-center">RT/RW</h2>
  
 <div class="table-responsive" style="font-size: 60%; height: 400px; overflow-y: auto;">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Jumlah KK</th>
                    <th>jumlah Penduduk</th>
                    <th colspan="2" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>halo</td>
                    <td>halo</td>
                    <td>halo</td>
              
                    <td><button style="font-size: 10px; padding: 2px 5px; height: 20px; width: 40px;" class="btn btn-info">edit</button></td>
                    <td><button style="font-size: 10px; padding: 2px 5px;  height: 20px; width: 40px;" class="btn btn-danger">hapus</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
  </div>

  <div class="col-md-5 col-12" style="height:400px; overflow-x: auto;">
<div class="form-container mt-5">
  <div class="form-title mb-3">Tambah Data Penduduk</div>
  <div class="form-subtitle mb-3">Isikan data dengan lengkap</div>

  <form>
    <div class="mb-3">
      <label for="nik" class="form-label">Nik</label>
      <input type="text" class="form-control" id="nik" placeholder="Nik" required>
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" placeholder="Nama" required>
    </div>
    <div class="mb-3">
      <label for="agama" class="form-label">Agama</label>
      <input type="text" class="form-control" id="agama" placeholder="Agama" required>
    </div>
    <div class="mb-3">
      <label for="tempat_lhr" class="form-label">Tempat Lhr</label>
      <input type="text" class="form-control" id="tempat_lhr" placeholder="Tempat Lhr" required>
    </div>
    <div class="mb-3">
      <label for="tanggal_lhr" class="form-label">Tanggal Lhr</label>
      <input type="date" class="form-control" id="tanggal_lhr" placeholder="Tanggal Lhr" required>
    </div>
    <div class="mb-3">
      <label for="jns_kelamin" class="form-label">Jns Kelamin</label>
      <input type="text" class="form-control" id="jns_kelamin" placeholder="Jns Kelamin" required>
    </div>
    <div class="mb-3">
      <label for="gol_darah" class="form-label">Gol Darah</label>
      <input type="text" class="form-control" id="gol_darah" placeholder="Gol Darah" required>
    </div>
    <div class="mb-3">
      <label for="pendidikan" class="form-label">Pendidikan</label>
      <input type="text" class="form-control" id="pendidikan" placeholder="Pendidikan" required>
    </div>
    <div class="mb-3">
      <label for="pekerjaan" class="form-label">Pekerjaan</label>
      <input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan" required>
    </div>
    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <input type="text" class="form-control" id="status" placeholder="Status" required>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Tambah</button>
  </form>
</div>
</div>
</div>
    </div>
  </div>

<?php include 'partials/footer.html'?>