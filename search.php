<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <link rel="icon" href="img/logo.png"> 
        <link rel="icon" href="./Img/logo.png"> 
    <style>
        #maincontainer{
            min-height: 600px;
        }
        
    </style>
    <title>Atex</title>
</head>
<body>
    
    <!-- Connection -->
    <?php include './Partials/_dbconnect.php'; ?>

    <!-- Header -->
    <?php include './Partials/_header.php'; ?>


    <!-- Search Results -->
    <div class="container my-3" id="maincontainer">
        <h1 class="my-3 text-center">Search results for "<?php echo $_GET['search'];?>"</h1>
        <?php
            $noresults = true;
            $query = $_GET['search'];
            // $sql = "SELECT * FROM `threads` where MATCH (thread_title,thread_description) against ('unable to')";
            $sql = "SELECT * FROM `threads` where MATCH( thread_title, thread_description) against ('$query') ";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){
                $title = $row['thread_title'];
                $desc = $row['thread_description'];
                $thread_id = $row['thread_id'];
                $url = "thread.php?threadid=".$thread_id;
                $noresults = false;
                echo ' 
                <div class="result">
                    <h3><a href="threads.php?threadid='.$thread_id.'">'.$title.'</a></h3>
                    <p>'.$desc.'</p>
                </div>';
            }
            if($noresults){
                echo '
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                    <h1 class="display-4">No results found</h1>
                    </div>
                </div>';
            }
        ?>
    </div>

    <!-- Footer -->
    <?php include './Partials/_footer.php' ?>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
</body>
</html> 