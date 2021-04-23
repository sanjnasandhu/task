<?php

	/*ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);*/

    include ("helper.php") ;
    
    $obj = new database();
    $rest = $obj->userprofile();
    include("show.php"); 
?>	