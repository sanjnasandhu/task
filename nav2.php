
<?php
include("adminheader.php");
?>

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
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         products
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <li ><a class="dropdown-item" href="showbrand.php">skin-care</a>
           <!--  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-submenu"><a  class="dropdown-item dropdown-toggle" href="#">brands</a>
              <li class="dropdown-submenu"><a class="dropdown-submenu" href="#">moisturizer</a></li>
              <li class="dropdown-submenu"><a class="dropdown-submenu" href="#">sunscreen</a></li>
              <li class="dropdown-submenu"><a class="dropdown-submenu" href="#">face-oil</a></li> -->
          </li>
         
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">fashion-wear</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">men's wear</a></li>
              <li><a class="dropdown-item" href="#">woman's wear</a></li>
              <li><a class="dropdown-item" href="#">baby's wear</a></li>
          </ul>
      </li>

      	<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">electronics</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">computer</a></li>
              <li><a class="dropdown-item" href="#">mobiles</a></li>
              
          </ul>
      </li>
              </ul>


              <!-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                  <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                  <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                </ul>
              </li> -->
              


      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">profile</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>




