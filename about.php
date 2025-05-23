<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css"> 
    <link rel="icon" href="./Img/logo.png"> 
  <title>Atex</title>
</head>
<body>
  <!-- Connection -->
  <?php include './Partials/_dbconnect.php'; ?>

  <!-- Header  -->
  <?php include './Partials/_header.php' ?>

  <!-- About content -->
  <div class="container my-5 px-5">
    <section class="py-5">
      <div class="container">
        <div class="row align-items-center gx-4">
          <div class="col-md-5">
            <div class="ms-md-2 ms-lg-5">
              <img class="img-fluid rounded-3" src="./Img/developer.png">
            </div>
          </div>
          <div class="col-md-6 offset-md-1">
            <div class="ms-md-2 ms-lg-5">
              <h2 class="display-5 fw-bold text-primary">About Us</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
              <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer  -->
  <?php include './Partials/_footer.php' ?>
  
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous">
  </script>
</body>
</html>