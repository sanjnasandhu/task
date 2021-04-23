<?php 
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
 include ("helper.php");

 $obj = new database();


if(isset($_POST['submit']))
  {
   $res = $obj->insertproduct($_POST,$_FILES);
   if($res['status'] ==1)
   {
   	echo $res['msg'];
   }
   else
   {
   	echo $res['msg'];
   }
  }
 ?>