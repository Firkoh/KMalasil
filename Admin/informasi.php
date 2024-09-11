<?php include 'partials/head.html'?>
 <div class="bg-primary border border-2">
    <div class="container">
      <div class="row">
          <nav class="nav justify-content-end">
            <a href="#" class="nav-link nav-fill" style="color: azure;">Log Out</a>
          </nav>
        <div class="col-md-10 offset-md-1 pl-3 pt-5 col-10">
          <h3 class="text-center">Selamat Datang di Web Kelurahan Malasilen</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-2">
    <div class="row">
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
              <a href="homes.php" class="nav-link" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="home"/></svg>
                Dashboard
              </a>
            </li>
            <li>
              <a href="sejarah.php" class="nav-link link-body-emphasis">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                Sejarah Kelurahan
              </a>
            </li>
            <li>
  
              <a href="#" class="nav-link active link-body-emphasis">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                Informasi Kelurahan
              </a>
            </li>
            <li>
              <a href="#" class="nav-link link-body-emphasis">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                Data penduduk
              </a>
            </li>
            <li>
              <a href="#" class="nav-link link-body-emphasis">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                Data RT/RW
              </a>
            </li>
            <li>
              <a href="#" class="nav-link link-body-emphasis">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                Galeri
              </a>
            </li>
            <li>
              <a href="#" class="nav-link link-body-emphasis">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
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
    <h2 class="display-6 text-center">Tabel <?php ?></h2>
  

<table class="table table-striped">
  <thead>
    <tr>
      <th>Nama Kelurahan</th>
      <th>RT/RW</th>
      <th>Distrik</th>
      <th>Kabupaten/Kota</th>
      <th>Provinsi</th>
      <th>Jumlah Penduduk</th>
      <th colspan="2">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>halo</td>
      <td>halo</td>
      <td>halo</td>
      <td>halo</td>
      <td>halo</td>
      <td>halo</td>
      <td>halo</td>
      <td>halo</td>
    </tr>
    <tr>
      </tr>
  </tbody>
</table>
 
  </div>
  <div class="col-md-5 col-12">

<div class="form-container mt-5">
  <div class="form-title mb-3">Tambah Data Kelurahan</div>
  <div class="form-subtitle mb-3">Isikan data dengan lengkap</div>

  <form>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Nama Kelurahan" required>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="RT/RW" required>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Distrik" required>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Kabupaten/Kota" required>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Provinsi" required>
    </div>
    <div class="mb-3">
      <input type="number" class="form-control" placeholder="Jumlah Penduduk" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
</div>
</div>
</div>
    </div>
  </div>

<?php include 'partials/footer.html'?>