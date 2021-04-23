<?php
error_reporting(0);
session_start();
?>
	
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
		<div class="container">
		
		<h3 align="center">Shoping Cart </h3><br/>
		<br/><br/>
		<?php
		$connect = mysqli_connect("localhost", "root", "redhat", "student");
		$query = "SELECT * FROM brand ORDER BY bid ASC";
		$result = mysqli_query($connect, $query);
// 		echo '<pre>';
// print_r($query);
// echo '</pre>';
// die();
		if(mysqli_num_rows($result) > 0)
		{
		while($row = mysqli_fetch_array($result))
		{
		?>
		
		
		   <div class="col-md-3 float-left mb-2">
		<form method="post" action="">
		    <div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; margin-top:10px; padding:16px;" align="center">
		
		<img src="images/<?php echo $row["1"]; ?>" class="responsive-image" height="150px" width="210px"/>
 
		<h4 class="text-info"> </h4>
 
		<h4 class="text-danger"></h4>
	
		      <div class="row col-md-12 ml-3 ">
		
 
		<input type="number" name="quantity" id="quantity" value="1"  class="col-md-12 form-control text-center " />

              </div>
		<input type="hidden" name="hidden_name" value="" />
 
		<input type="hidden" name="hidden_price" value="" />
 
		 <button type="submit" name="add_to_cart" class="btn btn-success" value="Add to Cart" >submit</button>
		 
 
		    </div>
		      </form>
		    </div>
				<?php
		}
	}
		?>
				</div>
				</div>
		</div>
		</body>
   </html>