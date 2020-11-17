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
                        <h4 class="page-title">Customer</h4>
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
                
               <div class="col-md-12">
                   <div class="card-box">
                       <h4 class="header-title mb-3">View Customer</h4>
                       <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                               >
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                            $query = $conn->query("SELECT * FROM `customer`");
                                $no=1;
                                while($row = $query->fetch_assoc()){
                                    ?>
                                

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['fullname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                
                                <td><a href="edit-customers.php?customer_id=<?php echo $row['customer_id']; ?>" class="btn btn-primary waves-effect waves-light" >view</a>
                                 </td>
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