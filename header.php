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
   <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
  <style type="text/css" href="style.css">
</style>
</head>
<body>
  <?php 

if ($_SESSION['email']){
  ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
 <div class="collapse navbar-collapse" id="navbarSupportedContent">

  <ul class="navbar-nav mr-auto">

   <li class="nav-item active">
   <a class="nav-link" href="welcome.php">Home</a>
   </li>
      
    <li class="nav-item active">
    <a class="nav-link" href="welcome.php">categories <span class="sr-only">(current)</span></a>
   
    
    
<div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </button>
            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                <li class="dropdown-item"><a href="#">Some action</a></li>
                <li class="dropdown-item"><a href="#">Some other action</a></li>
                <li class="dropdown-divider"></li>
                <li class="dropdown-submenu">
                  <a  class="dropdown-item" tabindex="-1" href="#">Hover me for more options</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a tabindex="-1" href="#">Second level</a></li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-item" href="#">Even More..</a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-item"><a href="#">3rd level</a></li>
                            <li class="dropdown-submenu"><a class="dropdown-item" href="#">another level</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="#">4th level</a></li>
                                <li class="dropdown-item"><a href="#">4th level</a></li>
                                <li class="dropdown-item"><a href="#">4th level</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-item"><a href="#">3rd level</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-item"><a href="#">Second level</a></li>
                    <li class="dropdown-item"><a href="#">Second level</a></li>
                  </ul>
                </li>
              </ul>
        </div>

  </div>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="">categories <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="">my cart <span class="sr-only">(current)</span></a>
    </li>
    
    <li class="nav-item active">
    <a class="nav-link" href="loggingout.php">Logout</a>
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

  
  
