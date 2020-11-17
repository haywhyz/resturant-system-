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
                        <h4 class="page-title">Menu</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <?php
             $id= $_GET['menu_id'];
            // echo $id;
            $query = $conn->query("SELECT * FROM `menu` WHERE menu_id = $id ");
            $get_menu = $query->fetch_assoc();
       
         

            ?>

            <div class="row">
                <div class="col-md-4">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Menu</h4>
                        <?php
                            $id = $_GET['menu_id'];
                      
                             if(isset($_POST['update'])){
                            $menu_name = trim(($_POST['menu_name']));
                            $description = trim(($_POST['description']));
                            $price = trim(($_POST['price']));

                             $query = $conn->query("UPDATE `menu` SET`menu_name`='$menu_name',`description`='$description',`price`='$price' WHERE menu_id = $id");
                             if(!$query){

                               echo '<alert class="btn-danger">data cannot be updated</alert>'.$conn->error;
                             }
                             else{

                                    echo '<div class="alert alert-success dismiss">
                               successfully updated
                            </div>';
                              echo "<script>
                            setTimeout(function(){
                              window.location.href='menu.php';
                            },1000)</script>";
                                
                                
                             }

                           


                        }
                        ?>

                        <form method="post" action="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Menu Name </label>
                                <input type="text" class="form-control" name="menu_name" value="<?php echo $get_menu['menu_name']; ?>" aria-describedby="emailHelp" placeholder="Enter Conference Theme">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" name="description"><?php echo $get_menu['description']; ?></textarea>
                                <!-- <input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="Enter Price"> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" class="form-control" name="price" aria-describedby="emailHelp" value="<?php echo $get_menu['price']; ?>" placeholder="Enter Price">
                            </div>
                            
                            <div class="form-group">
                               <button type="submit" name="update" class="btn btn-primary btn-block">Add menu</button>
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