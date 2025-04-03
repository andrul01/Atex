<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css"> 
    <link rel="icon" href="./Img/logo.png"> 
    <!-- <style>
        #ques{
            min-height: 400px;
        }
    </style> -->
    <title>Atex</title>
</head>
<body> 

    <!-- Connection -->
    <?php include './Partials/_dbconnect.php'; ?>

    <!-- Header -->
    <?php include './Partials/_header.php'; ?>

    <!-- Query -->
    <?php 
        $id = $_GET['catid']; 
        $sql = "SELECT * FROM `categories` WHERE id='$id' "; 
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $cname = $row['name'];
            $cdesc = $row['description'];
        }
    ?>

    <!-- Query For Input Form  -->
    <?php

        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST'){
            // Insert into threads
            $th_title = $_POST['title'];
            $th_description = $_POST['desc'];

            // sanitize from attack
            $th_title = str_replace("<","&lt;",$th_title);
            $th_title = str_replace("<","&gt;",$th_title);
            $th_description = str_replace("<","&lt;",$th_description);
            $th_description = str_replace("<","&gt;",$th_description);
            
            
            $sno = $_POST['sno'];
            $sql = " INSERT INTO `threads` (`thread_title`, `thread_description`, `thread_cat_id`, `thread_user_id`, `dt`) VALUES ('$th_title', '$th_description', '$id', '$sno', CURRENT_TIMESTAMP)"; 
            $result = mysqli_query($conn,$sql);

            $showAlert = true;
            if($showAlert){
                echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your thread has been added!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            }
        }
    ?>
    
    <!-- Add Query -->
    <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            echo '
            <div class="container my-5 py-4 border rounded-3 shadow">
                <h1>Ask your query</h1>
                <form action=" '.$_SERVER['REQUEST_URI'].'" method="post" >
                    <div class="form-group"> 
                        <label for="exampleInputEmail1">Problem Title</label>
                        <input type="text" class="form-control" id="title"  name="title" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Keep your title short.</small>
                    </div>
                    <input type="hidden" name="sno" value=" '.$_SESSION['sno'].' ">
                    <div class="form-group"> 
                        <label for="exampleFormControlTextarea1">Ask your queries here </label>
                        <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
           </div>';
        }
        else{

            echo '
            <div class="container ">
                <h1>Add your query </h1>
                <p class="bg-danger text-light px-2"> You are not logged in unable to add your query!</p>
            </div>
            ';
        }
    ?>

    <!-- Question Fetch Query -->
    <div class="container my-4 border rounded shadow mb-0">  
        <h1 class="py-2">Queries</h1> 
        <?php 
            $id = $_GET['catid']; 
            $sql = "SELECT * FROM `threads` WHERE thread_cat_id = $id ";
            $result = mysqli_query($conn,$sql);

            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;
                $id = $row['thread_id'];
                $title = $row['thread_title'];
                $desc = $row['thread_description'];
                $thread_time = $row['dt'];

                $user_id = $row['thread_user_id'];
                $sql2 = "SELECT user_email FROM `users` WHERE sno='$user_id' ";
                $result2 = mysqli_query($conn,$sql2);
                $row2 = mysqli_fetch_assoc($result2);
                
                echo '
                <div class="media my-3">
                    <img src="./Img/user.jpg" width="70px" class=" mr-3" alt="...">
                    <div class="media-body">'.'
                        <h5 class="mt-0 text-primary">
                            <a class="text-primary text-decoration-none" href="./thread.php?threadid='.$id.' ">'.$title.'</a>
                        </h5>
                        <p>'.$desc.'</p>
                    </div>
                    <p class="font-weight-bold my-0">
                        <span class="text-primary">'.$row2['user_email'].'</span>
                        at '.$thread_time.'
                    </p>'.'
                </div>';
               }

               if($noResult){
                echo '
                <div class="jumbotron jumbotron-fluid">
                   <div class="container">
                    <h1 class="display-4">No Threads  Found</h1>
                    <p class="lead">Ask a question here.</p>
                   </div>
                </div>';
            }
        ?>  
    </div>

    <!-- Footer -->
    <?php include './Partials/_footer.php'; ?>

    <!-- Script -->
    <script
        src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    
</body>
</html>