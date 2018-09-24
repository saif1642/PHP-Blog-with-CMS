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
                                    <?php
                                         if(isset($_POST['submit'])){
                                             $cat_title = $_POST['cat_title'];
                                             if($cat_title=="" || empty($cat_title)){
                                                 echo "<label class='control-label' for='inputWarning'>This Field is required</label>";
                                             }else{
                                                 $insert_query = "INSERT INTO category(cat_title)";
                                                 $insert_query.= "VALUE('{$cat_title}')";
                                                 $execute_insert_query = mysqli_query($con,$insert_query);
                                                 if(!$execute_insert_query){
                                                     die('QUERY FAILED'.mysqli_error($con));
                                                 }
                                             }
                                         }
                                    
                                    
                                    ?>
                                    <form role="form" action="" method="post">
                                        <div class="form-group">
                                            <label>Add Category</label>
                                            <input class="form-control" name="cat_title">
                                            <button class="btn btn-primary" type="submit" name="submit">Add Category</button>
                                        </div>
                                    </form>
                                </div>
                                <?php 
                                //Display Category Data
                                $cat_query = "SELECT * FROM category";
                                $execute_cat_query = mysqli_query($con,$cat_query);
                                ?>
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
                                                            <?php 
                                                                while($row = mysqli_fetch_assoc($execute_cat_query)){ 
                                                                $cat_id = $row['cat_id'];
                                                                $cat_title = $row['cat_title'];
                                                                echo "<tr><td>{$cat_id}</td>";
                                                                echo "<td>{$cat_title}</td></tr>";
                                                                    
                                                                } 
                                                            ?>   
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