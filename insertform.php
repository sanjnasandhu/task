<?php
include("style.css");
?>

<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<section class="get-in-touch">
   <h1 class="title">ADD PRODUCT</h1>
   <form class="contact-form row" method="post" action="productfunction.php" enctype="multipart/form-data">
      <div class="form-field col-lg-6">
         <input id="name" name="name" class="input-text js-input" type="text" required>
         <label class="label">Name</label>
      </div><br>

      <div class="form-field col-lg-6">
        
         <select name ="id" class="input-text" required>
            <option>Select category</option>
         <?php
         include('category.php');
         // include ('bname.php');
         ?>
         </select>
      </div>
     
      <div class="form-field col-lg-6">
        
         <select name ="brandid" class="input-text" required>
            <option>Select Brand</option>
         <?php
         include('selectbrand.php');
         // include ('bname.php');
         ?>
         </select>
      </div>
       <!-- <div class="form-field col-lg-6 ">
         <input class="input-text js-input" type="text" required>
         <option>select category</option>
      </div> -->
       <div class=" col-lg-6 ">
            <label class="input-text js-input">image </label>
         <input class="input-text js-input" name="image" type="file" required>
           </div>

           <div class="form-field col-lg-6">
         <input name="price" class="input-text js-input" type="text" required>
         <label class="label">price</label>
      </div>

      
      <div class="form-field col-lg-12">
         <input class="submit-btn" name="ADD" type="submit" value="Submit">
      </div>
   </form>
</section>
</html>