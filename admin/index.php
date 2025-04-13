<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atex - Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="./images/favicon.png">
</head>
<body class="bg-light">

  <!-- Login Form -->
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="bg-white shadow p-5 rounded w-100" style="max-width: 400px;">
      <h2 class="mb-4 text-center text-primary">Admin Login</h2>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="mb-2">
          <label for="password" class="form-label">Password</label>
          <input type="text" name="password" id="password" class="form-control" required>
        </div>
        <div class="mb-3">
          <a href="#" class="small text-decoration-none text-primary">Forgot password?</a>
        </div>
        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
      </form>
      
      <!-- login code -->
      <?php
        if (isset($_POST['login'])) {
          include "./includes/config.php";
          $username = mysqli_real_escape_string($conn, $_POST['username']);
          $password = md5($_POST['password']);
          $sql = "SELECT id, username, password FROM admin WHERE username = '{$username}' AND '{$password}'";
          $result = mysqli_query($conn, $sql) or die('Query Failed');

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              session_start();
              $_SESSION['username'] = $row['username'];
              $_SESSION['password'] = $row['password'];

              header("Location: ./dashboard.php");
            }
          } else {
            echo '<div class="alert alert-danger mt-3">Username and Password are not matched.</div>';
          }
        }
      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
