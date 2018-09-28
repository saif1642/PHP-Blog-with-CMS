<?php include("../includes/header.php"); ?>

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
                                <div class="col-lg-6">
                                    <?php insert_categories();  ?>
                                    <form role="form" action="" method="post">
                                        <div class="form-group">
                                            <label>Add Category</label>
                                            <input class="form-control" name="cat_title">
                                            <button class="btn btn-primary" type="submit" name="submit">Add Category</button>
                                        </div>
                                    </form>

                                    <form role="form" action="" method="post">
                                        <div class="form-group">
                                            <label>Edit Category</label>
                                            <?php 
                                            if(isset($_GET['edit'])){
                                                $edit_cat_id = $_GET['edit'];
                                                include("../includes/update_categories.php");
                                            }
                                            ?> 
                                            <button class="btn btn-primary" type="submit" name="update_category">Update</button>
                                        </div>
                                    </form>
                                </div>
                                
                                
                                
                                <div class="col-lg-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            All Categories
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>id</th>
                                                            <th>Category Title</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                            <?php find_and_displayAllcategories(); ?>   
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php delete_categories(); ?>
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