
<?php
require 'includes/config.php'; // Database connection
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="icon" href="assets/images/favicon.png" />
    <title>Atex - Admin panel</title>
</head>

<body>
    <div class="container-scroller border d-flex flex-column overflow-auto">

        <div class="container my-3"></div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top bg-white shadow-sm ">
            <div class="container-fluid d-flex">

                <!-- Logo and Brand -->
                <div class="container col-2">
                    <a class="navbar-brand d-flex align-items-center" href="dashboard.php">
                        <img src="./assets/images/logo.png" alt="Logo" width="40px" class="me-2">
                        <h3 class="m-0 px-1">tex</h3>
                    </a>
                </div>

                <div class="container col-10">
                    <!--Left side  Search Bar -->
                    <div class="row ms-auto ">
                        <form class="d-flex mx-auto" role="search">
                            <button class="btn shadow-none" type="submit">
                                <img src="./assets/images/menu.png" width="24px" alt="">
                            </button>
                            <input class="form-control me-2 border-0 shadow-none" type="search" placeholder="Search"
                                aria-label="Search">
                        </form>
                    </div>
                    <!-- Right Side Icons -->
                    <div class="row ms-auto">
                        <ul class="navbar-nav ms-auto d-flex align-items-center">
                            <li class="nav-item me-3">
                                <a class="nav-link" href="#">
                                    <img src="./assets/images/notify.png" alt="Notifications" width="24px">
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                    id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="./assets/images/admin.png" width="30px" alt="Profile"
                                        class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- main content -->
        <div class="container-fluid my-5 d-flex ">

            <!-- sidebar -->
            <nav class="sidebar col-2 my-4 " id="sidebar">
                <ul class="nav flex-column ">
                    <li
                        class="nav-item active bg-primary  d-flex align-items-center jusitfy-content-center rounded pr-3">
                        <a class="nav-link" href="">
                            <img src="./assets/images/dashboard.png" alt="">
                        </a>
                        <span class="text-white">Dashboard</span>
                    </li>
                    <li class="nav-item bg-primary d-flex align-items-center jusitfy-content-center rounded mt-2 pr-3">
                        <a class="nav-link" href="#users">
                            <img src="./assets/images/user.png" width="24px" alt="">
                        </a>
                        <span class="text-white">Users</span>
                    </li>
                    <li class="nav-item bg-primary d-flex align-items-center jusitfy-content-center rounded mt-2 pr-3">
                        <a class="nav-link" href="">
                            <img src="./assets/images/categories.png" width="24px" alt="">
                        </a>
                        <span class="text-white">Categories</span>
                    </li>
                    <li class="nav-item bg-primary  d-flex align-items-center jusitfy-content-center rounded mt-2 pr-3">
                        <a class="nav-link" href="">
                            <img src="./assets/images/post.png" width="24px" alt="">
                        </a>
                        <span class="text-white">Posts</span>
                    </li>
                    <li class="nav-item bg-primary  d-flex align-items-center jusitfy-content-center rounded mt-2 pr-3">
                        <a class="nav-link" href="">
                            <img src="./assets/images/comment.png" width="24px" alt="">
                        </a>
                        <span class="text-white">Comments</span>
                    </li>
                    <li class="nav-item bg-primary  d-flex align-items-center jusitfy-content-center rounded mt-2 pr-3">
                        <a class="nav-link" href="">
                            <img src="./assets/images/document.png" width="24px" alt="">
                        </a>
                        <span class="text-white">Documentation</span>
                    </li>
                </ul>
            </nav>

            <!-- main panel -->
            <div class="container-fluid main-panel bg-light my-2 py-4">
                <div class="container-fluid bg-light">
                    <div class="row ">
                        <div class="col-12">
                            <h3>Welcome Andrul</h3>
                            <h6>All systems are running smoothly!
                                <span class="text-primary"> You have 3 unread alerts!</span>
                            </h6>
                        </div>
                        <div class="col-12">

                        </div>
                    </div>
                    <div class="row my-5 border ">
                        <div class="col-6 border d-flex align-items-center justify-content-center">
                            <img src="./assets/images/welcome.png" width="500px" class="border rounded" alt="people">
                        </div>
                        <div class="col-6 border p-3">
                            <div class="row g-3">
                                <!-- First Row -->
                                <div class="col d-flex justify-content-center border  p-3">
                                    <img src="./assets/images/welcome.png" width="250" class="border rounded"
                                        alt="people">
                                </div>
                                <div class="col d-flex justify-content-center border p-3">
                                    <img src="./assets/images/welcome.png" width="250" class="border rounded"
                                        alt="people">
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <!-- Second Row -->
                                <div class="col d-flex justify-content-center border p-3">
                                    <img src="./assets/images/welcome.png" width="250" class="border rounded"
                                        alt="people">
                                </div>
                                <div class="col d-flex justify-content-center border p-3">
                                    <img src="./assets/images/welcome.png" width="250" class="border rounded"
                                        alt="people">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="users">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Users Table</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive bg-primary text-white  container-fluid border rounded"">
                                            <table id=" example" class="display expandable-table" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="p-2">Id no.</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                </tr>
                                            </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer -->
                <footer class="footer mt-5">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
                            Copyright © 2023.
                            <a href="https://www.bootstrapdash.com/" target="_blank">Atex admin</a>
                            All rights reserved.
                        </span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>