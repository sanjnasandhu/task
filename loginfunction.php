<?php

		/*ini_set('display_errors', '1');
		ini_set('display_startup_errors', '1');
		error_reporting(E_ALL);*/

         session_start();
	     include "helper.php";

			/*echo '<pre>';	
			print_r($_POST);
			echo '</pre>';
			die();
			*/
			

	    $obj = new database();

	    if(isset($_POST['login']))
        {
	
			$email = $_POST['email'];
			$password=$_POST['password'];

			$obj->select($email,$password);
			
	    }
	?>	