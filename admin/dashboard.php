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
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="./assets/images/admin.png" width="30px" alt="Profile" class="rounded-circle">
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
            <nav class="sidebar col-2 my-4 d-lg-block d-none mx-1 pl-0 w-100" id="sidebar">
                <ul class="nav flex-column ">
                    <li class="nav-item active bg-primary  d-flex align-items-center  rounded  w-100  object-fit-cover">
                        <a class="nav-link" href="">
                            <img src="./assets/images/dashboard.png" alt="">
                        </a>
                        <span class="text-white">Dashboard</span>
                    </li>
                    <li class="nav-item bg-primary d-flex align-items-center  rounded mt-2  w-100">
                        <a class="nav-link" href="#users">
                            <img src="./assets/images/user.png" width="24px" alt="">
                        </a>
                        <span class="text-white">Users</span>
                    </li>
                    <li class="nav-item bg-primary d-flex align-items-center  rounded mt-2 w-100">
                        <a class="nav-link" href="">
                            <img src="./assets/images/categories.png" width="24px" alt="">
                        </a>
                        <span class="text-white">Categories</span>
                    </li>
                    <li class="nav-item bg-primary  d-flex align-items-center  rounded mt-2 w-100">
                        <a class="nav-link" href="">
                            <img src="./assets/images/post.png" width="24px" alt="">
                        </a>
                        <span class="text-white">Posts</span>
                    </li>
                    <li class="nav-item bg-primary  d-flex align-items-center  rounded mt-2 w-100">
                        <a class="nav-link" href="">
                            <img src="./assets/images/comment.png" width="24px" alt="">
                        </a>
                        <span class="text-white">Comments</span>
                    </li>
                    <li class="nav-item bg-primary d-flex align-items-center jusitfy-content-center rounded mt-2 w-100">
                        <a class="nav-link" href="">
                            <img src="./assets/images/document.png" width="24px" alt="">
                        </a>
                        <span class="text-white">Documentation</span>
                    </li>
                </ul>
            </nav>

            <!-- main panel -->
            <div class="container-fluid main-panel bg-light my-2 py-4 ">

                <!-- welcome message -->
                <div class="row-12 mb-5">
                    <div class="col-12">
                        <h3>Welcome Andrul</h3>
                        <h6>All systems are running smoothly!
                            <span class="text-primary"> You have 3 unread alerts!</span>
                        </h6>
                    </div>
                    <div class="col-12">

                    </div>
                </div>

                <div class="row mb-5  flex-column flex-lg-row align-content-center justify-content-md-around">
                    <div class="col-5 mb-5 p-0 ">
                        <img src="./assets/images/welcome.png" class="w-100 h-100 object-fit-cover" alt="people">
                    </div>
                    <div class="col-5 align-content-center">
                        <div class="row  flex-nowrap">
                            <!-- First Row -->
                            <div class="col justify-content-center p-0">
                                <img src="./assets/images/welcome.png" width="200" class="border rounded w-100 h-100 object-fit-cover"
                                    alt="people">
                            </div>
                            <div class="col justify-content-center p-0">
                                <img src="./assets/images/welcome.png" width="200" class="border rounded w-100 h-100 object-fit-cover"
                                    alt="people">
                            </div>
                        </div>
                        <div class="row g-3 flex-nowrap mt-2">
                            <!-- Second Row -->
                            <div class="col justify-content-center p-0">
                                <img src="./assets/images/welcome.png" width="200" class="border rounded w-100 h-100 object-fit-cover"
                                    alt="people">
                            </div>
                            <div class="col justify-content-center p-0">
                                <img src="./assets/images/welcome.png" width="200" class="border rounded w-100 h-100 object-fit-cover"
                                    alt="people">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5" id="users">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Users</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive  container-fluid border rounded m-0">
                                            <table id="users" class="display expandable-table " style="width:100%">
                                                <thead>
                                                    <tr class=" bg-primary text-white">
                                                        <th class="p-2">Id no.</th>
                                                        <th>Username</th>
                                                        <th>Password</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>

                                                    </tr>
                                                </thead>
                                                <tbody ">
                                                <?php
                                                require_once 'includes/config.php';
                                                $sql = "SELECT * FROM users";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = $result->fetch_assoc()) {
                                                    $id = $row['sno'];
                                                    $username = $row['user_email'];
                                                    $password = $row['user_pass'];
                                                    echo "
                                                        <tr >
                                                            <td>$id</td>
                                                            <td>$username</td>
                                                            <td>$password</td>
                                                            <td><a href='edit.php?id=$id' class='btn btn-success'>Edit</a></td>
                                                            <td><a href='delete.php?id=$id' class='btn btn-danger'>Delete</a></td>
                                                        </tr>
                                                        ";
                                                }
                                                ?>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  
                <div class="row">
                    <div class="col-md-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title mb-0">Top Categories</p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Name Of Tech Stack</th>
                                                <th>Threads</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Search Engine Marketing</td>
                                                <td class="font-weight-bold">$362</td>
                                                <td>21 Sep 2018</td>
                                                <td class="font-weight-medium">
                                                    <div class="badge badge-success">Active</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Display Advertising</td>
                                                <td class="font-weight-bold">$551</td>
                                                <td>28 Sep 2018</td>
                                                <td class="font-weight-medium">
                                                    <div class="badge badge-warning">Pending</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>E-Mail Marketing</td>
                                                <td class="font-weight-bold">$781</td>
                                                <td>01 Nov 2018</td>
                                                <td class="font-weight-medium">
                                                    <div class="badge badge-danger">Cancelled</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="add-items d-flex mb-0 mt-2">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add new task">
                                    <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent">
                                        <i class="icon-circle-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>                                            
                    </div>                                  
                </div>

                 <!-- footer -->
                 <footer class="footer mb-5">
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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>