<?php
if (!isset($_SESSION)) {
    session_start(); // Mulai sesi jika belum aktif
}

include "service/basisdata.php";

// Proses Login
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); 
    $hashPass=hash("sha256",$password);

    $sele = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $sele->bind_param("ss", $username, $password);
    $sele->execute();
    $result = $sele->get_result();

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $_SESSION['login'] = true; 
        $_SESSION['username'] = $row['username']; // Simpan username dalam sesi
        $_SESSION['id'] = $row['id']; // Simpan ID pengguna dalam sesi
        header("Location: Admin/homes.php"); // Arahkan ke dasbor
        exit;
    } else {
        $_SESSION['error'] = "Username atau password salah"; // Simpan pesan kesalahan dalam sesi
    }

    $sele->close();
}
// Proses Logout 
if (isset($_GET['logout'])) {
    session_destroy(); // Hancurkan sesi
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Kelurahan Malasilen</title>
  <link rel="stylesheet" href="public/css/stylde.css">  
  <link rel="stylesheet" href="public/css/custom.css"> 
</head>
<body>
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-primary">
    <a href="/" class="align-items-center mb-3 mb-md-0 col-sm-12 col-md-10 col-lg-8 col-xl-6 col-xxl-4 link-body-emphasis text-decoration-none text-center">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Kantor Kelurahan Malasilen</span>
    </a>
  </header>

  <main class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6 col-xxl-4">
        <div class="card">
          <div class="card-body">
            <h1 class="h3 mb-3 fw-normal text-center">Admin Login</h1>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_SESSION['error'] ?>
                </div>
            <?php endif; ?>

            <form action="index.php" method="post">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password required">
                <label for="floatingPassword">Password</label>
                <span class="password-toggle">
                  <i class="bi bi-eye-slash">kojo</i>
                </span>
              <button class="btn w-100" id="tombol" type="submit">Login</button>
              </div>

<!-- logika salah Password -->
                <?php if (isset($_SESSION['error'])) { ?>
                        <div class="alert alert-danger" role="alert" id="error-message">
                            <?= $_SESSION['error'] ?>
                        </div>
                        <?php unset($_SESSION['error']); ?> <!-- Hapus pesan kesalahan dari sesi -->
                        <script>
                            setTimeout(function() {
                                document.getElementById("error-message").style.display = "none";
                            }, 3000); // Hide error message after 3 seconds
                        </script>
                    <?php } ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- local js -->
  <script src="public/js/script.js"></script>
</body>
</html>