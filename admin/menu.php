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

           <?php
            if(isset($_GET['menu_id'])){
            $query = $conn->query("DELETE FROM `menu` WHERE menu_id='" . $_GET["menu_id"] . "'");
                  
                  if ($query){
                      echo '<div class="alert alert-success dismiss">
                            Menu is  Deleted
                        </div>';
                          echo "<script>
                        setTimeout(function(){
                          window.location.href='menu.php';
                        },1000)</script>";
                       
                  }
                  else{
                      echo "error".$conn->error();
                  }
              }
              ?>
            <!-- end page title --> 

            <div class="row">
                <div class="col-md-4">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Menu</h4>
                        <?php
                        if(isset($_POST['add'])){
                            $menu_name = trim(($_POST['menu_name']));
                            $description = trim(($_POST['description']));
                            $price = trim(($_POST['price']));
                            $image = $_FILES['image']['name'];
                            $destination = '../uploads/' . $image;

                             $query = mysqli_query($conn, "INSERT INTO `menu`( `menu_name`, `description`, `price`,`pics`) VALUES ('$menu_name','$description','$price','$image')");
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
                                <label for="exampleInputEmail1">Menu Name </label>
                                <input type="text" class="form-control" name="menu_name" aria-describedby="emailHelp" placeholder="Enter Conference Theme">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" name="description"></textarea>
                                <!-- <input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="Enter Price"> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" class="form-control" name="price" aria-describedby="emailHelp" placeholder="Enter Price">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="file" class="form-control" name="image" aria-describedby="emailHelp" placeholder="Enter Price">
                            </div>
                            
                            <div class="form-group">
                               <button type="submit" name="add" class="btn btn-primary btn-block">Add menu</button>
                           </div>
                       </form>
                   </div> <!-- end card-box -->
               </div>
               <div class="col-md-8">
                   <div class="card-box">
                       <h4 class="header-title mb-3">Modify Menus</h4>
                       <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Menu Name</th>
                                <th>Description</th>
                                <th>Price </th>
                                
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = $conn->query("SELECT * FROM `menu`");
                           
                                while($row = $query->fetch_assoc()){
                                    ?>
                                

                            
                            <tr>
                                <td>1</td>
                               <td><?php echo $row['menu_name']; ?></td> 
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><a href="edit-menu.php?menu_id=<?php echo $row['menu_id']; ?>" class="btn btn-primary waves-effect waves-light">Edit</a> 
                                    <a href="menu.php?menu_id=<?php echo $row['menu_id']?>" class="btn btn-danger">Delete</a></td>
                       
                              
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
    <div id="myModal<?php echo $row['menu_id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Edit Menu Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Menu Name</label>
                            <input type="text" class="form-control" name="menu_name" value="<?php echo $row['menu_name']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" name="description"><?php echo $row['description']; ?></textarea>
                            <!-- <input type="text" class="form-control" name="" value="Lorem ipsum dolor sit amet."> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price </label>
                            <input type="number" class="form-control" name="price" value="<?php echo $row['price']; ?>">
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" name="update" class="btn btn-primary btn-block">Update Menu Details</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- sample modal content -->
   


    <?php
    include "../includes/footer.php";
    ?>