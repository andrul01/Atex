<?php
    require_once('includes/config.php');

    // Redirect if already logged in
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        header('Location: dashboard.php');
        exit();
    }

    $showError = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Get input values from form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // SQL query to find the user by username
        $sql = "SELECT * FROM admin WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $numRows = mysqli_num_rows($result);

        if($numRows == 1) {
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['admin'] = true;              // Set admin session
            $_SESSION['username'] = $username;      // Store username
            $_SESSION['sno'] = $row['id'];          // Store user ID (primary key)
            // Redirect to the dashboard
            header("Location: dashboard.php");
            exit();
        } 
        else{
            header("Location: index.php"); 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>