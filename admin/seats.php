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
                        <h4 class="page-title">Seat </h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <!-- <div class="col-md-12"> -->
                    <div class="card-box col-md-5 m-2">
                        <div class="col-md-4">
                            <h4 class="header-title mb-3">Available Seat </h4>

                           
                     </div>
                 </div> 

                 <div class="card-box col-md-5 m-2">
                        <div class="col-md-4">
                            <h4 class="header-title mb-3">UnAvailable Seats </h4>

                           
                     </div>
                 </div>
                  
             <!-- </div> -->

         </div> <!-- container -->

         <div class="row">
                <div class="col-md-4">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Menu</h4>
                        <?php 
                        if(isset($_POST[' b '])){
                            $menu_name = trim(($_POST['menu_name']));
                          
                           

                             $query = mysqli_query($conn, "INSERT INTO `menu`( `menu_name`) VALUES ('$menu_name')");
                             if(!$query){
                               echo '<alert class="alert alert-danger">data cannot be inserted</alert>'.mysqli_error($conn);
                             }
                             else{
                                
                                 echo '<alert class="alert alert-success">successfully inserted</alert>';
                             }

                        }

                        ?>

                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Seat Name </label>
                                <input type="text" class="form-control" name="menu_name" aria-describedby="emailHelp" placeholder="Enter seat number">
                            </div>
                           
                            <div class="form-group">
                               <button type="submit" name="add" class="btn btn-primary btn-block">Add menu</button>
                           </div>
                       </form>
                   </div> <!-- end card-box -->
               </div>
               
            </div>


     </div>

     <?php
     include "../includes/footer.php";
     ?>