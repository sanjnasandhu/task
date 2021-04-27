<?php
include ('adminheader.php');
include('style.css');
?>
<?php

if(isset($_POST["add_to_cart"]))
{
  if(isset($_SESSION["shopping_cart"]))
  {
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if(!in_array($_GET["id"], $item_array_id))
    {
      $count = count($_SESSION["shopping_cart"]);
      $item_array = array(
        'item_id'     =>  $_GET["id"],
        'item_name'     =>  $_POST["hidden_name"],
        'item_price'    =>  $_POST["hidden_price"],
        'item_quantity'   =>  $_POST["quantity"]
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
      'item_id'     =>  $_GET["id"],
      'item_name'     =>  $_POST["hidden_name"],
      'item_price'    =>  $_POST["hidden_price"],
      'item_quantity'   =>  $_POST["quantity"]
    );
    $_SESSION["shopping_cart"][0] = $item_array;
  }
}
?>
	
		<br/>
		
		
		<h3 align="center">Shoping Cart </h3><br/>
		
		<?php

			$bid = $_GET['bid'];
			error_reporting(0);
            
			$connect = mysqli_connect("localhost", "root", "redhat", "student");
			
			$query = "SELECT * FROM product WHERE `bid`=".$bid;
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_array($result))
				{
			?>
			
<div class="boxsize">
 <form method="post" action="">	
  <div class="row-md-3 float-left mb-2">
   <img src="images/<?php echo $row["2"]; ?>" class="responsive-image" height="150px" width="210px"/>
    <h6 class="text-info"><?php echo $row["name"]; ?></h6>
    <h6 class="text-danger">RS<?php echo $row["RS"]; ?></h6>
    <div class="row col-md-12 ml-3 ">
		
 
		<input type="number" name="quantity" id="quantity" value="1"  class="col-md-12 form-control text-center " />
		 </div><br>
		 <div class="row-md-3 float-right mb-2 ">
		 <button type="submit" name="add_to_cart" class="btn btn-success" value="Add to Cart" >ADD TO CART</button>
		  <button type="submit" name="add_to_cart" class="btn btn-danger" value="Add to Cart" >BUY NOW</button>
		</div>

             
    
  </div>
 </form>
</div>			    

	<?php
 	}
	}
	?>
</body>
</html>
