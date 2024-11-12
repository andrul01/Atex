<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png"> 
    <link rel="stylesheet" href="style.css"> 
    <style>
        #ques{
            min-height: 300px;
        }
        @media (max-width: 700px) {
            #carouselExampleCaptions {
                display: none; /* Hides the entire carousel */
            }
        }
    </style>
    <title>Atex</title>
</head>

<body>
    
    <!-- Connection -->
    <?php include './Partials/_dbconnect.php'; ?>

    <!-- Header -->
    <?php include './Partials/_header.php'; ?>

    <!-- crousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./Img/cover1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Explore, Solve, Evolve</h1>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="./Img/cover2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>The Pulse of Innovation</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./Img/cover3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Solving Problems, Sparking Ideas</h1>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <!--Category Fetch Querys -->
    <div class="container my-2" id="ques" >
        <h2 class=" text-center">Categories</h2>
        <div class="row">
            <?php 
              
                $sql ="SELECT * FROM `categories`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){ 
                    $id = $row['id'];
                    $cat = $row['name'];
                    $desc = $row['description'];

                    echo '
                    <div class="card mx-2" >
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <img src="./Img/card_'.$row['id'].'.jpg" class="card-img-top w-10 h-10" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><a class="text-primary" href="./threads.php?catid='.$id.' " >'.$cat.'</a></h5>
                                    <p class="card-text">'.substr($desc,0,100).'....</p>
                                    <a href="./threads.php?catid='.$id.'" class="btn btn-dark">View Threads</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                };
            ?>
        </div>
    </div>

    <!-- Footer -->
    <?php include './Partials/_footer.php' ?>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    
</body>
</html>