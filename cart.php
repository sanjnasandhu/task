<?php
session_start();
require_once 'config.php'
//add, remove, empty
if(!empty($_GET['action'])){
    switch($_GET['action']){
//add product to cart
case 'add':
    if(!empty($_POST['quantity'])){
        $pid = $_GET['pid'];
        $query -"SELECT * FROM products WHERE id=".$pid;
        $result = mysqli_query($con, $query);
        while($product = mysqli_fetch_array($result)){
            $itemArray = [
                $product['code'] => [
                    'name' => $product['name'],
                    'code' => $product['code'],
                    'quantity' => $_POST['quantity'],
                    'price' => $product['price'],
                    'image' => $product['image'],

                ]
                ];
                if(!empty($_SESSION['cart_item'])){
                    if(in_array($product['code'], array_keys($_SESSION['cart_item']))){
                        foreach ($_SESSION['cart_item'] as $key => $value){
                            if($product['code'] == $key){
                                if(empty($_SESSION['cart_item'][$key]["quantity"])){
                                    $_SESSION['cart_item'][$key]['quantity'] = 0;
                                }
                                $_SESSION['cart_item'][$'key']['quantity'] +=$_POST['quantity'];
                            }
                        }
                    }else{
                        $_SESSION['cart_item'] += $itemArray;
                    }
                }else{
                    $_SESSION['cart_item'] = $itemArray;
            }
        }
    }


}


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shopping cart</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    </head>
    <body>

<div class="container py-5">
<div class="d-flex justify-content-between mb-2">
<h3>cart</h3>
<a class="btn btn-danger" href="cart.php?action=empty">all item remove</a>
</div>
<div class="row">
 <table class="table">
 <tbody> 
       <tr>
           <th class="text-left">name</th>
           <th class="text-left">code</th>
           <th class="text-right">quantity</th>
           <th class="text-right">item price</th>
           <th class="text-right">price</th>
           <th class="text-center">remove</th>
        </tr>
        <?php
           foreach ($_SESSION['cart_item'] as $item){
               $item_price = $item['quantity'] * $item['price'];
               ?>
               <tr>
        <td class="text-left">
        <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" class="img-fluid" width="100">
        <?= $item['name'] ?>
        </td>
        <td class="text-left"><?= $item['code'] ?></td>
        <td class="text-right"><?= $item['quantity'] ?></td>
        <td class="text-right">rs<?= number_format($item['price'], decimal:2) ?></td>
        <td class="text-right">rs<?= number_format($item_price, decimal:2) ?></td>
        <td class="text-center">
        <a href="cart.php?action=remove" class="btn btn-danger">x</a>
</td>
</tr>

          <?php }


           ?>
        
</tbody>
</table>
</div>



<div class="row">
<div class="col-mid-12">
<h1>products list</h1>
<div class="d-flex">
<div class="card-deck">
<?php
$query ="SELECT *FROM products";
$product =mysqli_query($con, $query);
if(!empty($product)){
while($row = mysqli_fetch_array($products)){ ?>
<form action="cart.php?action=add&pid=<?= $row['id']; ?>" method="post">
<div class="card" style="width:18rem">
<img class="card-img-top"
src="<?=$row['image']; ?>"
alt="<?=$row['name']; ?>"
width="150">
<div class="card-header d-flex justify-content-between">
<span><?=$row['name']; ?></span>
<span>RS<?= number_format($row['price'], decimals:2); ?></span>
</div>
<div class="card-body d-flex justify-content-between">
<input type="text" name="quantity" value="1" size="2">
<input type="submit"  value="add to cart" class="btn btn-success btn-sm">
</div>
</div>
</form>
<?php }
}else{
    echo "no products available";
}
?>
</div>
</div>
</div>
</body>
</html>
