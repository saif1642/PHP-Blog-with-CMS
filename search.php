
<?php include("includes/header.php"); ?>
    <!-- Navigation -->
    <?php include("includes/navigation.php"); ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>

          <?php

            if(isset($_POST['submit'])){
                $search = $_POST['search'];
                $search_query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                $execute_search_query = mysqli_query($con,$search_query);
                if(!$execute_search_query){
                    die("Query Failed".mysqli_error($con));
                }
                $count = mysqli_num_rows($execute_search_query);
                if($count == 0){
                    echo "<h1>NO RESULT</h1>";
                }else{
                while($row = mysqli_fetch_assoc($execute_search_query)){
                    $post_title = $row['post_title'];
                    $post_date = $row['post_date'];
                    $post_author = $row['post_author'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    ?>
                    <!-- Blog Post -->
                    <div class="card mb-4">
                        <img class="card-img-top" src="images/<?php echo $post_image; ?>" alt="Card image cap">
                        <div class="card-body">
                        <h2 class="card-title"><?php echo $post_title; ?></h2>
                        <p class="card-text"><?php echo $post_content; ?></p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                        Posted on <?php echo $post_date; ?>
                        <a href="#">Start Bootstrap</a>
                        </div>
                    </div>

             <?php }
         
       }
    } ?>


        </div>

        <!-- Sidebar Widgets Column -->
        <?php include("includes/sidebar.php"); ?>


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
  <?php include("includes/footer.php"); ?>