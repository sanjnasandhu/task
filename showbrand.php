<?php
include ('adminheader.php');
include('style.css');
?>
	
		<br/>
		
		
		<h3 align="center">brand </h3><br/>
		
		<?php
			error_reporting(0);
			$connect = mysqli_connect("localhost", "root", "redhat", "student");

			$query = "SELECT * FROM brand ORDER BY bid ASC";
			$result = mysqli_query($connect, $query);

			// $result = mysqli_fetch_assoc($result);
			// echo '<pre>';
			// print_r($result);
			// echo '</pre>';
			// die();

			if (mysqli_num_rows($result) > 0)
			{
			    while ($row = mysqli_fetch_assoc($result))
			    {
			?>
			 <div class="brand">

				<form method="post" action="">	
			 	<div class="row-md-3 float-right mb-2">
					
					   
				   	
				   		<a  href="products.php?bid=<?php echo $row["bid"]; ?>"> <img src="images/<?php echo $row["image"]; ?>" class="responsive-image" height="150px" width="230px"/>
				   		</a>
			     
					</div>
				</div>		
				</form>
				
							<?php
			    }
			}
			?>
	</body>
</html>
