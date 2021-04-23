<?php
session_start();
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);

   include ("helper.php") ;
  	$obj = new database();
    $email = $_SESSION['email'] 
    ;
    if(isset($_POST['update']))
    {
        $obj->update($_POST, $_FILES);
     
   }
    ?>	