<?php 
include("../includes/header.php");
?>

    <div id="wrapper">
        <!-- Navigation -->
        <?php include("../includes/navigation.php"); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome To admin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                               
                                <div class="col-lg-12">
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                    Posts Data
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Authr</th>
                                                    <th>Title</th>
                                                    <th>Category ID</th>
                                                    <th>Status</th>
                                                    <th>Image</th>
                                                    <th>Tags</th>
                                                    <th>Comments</th>
                                                    <th>Date</th>



                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php displayAllPost(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                        <!-- /.panel-body -->
                    </div>
                                    <!-- /.panel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
        <!-- /#page-wrapper -->

   <?php include("../includes/footer.php"); ?>