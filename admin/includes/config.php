<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "atex";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    function checklogin(){
        if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
            header("location: index.php");
            exit();
        }
    }
?>