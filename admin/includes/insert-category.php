<?php
    require_once('config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $c_name = $_POST['name'];
        $c_description = $_POST['description'];

        $sql = "INSERT INTO `categories` (`name`, `description`, `created`) VALUES ('$c_name', '$c_description', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            die("Query Failed");
        }
        else{
            echo "Category Added Successfully!";
        }    
    }
?>