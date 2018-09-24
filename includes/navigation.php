<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           <?php
            //Dynamic navigation
            $query = "SELECT * FROM category";
            $execute_query = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($execute_query)){
                $cat_title = $row['cat_title'];
                echo "<li class='nav-item'><a class='nav-link' href='#'>{$cat_title}</a></li>";
            }
           ?>
          </ul>
        </div>
      </div>
</nav>