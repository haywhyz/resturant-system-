<?php 
require_once "../includes/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Restuarant  Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/FPI--Logo1.png">

    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg authentication-bg-pattern d-flex align-items-center">

    
    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">
                            
                            <div class="text-center mb-4">
                                <a href="index.php">
                                    <!-- <span><img src="../assets/images/FPI--Logo2.png" alt="" height="100"></span> -->
                                </a>
                                <!-- <h2>Admin</h2> -->
                                <h3>Admin Login</h3>
                            </div>
                            <?php
                            if(isset($_POST['login'])) {
 
                             

                                $username = trim(($_POST['username'])); // get username
                                $password = trim(($_POST['password'])); //Get password

                                $query = mysqli_query($conn, "SELECT * FROM `admin` WHERE username='$username' AND password='$password'");
                                $check_query = mysqli_num_rows($query); 

                                if($check_query == 1) {
                                    $_SESSION['username'] = $Username;
                                    header("Location: dashboard.php"); 
                                }
                                    else {
                                                echo "username or password not correct".mysqli_error($conn);
                                            }
                                        }

                                    ?>

                            <form method="post" class="">

                                <div class="form-group mb-3">
                                    <label for="emailaddress">Username</label>
                                    <input class="form-control" type="text" id="" name="username" placeholder="Enter your Username">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password">
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-success btn-block" type="submit" name="login"> Log In </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="../assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.min.js"></script>
    
</body>
</html>