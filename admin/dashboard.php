<!-- session check -->
<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location: ./index.php");
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atex - Admin panel</title>
  <link rel="icon" href="./images/favicon.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="./images/favicon.png" width="40" alt="">
      <span class="ms-2">tex</span>
    </a>
    <a href="./includes/logout.php" class="btn btn-light border p-2" title="Logout">
  <i class="fas fa-right-from-bracket text-primary"></i>
</a>


  </div>
</nav>

<div class="container-fluid">
  <div class="row">

    <!-- Sidebar -->
    <nav class="col-lg-2 d-none d-lg-block bg-dark text-white p-3 vh-100">
      <ul class="nav flex-column">
        <li class="nav-item mb-3">
          <a class="nav-link text-white bg-primary rounded py-2 px-3" href="#"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link text-white bg-primary rounded py-2 px-3" href="#users"><i class="fas fa-users me-2"></i>Users</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link text-white bg-primary rounded py-2 px-3" href="#"><i class="fas fa-th-large me-2"></i>Categories</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link text-white bg-primary rounded py-2 px-3" href="#"><i class="fas fa-newspaper me-2"></i>Post</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link text-white bg-primary rounded py-2 px-3" href="#"><i class="fas fa-comments me-2"></i>Comments</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link text-white bg-primary rounded py-2 px-3" href="#"><i class="fas fa-book me-2"></i>Documentation</a>
        </li>
      </ul>
    </nav>

    <!-- Main Content -->
    <main class="col-lg-10 p-4 bg-light">
      <h3>Welcome <span class="text-primary"><?php echo $_SESSION['username'];?></span></h3>
      <p class="text-muted">All systems are running smoothly! <span class="text-primary">You have 3 unread alerts!</span></p>

      <!-- Notifications -->
      <div class="row mt-4">
        <div class="col-md-12 col-lg-6 mb-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Notifications</h5>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 mb-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Notifications</h5>
            </div>
          </div>
        </div>
      </div>

      <!-- Users Table -->
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Users</h5>
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead class="table-primary ">
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody id="load_table">
                <?php
                include 'includes/config.php';
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);
                while ($row = $result->fetch_assoc()) {
                  $id = $row['sno'];
                  $username = $row['user_email'];
                  echo "
                  <tr>
                    <td>$id</td>
                    <td>$username</td>
                    <td><a href='edit.php?id=$id' class='btn btn-outline-success'>Edit</a></td>
                    <td><a href='delete.php?id=$id' class='btn btn-outline-danger'>Delete</a></td>
                  </tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Add Category Form -->
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h5 class="card-title">Add Categories</h5>
          <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" id="name" name="name" required class="form-control">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea id="description" name="description" required class="form-control" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Upload File</label>
              <input type="file" id="image" name="images" required class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">+ Add</button>
          </form>

          <?php
          require_once('./includes/config.php');
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cname = $_POST['name'];
            $cdescription = $_POST['description'];
            $image = $_FILES['images']['tmp_name'];
            $image_data = addslashes(file_get_contents($image));

            $sql = "INSERT INTO `categories` (`name`, `description`, `images`, `created`) VALUES ('$cname', '$cdescription', '$image_data', current_timestamp())";
            $result = mysqli_query($conn, $sql);
          
            if ($result) {
              echo "<div class='alert alert-success mt-3'>Category Added Successfully!</div>";
            } 
            else {
              echo "<div class='alert alert-danger mt-3'>Query Failed: " . mysqli_error($conn) . "</div>";
            }
          }
          ?>
        </div>
      </div>

      <!-- Footer -->
      <footer class="text-center py-3 border-top bg-white mt-4">
        <span class="text-muted">© 2023 <span class="text-primary">Atex</span> admin. All rights reserved.</span>
      </footer>
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
