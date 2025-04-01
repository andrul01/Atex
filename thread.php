<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <link rel="stylesheet" href="style.css"> 
        <link rel="icon" href="img/logo.png"> 
    <style>
        #ques{
            min-height: 400px;
        }
    </style>
    <title>Atex</title>
</head>
<body>

    <!-- Connection -->
    <?php include './Partials/_dbconnect.php'; ?>
    
    <!-- Header -->
    <?php include './Partials/_header.php'; ?>

    <!-- Thread Fetching Query -->
    <?php 
        $id = $_GET['threadid']; 
        $sql = "SELECT * FROM `threads` WHERE thread_id='$id' "; 
        $result = mysqli_query($conn,$sql);
        $noResult = true;
        while($row = mysqli_fetch_assoc($result)){
            $noResult = false;
            $title = $row['thread_title'];
            $desc = $row['thread_description'];
             
            $wel_user_id = $row['thread_user_id'];
            $sql0 = "SELECT user_email FROM `users` WHERE sno='$wel_user_id' ";
            $result0 = mysqli_query($conn,$sql0);
            $row0 = mysqli_fetch_assoc($result0);
            $posted_by = $row0['user_email'];
        }
    ?>

    <!--Input Form Query -->
    <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST'){
            // Insert into comment
            $comment = $_POST['comment'];
            
            // sanitize from attack
            $comment = str_replace("<","&lt;",$comment);
            $comment = str_replace("<","&gt;",$comment);

            $sno = $_POST['sno'];
            $sql = " INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '$sno', CURRENT_TIMESTAMP)"; 
            $result = mysqli_query($conn,$sql);
            $showAlert = true;
            if($showAlert){
                echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your comment has been added!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            }
        }
    ?>

    <!--Welcome Category -->
    <div class="container my-4 ">
        <div class="jumbotron bg-dark text-light">
            <h1 class="display-4 text-primary"><b><?php echo $title; ?></b></h1>
            <p class="lead"><?php echo $desc; ?></p>
            <hr class="my-4">
            <p>Posted By : <b><?php echo $posted_by; ?></b></p>
        </div>
    </div>

    <!-- Post comment -->
    <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            echo '  
            <div class="container">
                <h1 class="py-2 text-primary" >Post a comment</h1>
                <form action="'.$_SERVER['REQUEST_URI'].'" method="post">
                    <div class="form-group"> 
                        <label for="exampleFormControlTextarea1">reply here </label>
                        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                        <input type="hidden" name="sno" value=" '.$_SESSION['sno'].' ">
                    </div>
                    <button type="submit" class="btn btn-dark">Post Comment</button>
                </form>
            </div>';
        }
        else{
            echo '
            <div class="container ">
                <h1 class="py-2">Post a comment</h1>
                <p class="bg-danger text-light px-2"> You are not logged in unable to add your comment!</p>
            </div>';
        }
    ?>

    <!-- Ask Question Query -->
    <div class="container my-5 "  id="ques">
        <h1 class="py-2 text-primary">Comments</h1> 
        <?php 
            $id = $_GET['threadid']; 
            $sql = "SELECT * FROM `comments` WHERE thread_id = $id ";
            $result = mysqli_query($conn,$sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;
                $id = $row['thread_id'];
                $content = $row['comment_content'];
                $c_time = $row['comment_time'];
                
                $user_id = $row['comment_by'];
                $sql2 = "SELECT user_email FROM `users` WHERE sno='$user_id' ";
                $result2 = mysqli_query($conn,$sql2);
                $row2 = mysqli_fetch_assoc($result2);
               
                echo '
                <div class="media my-3 d-flex align-items-center">
                    <img src="./Img/user.jpg" width="70px" class=" mr-3" alt="...">
                    <div class="media-body">'.$content.'
                    </div>'.'
                    <p class="font-weight-bold my-0">
                        <span class="font-weight-bold my-0 text-primary">'.$row2['user_email'].'</span>
                        at '.$c_time.'
                    </p>
                '.'</div>';
            }
            if($noResult){
             echo '
             <div class="jumbotron jumbotron-fluid">
                <div class="container">
                 <h1 class="display-4">No comments on this threads found</h1>
                </div>
             </div>';
            }
        ?>
    </div>
    
    <!-- Footer -->
    <?php include './Partials/_footer.php';?>
    
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