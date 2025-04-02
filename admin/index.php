<?php
    require_once('includes/config.php');

    // login 
    $showError = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Get input values from form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // SQL query to find the user by username
        $sql = "SELECT * FROM admin WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("SQL Error: " . mysqli_error($conn));
        }
        
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
            exit();
        } 
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="./images/favicon.png" />
    <title>Atex - Admin panel</title>
</head>
<body>

    <!-- Login form  -->
    <div class="bg-gray-100 rounded-lg p-8 flex flex-col m-8 mt-40 md:m-auto md:mt-40 md:w-1/2 lg:w-1/3 ">
        <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Admin Login</h2>
        <form action="" method="POST">
            <div class="relative mb-4">
    
                <label for="full-name" class="leading-7 text-sm text-gray-600">Username</label>
                <input type="text" id="full-name" name="username" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-2">
                <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
                <input type="text" id="email" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <p class="text-xs text-blue-300 mt-3 mb-5">forget password?.</p>
            <button type="submit" class="text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">login</button>
        </form>
    </div>
   
</body>
</html>