<?php
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include './_dbconnect.php';
        $email = $_POST['signupEmail'];
        $pass = $_POST['signupPassword'];
        $cpass = $_POST['signupcPassword'];

        $exist = "select * from `users` where user_email = '$email' ";
        $result = mysqli_query($conn,$exist);
        $numRows = mysqli_num_rows($result);
        if($numRows>0){
            $showError = "Email already in use";
        }
        else{
            if($pass == $cpass){
                $hash = password_hash($pass , PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`user_email`, `user_pass`, `dt`) VALUES ('$email', '$hash', CURRENT_TIMESTAMP)";
                $result = mysqli_query($conn,$sql);
                if($result){
                   $showAlert = true;
                   header("Location:/Atex/index.php?signupsuccess=true");
                   exit();
                }
            }
            else{
                $showError =  "Password not match";   
            }
        }
        header("Location:/Atex/index.php?signupsuccess=false");  
        // header("Location:./index.php?signupsuccess=false Error=$showError");  
    }
?>