<?php
include "include/header.php"
?>
<section class="ftco-cover" style="background-image: url(images/slider.png); background-color: rgba(0,0,0,0.6); background-blend-mode: overlay;" id="section-home">
	<div class="container">
		<div class="row align-items-center justify-content-center text-center" style="height: 35vh">
			<div class="col-md-12">
				<!-- <h1 class="ftco-heading ftco-animate mb-3">Welcome To Taste Restaurant</h1> -->
				<!-- <h2 class="h5 ftco-subheading mb-5 ftco-animate text-capitalize">tasteful delicacies</h2>     -->
				<h4 class="text-left align-self-end text-white" style="margin-top: 170px">View Order</h4>
			</div>
		</div>
	</div>
</section>
<section class="container mt-5 mb-5">
	<div class="row mt-4 pb-5">
		<div class="col-md-12">
			<h4>View Orders</h4>
			<hr>
			<table class="table table-striped">
				<tr>
					<th>S/N</th>
					<th>Food Name</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Address</th>
				</tr>
				<?php
				// echo $_SESSION['customer_id'];
					$query = $conn->query("SELECT * FROM `orders` JOIN customer on customer.customer_id = orders.customer_id JOIN menu on menu.menu_id=orders.menu_id WHERE customer.customer_id ='". $_SESSION['customer_id']."' ");
					while($get = $query->fetch_array())
					{
					
				?>
				<tr>
					<td>1</td>
					<td><?php echo $get['menu_name'];?></td>
					<td><?php echo $get['quantity'];?></td>
					<td>&#8358;<?php echo $get['total_price'];?></td>
					<td><?php echo $get['delivery_address'];?></td>
				</tr>
			<?php } ?>
			</table>
		</div>
	</div>
</section>

<style type="text/css">
table{
	color: black;
}
</style>
<?php
include "include/footer.php"
?>