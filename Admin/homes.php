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
                        <a href="#" class="nav-link active" aria-current="page">
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

        <div class="col-md-9 col-12 border border-2 text-white" >
            <div class="container  pt-5"> <!-- added pt-5 class -->
                <div class="p-5 text-center bg-body-tertiary rounded-3" style="background-image: url('../assets/Malasilen.jpeg'); background-size: cover;">
                    <div class="py-5" style="background-color: rgba(0, 0, 0, 0.5); box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
                        <h1 class="display-4" style="color: #fff; opacity: 0.5;">Selamat Datang <?php  ?></h1>
                        <p class="lead" style="color: #fff; opacity: 0.5;">Kantor kelurahan memiliki</p>
                        <hr class="my-4" style="border-color: rgba(255, 255, 255, 0.5);">
                        <p style="color: #fff; opacity: 0.5;">tentang </p>
                        <button class="btn btn-primary btn-lg" type="button" style="background-color: rgba(255, 255, 255, 0.5); border-color: rgba(255, 255, 255, 0.5);">Belajar</button>
                    </div>
                </div>
            </div>
        </div>      
        <?php include 'partials/footer.html'; ?>

