<!DOCTYPE html>
<html>
	<head>
		<title>brand </title>
		
		<script src="jquery.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity=
		"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" 
		crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" 
        crossorigin="anonymous"></script>
	</head>
	
	<body>
	
		<br/>
		<div class="container">
		
		<h3 align="center">brands </h3><br/>
		<br/><br/>
		<?php
			error_reporting(0);
		$connect = mysqli_connect("localhost", "root", "", "student");
	     
		$query = "SELECT * FROM brand  ORDER BY bid ASC";
		$result = mysqli_query($connect, $query);
		if(mysqli_num_rows($result) > 0)
		{
		while($row = mysqli_fetch_array($result))
		
		{
		?>
         <div class="col-md-3 float-left mb-2">
		<form method="post" action="shopping cart.php?action=add&id=<?php echo $row["id"]; ?>">
		    <div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; margin-top:10px; padding:16px;" align="center">
           <a href="product.php?pi='id'"><img src="images/<?php echo $row["1"]; ?>" class="responsive-image" height="150px" width="210px"/>
 
</div>
		      </form>
		    </div>
			<?php
		}
	}
		?>
            </body>
            </html>