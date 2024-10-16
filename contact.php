<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 
  <title>Atex</title>
  <style>
    .container{
      min-height: 600px;
      padding-left:50px ;
      padding-right:50px ;
    }

  </style>
</head>
<body>

  <!-- Connection -->
  <?php include './Partials/_dbconnect.php'; ?>

  <!-- Footer -->
  <?php include './Partials/_header.php' ?>
  
  <!-- Contact Form -->
  <div class="container my-3" >
    <h1 class="text-center text-primary">Contact Us</h1>
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="button" class="btn btn-dark ">Submit</button>
    </form>
  </div>

  <!-- Footer -->
  <?php include './Partials/_footer.php' ?>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>
</html>