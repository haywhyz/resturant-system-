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
             $id= $_GET['employee_id'];
            // echo $id;
            $query = $conn->query("SELECT * FROM `employee` WHERE employee_id = $id ");
            $get_menu = $query->fetch_assoc();
       
         

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

                             $query = $conn->query("UPDATE `employee` SET `fullname`='$fullname',`gender`='$gender',`email`='$email',`phone`='$phone',`address`='$address' WHERE employee_id = '" . $_GET["employee_id"] . "'");
                             if(!$query){

                               echo '<alert class="btn-danger">data cannot be updated</alert>'.$conn->error;
                             }
                             else{

                                    echo '<div class="alert alert-success dismiss">
                               successfully updated
                            </div>';
                              echo "<script>
                            setTimeout(function(){
                              window.location.href='employee.php';
                            },1000)</script>";
                                
                                
                             }



                        } 

                        ?>

                        <form method="post" action="">
                         
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" value="<?php echo $get_menu['fullname']; ?>"  name="fullname" aria-describedby="emailHelp" placeholder="Enter Speaker Type">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender</label>
                                <select class="form-control" name="gender">
                                    <option><?php echo $get_menu['gender']; ?></option>
                                    
                                </select>
                                <!-- <input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="Enter Speaker Name"> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">email</label>
                                <input type="email" class="form-control" value="<?php echo $get_menu['email']; ?>"  name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" value="<?php echo $get_menu['phone']; ?>"  name="phone" aria-describedby="emailHelp" placeholder="Enter phone number">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address </label>
                                <textarea name="address" class="form-control"><?php echo $get_menu['address']; ?></textarea>
                                <!-- <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="Enter Speaker's Email Address"> -->
                            </div>
                            <div class="form-group">
                               <button type="submit" name="add" class="btn btn-primary btn-block">update</button>
                           </div>
                       </form>
                   </div> <!-- end card-box -->
               </div>
             
        </div> <!-- container -->
    </div>


    <!-- sample modal content -->
   


    <?php
    include "../includes/footer.php";
    ?>