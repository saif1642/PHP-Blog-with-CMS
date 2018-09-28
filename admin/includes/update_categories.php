<?php
      $q="SELECT * FROM category WHERE cat_id='$edit_cat_id'";
      $exc_q = mysqli_query($con,$q);
      while($row = mysqli_fetch_assoc($exc_q)){
          $cat_id = $row['cat_id'];
          $cat_title = $row['cat_title'];
     ?>
      <input class="form-control" value="<?php if(isset($cat_title)) {echo $cat_title;} ?>" name="cat_title">
  <?php  }  ?>

  <?php
       //Update Category
     if(isset($_POST['update_category'])){
      $update_cat_title = $_POST['cat_title'];   
      $update_query = "UPDATE category SET cat_title='{$update_cat_title}' WHERE cat_id={$cat_id}";
      $execute_update_category = mysqli_query($con,$update_query);
      if(!$execute_update_category){
          die("Query Failed".mysqli_error($con));
      }
     }
  



?> 