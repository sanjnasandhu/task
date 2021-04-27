<?php
error_reporting(0);
session_start();
$connect = mysqli_connect("localhost", "root", "redhat", "student");
 
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["bid"], $item_array_id))
		{
		$count = count($_SESSION["shopping_cart"]);
		$item_array = array(
		'item_id'		=>	$_GET["id"],
		'item_name'		=>	$_POST["hidden_name"],
		'item_price'		=>	$_POST["hidden_price"],
		'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
		echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
		'item_id'		=>	$_GET["id"],
		'item_name'		=>	$_POST["hidden_name"],
		'item_price'		=>	$_POST["hidden_price"],
		'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
 
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
		if($values["item_id"] == $_GET["id"])
		{
		unset($_SESSION["shopping_cart"][$keys]);
		echo '<script>alert("Item Removed")</script>';
		echo '<script>window.location="shopping cart.php"</script>';
		}
		}
	}
}
 
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
		error_reporting(0);
		$query = "SELECT * FROM categories ORDER BY id ASC";
		
		$result = mysqli_query($connect, $query);
		if(mysqli_num_rows($result) > 0)
		{
		while($row = mysqli_fetch_array($result))
		{
		?>
		
		
		   <div class="col-md-3 float-left mb-2">
		<form method="post" action="gfjfddfgf.php?action=add&id=<?php echo $row["id"]; ?>">
		    <div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; margin-top:10px; padding:16px;" align="center">
		
		<img src="images/<?php echo $row["2"]; ?>" class="responsive-image" height="150px" width="210px"/>
 
		<h4 class="text-info"><?php echo $row["name"]; ?></h4>
 
		<h4 class="text-danger">rs <?php echo $row["RS"]; ?></h4>
	
		      <div class="row col-md-12 ml-3 ">
		
 
		<input type="number" name="quantity" id="quantity" value="1"  class="col-md-12 form-control text-center " />

              </div>
		<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
 
		<input type="hidden" name="hidden_price" value="<?php echo $row["RS"]; ?>" />
 
		 <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
		 
 
		    </div>
		      </form>
		    </div>
				<?php
		}
	}
		?>
		<div style="clear:both"></div>
 <br />
  <?php
 if(!empty($_SESSION["shopping_cart"]))
 {
 $total = 0;
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 ?>
 <tr>
 <td><?php echo $values["name"]; ?></td>
 <td><?php echo $values["item_quantity"]; ?></td>
 <td>$ <?php echo $values["RS"]; ?></td>
 <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
 <td><a href="index.php?	 ?>"><span class="text-danger">Remove</span></a></td>
 </tr>
 <?php
 $total = $total + ($values["item_quantity"] * $values["item_price"]);
 }
 ?>
 <tr>
 <td colspan="3" align="right">Total</td>
 <td align="right">$ <?php echo number_format($total, 2); ?></td>
 <td></td>
 </tr>
 <?php
 }
 ?>
 </tr>
 </div>
</div>
</div>
</body>
</html>