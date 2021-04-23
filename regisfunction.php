<?php
/*ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
*/

  
include ("helper.php");

$obj = new database();
    
if(isset($_POST['submit']))
{
  
  $rest = $obj->insert($_POST, $_FILES);
   
  if($rest['status'] == 1)
  {
    //echo $rest['msg'];
    $_SESSION['msg'] = 'Registration has been completed successfully.';
    header ("location:loginpage.php");
  }
  else{
    echo $rest['msg'];
  }

}

    ?>	