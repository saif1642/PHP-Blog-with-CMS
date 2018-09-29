<?php

  
  function insert_categories(){
    global $con;
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
  }

  function delete_categories(){
    global $con;
       //Delete Category
       if(isset($_GET['delete'])){
        $del_cat_id = $_GET['delete'];
        $del_query = "DELETE FROM category WHERE cat_id='$del_cat_id'";
        $execute_del_category = mysqli_query($con,$del_query);
        header("Location: categories.php");
       }
    
  }
  
  function find_and_displayAllcategories(){
    global $con;
      $cat_query = "SELECT * FROM category";
      $execute_cat_query = mysqli_query($con,$cat_query);
      while($row = mysqli_fetch_assoc($execute_cat_query)){ 
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        echo "<tr><td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
        echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td></tr>";     

        } 
  }

  function displayAllPost(){
      global $con;
      $post_query = "SELECT * FROM posts";
      $execute_post_query = mysqli_query($con,$post_query);
      while($row = mysqli_fetch_assoc($execute_post_query)){
          $post_id = $row['post_id'];
          $post_cat_id = $row['post_cat_id'];
          $post_title = $row['post_title'];
          $post_author = $row['post_author'];
          $post_date = $row['post_date'];
          $post_image = $row['post_image'];
          $post_tags = $row['post_tags'];
          $post_comment_count = $row['post_comment_count'];
          $post_status = $row['post_status'];
          echo "<tr>";
          echo "<td>{$post_id}</td>";
          echo "<td>{$post_author}</td>";
          echo "<td>{$post_title}</td>";
          echo "<td>{$post_cat_id}</td>";
          echo "<td>{$post_status}</td>";
          echo "<td><img width='50px' src='../../images/{$post_image}'></td>";
          echo "<td>{$post_tags}</td>";
          echo "<td>{$post_comment_count}</td>";
          echo "<td>{$post_date}</td>";
          echo "</tr>";

      }
    }

?>