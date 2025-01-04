<?php
    require_once('config.php');

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    
    if($result->num_rows >0){
        while ($row = $result->fetch_assoc()) {
            $id = $row['sno'];
            $username = $row['user_email'];
            $password = $row['user_pass']; 
        }
    }
    else{
        echo "No users found";
    }

?>