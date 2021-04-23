<?php
include ("adminheader.php");

echo "<br>";
if ($_SESSION['email'])
{

include('showprofilefunc.php');
}
else
{
	header('location:loginpage.php');
}
?>
