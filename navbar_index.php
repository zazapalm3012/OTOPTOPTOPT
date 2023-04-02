<?php
include_once ("connectDB.php");
$conn = new DB_conn;

?>

<!doctype html>
<html lang="en">
<head>
<?php
    include_once("head.php")
    ?>

  </head>
  <body>
<!--navbar start-->
<nav class="navbar navbar-expand-lg navbar-light  ">
    <div class="container-fluid ">
      <a class="navbar-brand col-sm-1 p-1 my-3 mx-3" href="#"><img class ="logo "src="img/otop.png" alt=""width="85" height="85"></a>
      <button class="navbar-toggler ms-auto " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
          <li><a class="dropdown-item" href="show_ex.php">All</a></li>
            <li><a class="dropdown-item" href="honey_only_ex.php">Honey</a></li>
            <li><a class="dropdown-item" href="garlic_only_ex.php">Black Garlic</a></li>
            <li><a class="dropdown-item" href="oil_only_ex.php">Coconut oil</a></li>
          </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About us</a>
          </li>

        </ul>
        <ul class="navbar-nav me-2">
          <li class="nav-item line">
          <li class="nav-item line">
            <a class="nav-link " href="register.php"  aria-disabled="true">Sign up</a>
          </li>
          <li>
            <a class="nav-link " href="login.php"  aria-disabled="true">Login</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<!--navbar end-->
    


  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
