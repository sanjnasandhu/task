<?php
include("adminheader.php");
?>
<php
if ($usertype == admin){
       header ("location:admindashboard.php");
     }else if ($usertype == user){
      header ("location:adminheader.php");
      }

?>
