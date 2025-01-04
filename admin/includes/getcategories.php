<?php
    require_once('config.php');

    $sql = "SELECT * FROM categories";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            $c_id = $row['id'];
            $c_name = $row['name'];
            $c_desc = $row['description']; 
            $c_date = $row['created'];
             
            echo $c_id;
            echo $c_name;
            echo $c_desc;
            echo $c_date;
            echo "<br>";
        }
    }
    else{
        echo "No categories found";
    }
    



?>