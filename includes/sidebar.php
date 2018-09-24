<div class="col-md-4">


<!-- Search Widget -->
<div class="card my-4">
  <h5 class="card-header">Search</h5>
  <div class="card-body">
   <form action="search.php" method="post">
      <div class="input-group">
        <input name="search" type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-secondary" type="submit" name="submit">Go!</button>
        </span>
      </div>
    </form>
  </div>
</div>

<?php
   $cat_query = "SELECT * FROM category LIMIT 3";
   $execute_query = mysqli_query($con,$cat_query);
?>

<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <ul class="list-unstyled mb-0">
          <?php
            while($row = mysqli_fetch_assoc($execute_query)){
              $cat_title = $row['cat_title'];
              echo "<li ><a href='#'>{$cat_title}</a></li>";
            }
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Side Widget -->
<div class="card my-4">
  <h5 class="card-header">Side Widget</h5>
  <div class="card-body">
    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
  </div>
</div>

</div>