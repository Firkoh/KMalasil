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

<!-- pemisah  -->
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
              <a href="#" class="nav-link link-body-emphasis active">
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
<div class="col-md-6 col-12 border border-2">
    <h2 class="display-6 text-center">Kontak<?php ?></h2>
        <table class="table table-borderless mt-4 fs-5">
            <tbody>
                <tr>
                    <td class="text-end">Telepon :</td>
                    <td class="text-start text-decoration-underline"><?php ?></td>
                </tr>
                <tr>
                    <td class="text-end">Email :</td>
                    <td class="text-start text-decoration-underline"><?php ?></td>
                </tr>
                <tr>
                    <td class="text-end">WhatsApp :</td>
                    <td class="text-start text-decoration-underline"><?php ?></td>
                </tr>
                <tr>
                    <td class="text-end">Instagram :</td>
                    <td class="text-start text-decoration-underline"><?php ?></td>
                </tr>
                <tr>
                    <td class="text-end">Facebook :</td>
                    <td class="text-start text-decoration-underline"><?php ?></td>
                </tr>
                <tr>
                    <td class="text-end">Youtube :</td>
                    <td class="text-start text-decoration-underline"><?php ?></td>
                </tr>
            </tbody>
        </table>
  </div>

  <div class="col-md-6 col-12 border border-2">
<div class="form-container mt-3">
  <div class="form-title mb-3">Kontak Kelurahan</div>
  <div class="form-subtitle mb-3">Isikan data dengan lengkap</div>

  <form>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Telepon" required>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Email" required>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="WhatsApp" required>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Instagram" required>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Facebook" required>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Youtube" required>
    </div>
    <button type="submit" class="btn btn-primary">Ubah</button>
  </form>
</div>
</div>
</div>
</div>
    </div>
  </div>
</div>
</div>
<?php
include 'partials/footer.html';
?>