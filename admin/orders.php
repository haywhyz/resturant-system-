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
                        <h4 class="page-title">Orders </h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <?php 
            
                if(isset($_GET['order_id'])){
                    $query = $conn->query("UPDATE `orders` SET `status`= '1' WHERE order_id = '".$_GET['order_id']."' ORDER BY arrival_time DESC ");
                     if ($query){
                      echo '<div class="alert alert-success dismiss">
                            order have been delivered
                        </div>';
                          echo "<script>
                        setTimeout(function(){
                          window.location.href='orders.php';
                        },1000)</script>";
                       
                  }
                  else{
                      echo "error".$conn->error();
                  }
              
                }

            ?>

            <div class="row">
                <!-- <div class="col-md-4">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Important Dates</h4>

                        <form method="post" action="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Event Title</label>
                                <input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="Enter Speaker Type">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Event Date</label>
                                <input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="Enter Speaker Name">
                            </div>
                            <div class="form-group">
                               <button type="submit" name="" class="btn btn-primary btn-block">Add Date</button>
                           </div>
                       </form>
                   </div> <!-- end card-box -->
               <!-- </div>  -->
               <div class="col-md-12">
                   <div class="card-box">
                       <h4 class="header-title mb-3">View Orders</h4>
                       <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>menu</th>
                                <th>Price</th>
                                <th>Customer Name</th>
                                <th>Arrival Time</th>
                                <th>Delivery Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                          
                                $query = $conn->query("SELECT * FROM `orders` JOIN customer on customer.customer_id = orders.customer_id JOIN menu on menu.menu_id=orders.menu_id ORDER by `arrival_time` ASC");
                                $sn= 1;
                                while($get = $query->fetch_array())
                                {
                                
                            ?>
                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $get['menu_name'] ?></td>
                                <td><?php echo $get['total_price'] ?></td>
                                <td><?php echo $get['fullname'] ?></td>
                                <td><?php echo $get['arrival_time'] ?></td>
                                <td>
                                    <?php
                                        if($get['status'] == 0){
                                            echo '<button class="btn btn-primary">pending</button>';
                                        }
                                        else{

                                            echo '<button class="btn btn-success">delivered</button>';
                                        }
                                    ?>
                                </td>
                                <td><a href="full-order.php?order_id=<?php echo $get['order_id'];?>" class="btn btn-danger">view</a>
                                     

                            
                            </tr>
                        <?php } ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- container -->
    </div>

    <?php
    include "../includes/footer.php";
    ?>