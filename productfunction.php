<?php 
// ini_set('display_errors', '1');
//  ini_set('display_startup_errors', '1');
//  error_reporting(E_ALL);
 include ("helper.php");

 $obj = new database();
      // echo '<pre>';
      // print_r($_POST);
      // echo '</pre>';
      // die();
 if(isset($_POST['ADD']))
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
    if(isset($_POST['ADD BRAND']))
    {
      $res = $obj->insertbrand($_POST,$_FILES);
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