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
                        <h4 class="page-title">Papers Uploaded</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
               <div class="col-md-12">
                   <div class="card-box">
                       <h4 class="header-title mb-3">Papers Uploaded by Authors</h4>
                       <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Author</th>
                                <th>Institution</th>
                                <th>Paper Title</th>
                                <th>Paper Pages</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Font Awesome</td>
                                <td>Federal Polytechnic Ilaro</td>
                                <td>Introduction to computer</td>
                                <td>72</td>
                                <td>30/07/2020</td>
                                <td><a href="view-paper.php" class="btn btn-primary waves-effect waves-light">View</a> <a href="" class="btn btn-danger waves-effect waves-light">Delete</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- container -->
    </div>

<?php
include "includes/footer.php";
?>