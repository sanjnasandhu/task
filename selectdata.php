<?php
 session_start();
 if(!isset($_SESSION['email']))
{
  header('location:loginpage.php');
}
 $email = $_SESSION['email'];
 $con=mysqli_connect('localhost', 'root','redhat','student');

  
$sql = "SELECT * FROM form WHERE email='$email'";
$res= mysqli_query($con,$sql) or die("error in query" . mysqli_error($con));
$data = mysqli_fetch_array($res);

  ?>