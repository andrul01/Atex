<?php
  
  session_start();
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    
  }
  echo '
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" id="logo" href="./index.php">
      <img src="./Img/logo.png" height="40px"/>
      tex 
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Top Categories
          </a>
          <div class="dropdown-menu">';
        
        $sql = "SELECT name,id FROM `categories` LIMIT 3";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
          echo '
            <a class="dropdown-item" href="threads.php?catid='.$row['id'].'">'.$row['name'].'</a>';
        }
        echo '
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact</a>
        </li>
      </ul>

      <div class="row px-2 d-flex" >';
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
          echo '
          <form class="form-inline my-2 my-lg-0"  action="search.php" method="get">
            <input class="form-control mr-sm-2" name="search" type="search"  placeholder="Search" aria-label="Search">
           <button class="btn btn-dark" type="submit" title="Search">
              <i class="fas fa-magnifying-glass text-white"></i>
            </button>
            <p class="my-0 mx-2">
              <a class="text-decoration-none text-light" href="userProfile.php?user=' . urlencode($_SESSION['useremail']) . '">
                Welcome ' . $_SESSION['useremail'] . '
              </a>
            </p>
            
            <a href="./Partials/_logout.php" class="btn btn-dark p-2" title="Logout">
              <i class="fas fa-right-from-bracket text-white"></i>
            </a>
          </form>';
        }
        else{
           echo '
            <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
            <div class="col-lg-2 col-md-2 col-sm-12 d-flex justify-content-center pl-0">
              <input class="form-control mr-sm-2" type="search" name="search"  placeholder="Search" aria-label="Search">
              <button class="btn btn-dark" type="submit" title="Search">
                <i class="fas fa-magnifying-glass text-white"></i>
              </button>
            </div>
            </form>
            <div class="col ml-lg-2  my-0 py-lg-0 py-md-0 d-flex px-0">
              <div class="conatiner d-flex align-items-center">
                <button class="btn btn-primary my-2 my-sm-0" data-toggle="modal" data-target="#login">Login</button>
                <button class="btn btn-outline-primary ml-md-2 ml-2  my-sm-0" data-toggle="modal" data-target="#signup">Signup</button>
              </div>
            </div>';
        }
        echo '
      </div>
    </div>
  </nav>';
  include './Partials/_login.php';
  include './Partials/_signup.php';
  
  // Signup Success
  if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
    echo '
    <div id="signupSuccessAlert" class="position-fixed" style="top: 2rem; right: 0rem; z-index: 1050;">
      <div class="alert alert-success alert-dismissible fade show shadow" role="alert">
        <strong>Success!</strong> Your account has been created successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>

    <script>
      setTimeout(function() {
        $("#signupSuccessAlert .alert").alert("close");
      }, 3000);
    </script>';
  }

  // Signup Failed
  if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "false"){
    echo '
    <div id="signupErrorAlert" class="position-fixed" style="top: 2rem; right: 0rem; z-index: 1050;">
      <div class="alert alert-danger alert-dismissible fade show shadow" role="alert">
        <strong>Alert!</strong> Invalid email or password mismatch.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>

    <script>
      setTimeout(function() {
        $("#signupErrorAlert .alert").alert("close");
      }, 3000);
    </script>';
  }

  // Login alert
  if(isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "true"){
    echo '
    <div id="loginAlert" class="position-fixed" style="top: 2rem; right: 0rem; z-index: 1050;">
      <div class="alert alert-success alert-dismissible fade show shadow" role="alert">
        <strong>Success!</strong> Login successful.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  
    <script>
      setTimeout(function() {
        $("#loginAlert .alert").alert("close");
      }, 3000);
    </script>';
  }

  if(isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "false"){
    echo '
    <div id="loginErrorAlert" class="position-fixed" style="top: 2rem; right: 0rem; z-index: 1050;">
      <div class="alert alert-danger alert-dismissible fade show shadow" role="alert">
        <strong>Alert!</strong> Invalid credentials, please check.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>

    <script>
      setTimeout(function() {
        $("#loginErrorAlert .alert").alert("close");
      }, 3000);
    </script>';
  }
?>