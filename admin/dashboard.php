<?php
    require 'includes/config.php'; // Database connection
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="assets/images/favicon.png" />
  <title>Atex - Admin panel</title>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

    <!-- Navbar -->
    <nav class="flex fixed top-0 w-full bg-white shadow ">
        <div class="container w-1/5 mx-auto flex justify-between items-center p-4 ">
            <a class="flex items-center" href="dashboard.php">
                <img src="./assets/images/logo.png" alt="Logo" class="w-10 mr-2">
                <h3 class="text-lg font-bold">tex</h3>
            </a>
        </div>
        <div class="container flex justify-between items-center p-4">
            <form class="flex items-center">
                <button class="p-2">
                    <img src="./assets/images/menu.png" class="w-6" alt="">
                </button>
                <input class="border-none focus:outline-none focus:ring-0 p-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            <div class="flex  items-center space-x-4">
                <a href="#">
                    <img src="./assets/images/notify.png" alt="Notifications" class="w-6">
                </a>
                <div class="relative">
                    <button id="profileDropdown">
                        <img src="./assets/images/admin.png" class="w-8 rounded-full" alt="Profile">
                    </button>
                    <ul class="absolute right-0 mt-2 w-48 bg-white shadow-md hidden" id="profileMenu">
                        <li class="p-2 hover:bg-gray-100"><a href="#">Profile</a></li>
                        <li class="p-2 hover:bg-gray-100"><a href="#">Settings</a></li>
                        <li class="p-2 hover:bg-gray-100"><a href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </nav>

    <div class="flex pt-16">
        
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-gray-800 text-white h-screen p-4 hidden md:block  ">
            <ul class=" mt-6">
                <li class="mb-2 p-2 rounded bg-blue-600">
                    <a href="#" class="flex items-center">
                        <img src="./assets/images/dashboard.png" alt="" class="w-6">
                        <span class="ml-2">Dashboard</span>
                    </a>
                </li>
                <li class="mb-2 p-2 rounded bg-blue-600">
                    <a href="#users" class="flex items-center">
                        <img src="./assets/images/user.png" alt="" class="w-6">
                        <span class="ml-2">Users</span>
                    </a>
                </li>
                <li class="mb-2 p-2 rounded bg-blue-600" >
                    <a href="#" class="flex items-center">
                        <img src="./assets/images/categories.png" alt="" class="w-6">
                        <span class="ml-2">Categories</span>
                    </a>
                </li>
                <li class="mb-2 p-2 rounded bg-blue-600">
                    <a href="#" class="flex items-center">
                        <img src="./assets/images/post.png" alt="" class="w-6">
                        <span class="ml-2">Post</span>
                    </a>
                </li>
                <li class="mb-2 p-2 rounded bg-blue-600">
                    <a href="#" class="flex items-center">
                        <img src="./assets/images/comment.png" alt="" class="w-6">
                        <span class="ml-2">Comments</span>
                    </a>
                </li>
                <li class="mb-2 p-2 rounded bg-blue-600">
                    <a href="#" class="flex items-center">
                        <img src="./assets/images/document.png" alt="" class="w-6">
                        <span class="ml-2">Documentation</span>
                    </a>
                </li>
            </ul>
        </aside>
        
        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-50">
            <h3 class="text-xl font-bold">Welcome Andrul</h3>
            <p class="text-gray-700">All systems are running smoothly! <span class="text-blue-500">You have 3 unread alerts!</span></p>
            
            <!-- Categories -->
            <div class="bg-white p-6 rounded shadow mt-6">
                <h3 class="text-lg font-bold mb-4">Welcome</h3>
            </div>


            <!-- User Table -->
            <div class="bg-white p-6 rounded shadow mt-6" id="users">
                <h3 class="text-lg font-bold mb-4">Users</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full table-auto border-collapse">
                        <thead>
                            <tr class="bg-blue-500 text-white">
                                <th class="p-2 text-left">Id.</th>
                                <th class="p-2 text-left">Username</th>
                                <th class="p-2 text-left">Password</th>
                                <th class="p-2 text-left">Edit</th>
                                <th class="p-2 text-left">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- Get Users -->
                            <?php
                            $sql = "SELECT * FROM users";
                            $result = mysqli_query($conn, $sql);
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['sno'];
                                $username = $row['user_email'];
                                $password = $row['user_pass'];
                                echo 
                                "<tr class='border-t'>
                                    <td class='p-3'>$id</td>
                                    <td class='p-3'>$username</td>
                                    <td class='p-3'>$password</td>
                                    <td class='p-3'>
                                        <a href='edit.php?id=$id' class='text-white bg-green-500 px-4 py-2 rounded-full hover:bg-green-600 transition duration-300'>Edit</a>
                                    </td>
                                    <td class='p-3'>
                                        <a href='delete.php?id=$id' class='text-white bg-red-500 px-4 py-2 rounded-full hover:bg-red-600 transition duration-300'>Delete</a>
                                    </td>
                                </tr>";
                                }
                            ?> 
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Categories -->
            <div class="bg-white p-6 rounded shadow mt-6">
                <h3 class="text-lg font-bold mb-4">Categories</h3>
            </div>
            
            <!-- Footer -->
            <footer class="w-full bg-white shadow p-4  text-center  mt-6">
                <span class="text-gray-600">Copyright © 2023. Atex admin All rights reserved.</span>
            </footer>
        </main>

    </div>

</body>
</html>