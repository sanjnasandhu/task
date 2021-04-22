<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart </title>
		
		<script src="jquery.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" 
		crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" 
        crossorigin="anonymous"></script>
	</head>
	
	<body>
	
		<br/>
		
		
		<h3 align="center">Shoping Cart </h3><br/>
		
		<?php

			$bid = $_GET['bid'];
			error_reporting(0);
            
			$connect = mysqli_connect("localhost", "root", "redhat", "student");
			$query = "SELECT * FROM categories WHERE `bid`=".$bid;
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_array($result))
				{
			?>
			
					<form method="post" action="">	
						<div class="row-md-3 float-right mb-2">
								
								
						   	<div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; margin-top:10px; height: 150px;width: 210px; float: left; margin-left: 50px; padding:16px;" align="center">
						    	<img src="images/<?php echo $row["2"]; ?>" class="responsive-image" height="150px" width="210px"/>
					     
							</div>
						</div>
					  </form>
			    
					<?php
				}
			}
		?>
		</body>
   </html>
