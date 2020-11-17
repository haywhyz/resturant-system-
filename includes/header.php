<?php
require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Restuarant Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/FPI--Logo1.png">

        <!-- jvectormap -->
        <link href="../assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

        <!-- DataTables -->
        <link href="../assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
         <!-- third party css -->
        <link href="../assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />   
        <link href="../assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />   
        
        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- Summernote css -->
        <link href="../assets/libs/summernote/summernote-bs4.css" rel="stylesheet" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="../assets/images/users/avatar-4.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                Agnes K <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <a href="logout.php" class="dropdown-item notify-item">
                                <i class="dripicons-power"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                </ul>

                <ul class="list-unstyled menu-left mb-0">
                    <li class="float-left">
                        <a href="dashboard.php" class="logo">
                            <span class="logo-lg">
                                <!-- <img src="../assets/images/FPI--Logo1.png" alt="" height="45"> -->
                                <h3 style="color:white;">Admin Management</h3>
                            </span>
                            <span class="logo-sm">
                                <!-- <img src="../assets/images/logo-sm.png" alt="" height="24"> -->

                            </span>
                        </a>
                    </li>
                    <li class="float-left">
                        <a class="button-menu-mobile navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </li>
                    <li class="app-search d-none d-md-block">
                        <form>
                            <input type="text" placeholder="Search..." class="form-control">
                            <button type="submit" class="sr-only"></button>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->