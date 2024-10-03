<?php include 'partials/head.html'?>

<!-- header -->
<div class="bg-primary border border-2">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-10">
                <h3 class="text-center">Kelurahan Malasilen</h3>
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
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link link-body-emphasis" aria-current="page">
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
            <div class="row me-1">
                <div class="col-md-12 col-12 border border-2">
                    <h2 class="display-8 text-center">Kontak Kami</h2>
                    
                    <!-- Peta Lokasi -->
                    <div class="mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63710.20232153009!2d131.2213997378845!3d-0.8746733023984917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x328cabc2047600ab%3A0x457dbe22cd9e66d!2sSorong%2C%20West%20Papua!5e0!3m2!1sen!2sid!4v1696300000000!5m2!1sen!2sid" 
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <!-- Kontak Details -->
                    <?php
                    include '../service/basisdata.php';
                    $sql = "SELECT `id`, `te`, `em`, `wa`, `ins`, `fa`, `yo` FROM `kontak` WHERE 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                    ?>
                    <table class="table table-borderless mt-4 fs-5">
                        <tbody>
                            <tr>
                                <th>
                                    <a href="https://api.whatsapp.com/send/?phone=<?php echo $row['wa']; ?>&text&app_absent=0" target="_blank" class="text" style="font-size: 200%;" onmouseover="this.style.color='#00ff00'" onmouseout="this.style.color='#9fc5f8'"><i class="bi bi-whatsapp"></i></a>
                                </th>
                                <th>
                                    <a href="mailto:<?php echo $row['em']; ?>" target="_blank" class="link" style="font-size: 200%;" onmouseover="this.style.color='#b1b1b1'" onmouseout="this.style.color='#9fc5f8'"><i class="bi bi-envelope"></i></a>
                                </th>
                                <th>
                                    <a href="https://www.instagram.com/<?php echo $row['ins']; ?>" target="_blank" class="link" style="font-size: 200%;" onmouseover="this.style.color='#ffd700'" onmouseout="this.style.color='#9fc5f8'"><i class="bi bi-instagram"></i></a>
                                </th>
                                <th>
                                    <a href="https://www.facebook.com/<?php echo $row['fa']; ?>" target="_blank" class="link" style="font-size: 200%;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='#9fc5f8'"><i class="bi bi-facebook"></i></a>
                                </th>
                                <th>
                                    <a href="https://www.youtube.com/channel/<?php echo $row['yo']; ?>" target="_blank" class="link" style="font-size: 200%;" onmouseover="this.style.color='red'" onmouseout="this.style.color='#9fc5f8'"><i class="bi bi-youtube"></i></a>
                                </th>
                                <th>
                                    <a href="tel:<?php echo $row['te']; ?>" target="_blank" class="link" style="font-size: 200%;" onmouseover="this.style.color='#ccc'" onmouseout="this.style.color='#9fc5f8'"><i class="bi bi-telephone"></i></a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                        }
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.html';?>
