<?php
require_once('config.php');


$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

while ($row = $result->fetch_assoc()) {
    $id = $row['sno'];
    $username = $row['user_email'];
    $password = $row['user_pass'];
    echo $id;
    echo "<br>";
    echo $username;
    echo "<br>";
    echo $password;
    echo "<br>";
}
// }
// else {
//     echo "<tr><td colspan='4'>No users found</td></tr>";
// }   
?>