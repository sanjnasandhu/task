<?php 
   session_start();  
   
?>
<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="../Extensions/DynTables/bootstrap.min.css" rel="stylesheet">
  <link href="../Extensions/DynTables/metisMenu.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="jquery.min.js"></script>
<!--     <link rel="stylesheet" href="css/bootstrap.css"/> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" 
        crossorigin="anonymous"></script> -->
   <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
   <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
  <style type="text/css" href="style.css">
</style>
</head>
<body>
  <?php 

if ($_SESSION['email'] && $_SESSION['usertype']==user){ ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
     <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
       <li class="nav-item active">
         <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
       </li>
         
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">categories
          </a>

        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <?php
      error_reporting(0);
      $connect = mysqli_connect("localhost", "root", "redhat", "student");
      $id = $_GET['id'];
      $query = "SELECT * FROM categories WHERE id= 2";
      $result = mysqli_query($connect, $query);
      if (mysqli_num_rows($result) > 0)
      {
          while ($row = mysqli_fetch_assoc($result))
          {
      ?>
        <form method="post" action="">
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
      <a  class="dropdown-item" href="showbrand.php?id=<?php echo $row["id"]; ?>"><i >SkinCare</i></a>
           </li>
         </ul>
       </form>
         </ul>
          </div>
        </div>    
        </form>
        
              <?php
          }
      }
      ?>
            <a class="dropdown-item" href="showbrand.php">skin-care</a>
             <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-submenu"><a  class="dropdown-item dropdown-toggle" href="#">brands</a>
              <li class="dropdown-submenu"><a class="dropdown-submenu" href="#">moisturizer</a></li>
              <li class="dropdown-submenu"><a class="dropdown-submenu" href="#">sunscreen</a></li>
              <li class="dropdown-submenu"><a class="dropdown-submenu" href="#">face-oil</a></li>-->
          </li> 
         
          <li><a class="dropdown-item" href="showbrand.php">fashion-wear</a>
            <!-- <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">men's wear</a></li>
                <li><a class="dropdown-item" href="#">woman's wear</a></li>
                <li><a class="dropdown-item" href="#">baby's wear</a></li>
            </ul>  -->
          </li>

<!--           <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">electronics</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">computer</a></li>
                <li><a class="dropdown-item" href="#">mobiles</a></li>
            </ul>
          </li> -->
        </ul>
       </li>
             
                <li class="nav-item">
                  <a class="nav-link" href="welcome.php">profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="loggingout.php">logout</a>
                </li>
     </ul>


        <form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
  </div>
</nav>

<?php } else if($_SESSION['email'] && $_SESSION['usertype']==admin){ ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home</a>
          </li>

                 <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">categories
          </a>

                <?php
      error_reporting(0);
      $connect = mysqli_connect("localhost", "root", "redhat", "student");
      $id = $_GET['id'];
      print_r($id);
      die(); 
      $query = "SELECT * FROM categories ORDER BY id ASC";
      $result = mysqli_query($connect, $query);

      $result = mysqli_fetch_assoc($result);
      echo '<pre>';
      print_r($result);
      echo '</pre>';
      die();

      if (mysqli_num_rows($result) > 0)
      {
          while ($row = mysqli_fetch_assoc($result))
          {
      ?>
        <form method="post" action="">
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
      <a  class="dropdown-item" href="showbrand.php?id=<?php echo $row["id"]; ?>"></a>
           </li>
         </ul>
          </div>
        </div>    
        </form>
        
              <?php
          }
      }
      ?>
            
             <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-submenu"><a  class="dropdown-item dropdown-toggle" href="#">brands</a>
              <li class="dropdown-submenu"><a class="dropdown-submenu" href="#">moisturizer</a></li>
              <li class="dropdown-submenu"><a class="dropdown-submenu" href="#">sunscreen</a></li>
              <li class="dropdown-submenu"><a class="dropdown-submenu" href="#">face-oil</a></li>-->
         

<!--           <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">electronics</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">computer</a></li>
                <li><a class="dropdown-item" href="#">mobiles</a></li>
            </ul>
          </li> -->
        </ul>
       </li>

            
          <li class="nav-item active">
            <a class="nav-link" href="insertform.php">add products<span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item active">
            <a class="nav-link" href="insertbrand.php">add brand</a>
          </li>
          
          <li class="nav-item active">
           <a class="nav-link" href="welcome.php">Admin Profile</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="loggingout.php">Logout <span class="sr-only">(current)</span></a>
          </li>
            
        </ul>
      </div>
    </nav>

<?php } else if(!$_SESSION['email']){ ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link" href="regis.php">Register <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="loginpage.php">Login</a>
          </li>
      
        </ul>
      </div>
    </nav>

 <?php }

if(isset($_SESSION['msg'])){
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);

  }
?>
<!--   <?php
//  include ('footer.php');
  ?> -->

  
  
 