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
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
            <p class=" my-0 mx-2" >
              <a class="text-decoration-none text-light  py-2" href="userProfile.php">
                Welcome '.$_SESSION['useremail'].'
              </a>
            </p>
            <a href="./Partials/_logout.php" class="btn btn-outline-primary ml-2">Logout</a>
          </form>';
        }
        else{
           echo '
            <form class="form-inline my-2 my-lg-0 " action="search.php" method="get">
              <input class="form-control mr-sm-2" type="search" name="search"  placeholder="Search" aria-label="Search">
              <button class="btn btn-primary mt-2 mr-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="col ml-lg-2  my-0 py-lg-0 py-md-0 d-flex px-0  ">
              <div class="conatiner d-flex align-items-center">
                <button class="btn btn-outline-primary my-2 my-sm-0" data-toggle="modal" data-target="#login">Login</button>
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
  
  // Signup Alert
  if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
    echo '
    <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Success!</strong> Your account has been created successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "false"){
    echo '
    <div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>Alert!</strong> You enter a invalide Email or password not match.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  
  // Login Alert
  if(isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "true"){
    echo '
    <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Success!</strong> Login successfull.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  if(isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "false"){
    echo '
    <div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>Alert!</strong> Invalide credentials please check.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
?>