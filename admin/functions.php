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



?>