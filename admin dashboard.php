<html>
<head>
<title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>

 <div class="container">
  <div class="box">
 
        <div class="col-md-8 ">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" enctype="multipart/form-data">
                          <p>name</p>
                    <input type="text" name="name" value="" class="form-control"/> 
                    <p>file</p>
                    <input type="file" name="file" value="" class="form-control" />
					 
                    <p>price</p>
                    <input type="text" name="price" value="" class="form-control"/>
                   
                    <input type="submit" name="submit" value="submit" />
</form><?php
error_reporting(0);
$connect=new mysqli('localhost','root','','student')or die("unable to connect");
if(isset($_POST['submit'])){
	$name=$_POST['name'];
        $orgname=$_FILES['file']['name'];
		 $tmpname=$_FILES['file']['tmp_name'];
		 $path="images/".$orgname;
		move_uploaded_file($tmpname,$path);
    
   $price=$_POST['price'];
   $qry="INSERT INTO addcat1(name,file,price)VALUES('$name','$orgname','$price')";
   mysqli_query($connect,$qry)or die(mysqli_error($connect).$qry);
   
  
    
}
?>
        </div>

</body>
</html>