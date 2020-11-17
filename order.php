<?php
include "include/header.php"
?>
<?php 
if(!isset($_SESSION['email'])){
	 echo '<div class="alert alert-danger">
                            Please Login 
                        </div>';
                          echo "<script>
                        setTimeout(function(){
                          window.location.href='index.php';
                        },1500)</script>";

}
?>
<section class="ftco-cover" style="background-image: url(images/slider.png); background-color: rgba(0,0,0,0.6); background-blend-mode: overlay;" id="section-home">
	<div class="container">
		<div class="row align-items-center justify-content-center text-center" style="height: 35vh">
			<div class="col-md-12">
				<!-- <h1 class="ftco-heading ftco-animate mb-3">Welcome To Taste Restaurant</h1> -->
				<!-- <h2 class="h5 ftco-subheading mb-5 ftco-animate text-capitalize">tasteful delicacies</h2>     -->
				<h4 class="text-left align-self-end text-white" style="margin-top: 170px">Order</h4>
			</div>
		</div>
	</div>
</section>
<section class="container mt-5 mb-5">
	<div class="row mt-4 pb-5">
		<div class="col-md-12">
			<?php 
if(!isset($_SESSION['email'])){
	 echo '<script>
	 		alert("Kindly register or Login");
           </script>';
                          echo "<script>
                        setTimeout(function(){
                          window.location.href='index.php';
                        },1500)</script>";

}
?>

			<?php

            $query = $conn->query("SELECT * FROM `menu` where `menu_id` = '" . $_GET["menu_id"] . "'");
            $rows = $query->fetch_assoc();

			?>
			<div class="row">
				<div class="col-md-3">
					<img src="uploads/<?php echo $rows['pics']; ?>" class="img-fluid">
				</div>
				<div class="col-md-3">
					<h4><?php echo $rows['menu_name']; ?></h4>
					<p style="color: black !important">Price:<span class="font-weight-bold">&#8358; <?php echo $rows['price']; ?></span></p>
				</div>
				<div class="col-md-6 order-form">
					<h3>Order Form</h3>
					<hr>

					<!-- getting user details -->
					<?php
					// echo $_SESSION['email'];

			            $query = $conn->query("SELECT * FROM `customer` where `email` = '" . $_SESSION['email'] . "'");
			            $row = $query->fetch_assoc();

						?>

						<!-- submitting order -->

						<!-- INSERT INTO `orders`(`order_id`, `menu_id`, `customer_id`, `quantity`, `total_price`, `arrival_time`, `departure_time`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8]) -->

						  <?php
			                if(isset($_POST['submit'])){
			                 	
			                 	$menu_id = $_GET["menu_id"];
			                 	$customer_id = $row['customer_id'];

			                     $delivery_phone = trim(($_POST['address']));
			                  	 $delivery_address = trim(($_POST['phone']));
			                      $quantity = trim(($_POST['quantity']));
			                      $total_price = $quantity * $rows['price'];
			                      $status = '0';

			                       $query = mysqli_query($conn, "INSERT INTO `orders`(`menu_id`, `customer_id`, `delivery_phone`, `delivery_address`, `quantity`, `total_price`, `arrival_time`, `departure_time`, `status`) VALUES('$menu_id','$customer_id','$delivery_phone','$delivery_address','$quantity', '$total_price', NOW(),NOW(),'$status')");
			                     if(!$query){
			                        echo '<alert class="alert alert-danger">Order can not be Placed</alert>'.mysqli_error($conn);
			                        }
			                       else{
			                                
			                         echo '<alert class="alert alert-success">your Order has been placed, it will deliver in the next 15minutes</alert>';
			                          echo "<script>
			                            setTimeout(function(){
			                              window.location.href='index.php';
			                            },4000)</script>";
			                                
			                         }

			                        } 

			                        ?>

					<form method="post">
						
						<div class="form-group">
							<label>Phone</label>
							<input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" placeholder="Phone Number">
						</div>
						<div class="form-group">
							<label>Delivery Address</label>
							<input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>" placeholder="Delivery Address">
						</div>
						<div class="form-group">
							<label>Quantity</label>
							<input type="number" name="quantity" class="form-control"  placeholder="0">
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-danger">Make Order</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<style type="text/css">
	.order-form input{
		height: 40px !important;
		font-size: 14px;
	}
	button{
		border-radius: 0 !important;
	}
	label{
		font-weight: bold;
	}
</style>
<?php
include "include/footer.php"
?>