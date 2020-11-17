 <?php
 include "../includes/header.php";
 include "../includes/sidebar.php";
 ?>
 <div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Employee</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 
            <?php
            if(isset($_GET['employee_id'])){
            $query = $conn->query("DELETE FROM `employee` WHERE employee_id='" . $_GET["employee_id"] . "'");
                  
                  if ($query){
                      echo '<div class="alert alert-success dismiss">
                            employee is  Deleted
                        </div>';
                          echo "<script>
                        setTimeout(function(){
                          window.location.href='employee.php';
                        },1000)</script>";
                       
                  }
                  else{
                      echo "error".$conn->error();
                  }
              }
              ?>

            <div class="row">
                <div class="col-md-4">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Employee</h4>
                        <?php
                         if(isset($_POST['add'])){
                            $fullname = trim(($_POST['fullname']));
                            $gender = trim(($_POST['gender']));
                            $email = trim(($_POST['email']));
                             $phone = trim(($_POST['phone']));
                            $address = trim(($_POST['address']));

                             $query = mysqli_query($conn, "INSERT INTO `employee`(`fullname`, `gender`, `email`, `phone`, `address`) VALUES ('$fullname','$gender','$email','$phone','$address')");
                             if(!$query){
                               echo '<alert class="btn btn-danger">data cannot be inserted</alert>'.mysqli_error($conn);
                             }
                             else{
                                
                                 echo '<alert class="btn btn-success">successfully inserted</alert>';
                             }

                           


                        } 

                        ?>

                        <form method="post" action="">
                         
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" name="fullname" aria-describedby="emailHelp" placeholder="Enter Speaker Type">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender</label>
                                <select class="form-control" name="gender">
                                    <option >Select gender</option>
                                    <option value="male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <!-- <input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="Enter Speaker Name"> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">email</label>
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="Enter phone number">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address </label>
                                <textarea name="address" class="form-control"></textarea>
                                <!-- <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="Enter Speaker's Email Address"> -->
                            </div>
                            <div class="form-group">
                               <button type="submit" name="add" class="btn btn-primary btn-block">Add</button>
                           </div>
                       </form>
                   </div> <!-- end card-box -->
               </div>
               <div class="col-md-8">
                   <div class="card-box">
                       <h4 class="header-title mb-3">Modify Employee</h4>
                       <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                               >
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                            $query = $conn->query("SELECT * FROM `employee`");
                                $no=1;
                                while($row = $query->fetch_assoc()){
                                    ?>
                                

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['fullname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                
                                <td><a href="edit-employee.php?employee_id=<?php echo $row['employee_id']; ?>" class="btn btn-primary waves-effect waves-light" >Edit</a>
                                 <a href="employee.php?employee_id=<?php echo $row['employee_id']; ?>" class="btn btn-danger waves-effect waves-light">Delete</a></td>
                            </tr>
                            <?php
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- container -->
    </div>


    <!-- sample modal content -->
   


    <?php
    include "../includes/footer.php";
    ?>