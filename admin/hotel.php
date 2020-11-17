 <?php
 include "includes/header.php";
 include "includes/sidebar.php";
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
                        <h4 class="page-title">Hotel</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-md-4">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Hotel Details</h4>

                        <form method="post" action="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hotel Name</label>
                                <input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="Enter Hotel Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hotel Location</label>
                                <input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="Enter Hotel Location">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hotel Rates</label>
                                <input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="Enter Hotel Price Rates">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hotel Rooms</label>
                                <input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="Enter Available Hotel Rooms">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hotel Contact</label>
                                <input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="Enter Hotel Contact Details">
                            </div>
                            <div class="form-group">
                               <button type="submit" name="" class="btn btn-primary btn-block">Add Hotel</button>
                           </div>
                       </form>
                   </div> <!-- end card-box -->
               </div>
               <div class="col-md-8">
                   <div class="card-box">
                       <h4 class="header-title mb-3">Modify Hotel Details</h4>
                       <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Hotel Name</th>
                                <th>Hotel Location</th>
                                <th>Hotel Rates</th>
                                <th>Hotel Rooms</th>
                                <th>Hotel Contact</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>IBD Hotel</td>
                                <td>Express Road, Ilaro</td>
                                <td>&#8358;10,0000</td>
                                <td>20</td>
                                <td>08123456789</td>
                                <td><a href="" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Edit</a> <a href="" class="btn btn-danger waves-effect waves-light">Delete</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- container -->
    </div>

    <!-- sample modal content -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Edit Hotel Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="post">
                       <div class="form-group">
                        <label for="exampleInputEmail1">Hotel Name</label>
                        <input type="text" class="form-control" name="" value="IBD Hotel">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hotel Location</label>
                        <input type="text" class="form-control" name="" value="Express Road, Ilaro">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hotel Rates</label>
                        <input type="text" class="form-control" name="" value="10000">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hotel Rooms</label>
                        <input type="text" class="form-control" name="" value="20">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hotel Contact</label>
                        <input type="text" class="form-control" name="" value="08123456789">
                    </div>
                    <div class="form-group">
                       <button type="submit" name="" class="btn btn-primary btn-block">Update Hotel Details</button>
                   </div>
               </form>
           </div>
       </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php
include "includes/footer.php";
?>