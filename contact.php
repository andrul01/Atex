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

  <!-- Header -->
  <?php include './Partials/_header.php' ?>
  
  <!-- Contact Form -->
  <div class="container my-5 border rounded shadow px-5 py-5">
    <h1 class="text-center text-primary">Contact Us</h1>
    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="">
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-dark ">Submit</button>
    </form>

    <?php
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $sql = "INSERT INTO `contact` (`name`, `email`, `phone`,`message`, `dt`) VALUES ('$name', '$email',  '$phone', '$message', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            die("Query Failed:".mysqli_error($conn) );
        }
        else{
            echo '<h4 class="my-4">Message Send Successfully!</h4>';
        }    
      }
    ?>
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