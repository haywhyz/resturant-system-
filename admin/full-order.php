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
                        <h4 class="page-title">Full Order</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-md-6">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Orders Details</h4>
                        <hr>
                        <?php
                        $query = $conn->query("SELECT * FROM `orders` JOIN customer on customer.customer_id = orders.customer_id JOIN menu on menu.menu_id=orders.menu_id WHERE order_id ='".$_GET['order_id']. "'");
                        $gets = $query->fetch_assoc();

                        ?>
                        <table class="table table-striped">
                            <tr>
                                <td class="font-weight-bold">Full Name</td>
                                <td><?php echo $gets['fullname'] ?></td>
                            </tr> 
                            <tr>
                                <td class="font-weight-bold">Email</td>
                                <td><?php echo $gets['email'] ?></td>
                            </tr> 
                            <tr>
                                <td class="font-weight-bold">Delivery Phone Number</td>
                                <td><?php echo $gets['delivery_phone'] ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Delivery Address</td>
                                <td><?php echo $gets['delivery_address'] ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Menu Name</td>
                                <td><?php echo $gets['menu_name'] ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Menu Description</td>
                                <td><?php echo $gets['description'] ?></td>
                            </tr>
                             <tr>
                                <td class="font-weight-bold">Quantity</td>
                                <td><?php echo $gets['quantity'] ?></td>
                            </tr>
                             <tr>
                                <td class="font-weight-bold">Total Price</td>
                                <td><?php echo $gets['total_price'] ?></td>
                            </tr>
                        </table>
                           <!--  <div class="form-group">
                               <button type="submit" name="" class="btn btn-primary btn-block">Add Account Details</button>
                           </div> -->
                       
                   </div> <!-- end card-box -->
               </div>
             
        </div> <!-- container -->
    </div>

<?php
include "../includes/footer.php";
?>