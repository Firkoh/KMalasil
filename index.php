<?php
session_start();
    include 'service/basisdata.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        header('Location: Admin/homes.php');
        exit;
    } else {
        $error = 'Username atau password salah';
    }
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Kelurahan Malasilen</title>
 <link rel="icon" href="assets/Lambang_Kota_Sorong.png">
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

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div class="form-floating mb-3">
                <input name="username" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password required">
                <label for="floatingPassword">Password</label>
              </div>              <button class="btn w-100" id="tombol" type="submit">Login</button>
<!-- ini alert -->
              <?php if (isset($error)) { ?>
                <script type="module">
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '<?= $error ?>',
                  });
                </script>
              <?php } ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
<!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- local js -->
  <script src="public/js/script.js"></script>
</body>
</html>

