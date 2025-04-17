<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Profile | Atex</title>
    <link rel="icon" href="./Img/logo.png">

    <!-- Bootstrap & Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  </head>
  <body>
    <!-- Connection -->
    <?php include './Partials/_dbconnect.php'; ?>

    <!-- Header -->
    <?php include './Partials/_header.php'; ?>
    <div class="container my-4 px-2 px-lg-5 border rounded-sm shadow">
  <div class="container my-5">
    <!-- Profile Image and Basic Info -->
    <div class="text-center mb-4">
      <img src="./Img/user.jpg" alt="User Image" class="rounded-circle border border-primary" width="120" height="120">
      <h3 class="mt-3 mb-0 text-primary">Andrul</h3>
      <small class="text-muted">@andrul</small>

      <!-- Edit Profile Button -->
      <div class="mt-3">
        <button class="btn btn-outline-primary btn-sm">
          <i class="fas fa-user-edit mr-1"></i> Edit Profile
        </button>
      </div>
    </div>

    <!-- Username Section -->
    <div class="card mb-3">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h5 class="mb-1">Username</h5>
          <p class="mb-0 text-muted">@andrul</p>
        </div>
      </div>
    </div>

    <!-- Full Name Section -->
    <div class="card mb-3">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h5 class="mb-1">Full Name</h5>
          <p class="mb-0 text-muted">Andrul I</p>
        </div>
      </div>
    </div>

    <!-- Bio Section -->
    <div class="card mb-3">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h5 class="mb-1">Bio</h5>
          <p class="mb-0 text-muted">Gammer</p>
        </div>
      </div>
    </div>
    
    <!-- Number Section -->
    <div class="card mb-3">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h5 class="mb-1">Contact</h5>
          <p class="mb-0 text-muted">+91 7796064374</p>
        </div>
      </div>
    </div>

    <!-- Email Section -->
    <div class="card mb-3">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h5 class="mb-1">Email</h5>
          <p class="mb-0 text-muted">andrul@gmail.com</p>
        </div>
      </div>
    </div>

    <!-- Gender Section -->
    <div class="card mb-3">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h5 class="mb-1">Gender</h5>
          <p class="mb-0 text-muted">Male</p>
        </div>
      </div>
    </div>


    <!-- Social Links Section -->
    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h5 class="mb-0">Social Media</h5>
        </div>
        <ul class="list-unstyled mb-0">
          <li class="mb-1"><i class="fab fa-github mr-2"></i> <a href="#" class="text-dark">GitHub</a></li>
          <li class="mb-1"><i class="fab fa-linkedin mr-2"></i> <a href="#" class="text-dark">LinkedIn</a></li>
          <li><i class="fab fa-instagram mr-2"></i> <a href="#" class="text-dark">Instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


    <!-- Footer -->
    <?php include './Partials/_footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
