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
             $id= $_GET['customer_id'];
            // echo $id;
            $query = $conn->query("SELECT * FROM `customer` WHERE customer_id = $id ");
            $get_menu = $query->fetch_assoc();
       
         

            ?>

            <div class="row">
                <div class="col-md-4">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Employee</h4>
                      
                        ?

                        <form method="post" action="">
                         
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" value="<?php echo $get_menu['fullname']; ?>"  name="fullname" aria-describedby="emailHelp" placeholder="Enter Speaker Type">
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