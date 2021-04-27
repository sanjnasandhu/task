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
   <h1 class="title">ADD BRAND</h1>
   <form class="contact-form row" method="post" action="productfunction.php" enctype="multipart/form-data">
      
     
      <div class="form-field col-lg-6">
                    <label class="input-text js-input">Brand_Name</label>
         <input class="input-text js-input" name="brand_name" type="text" required>
           </div>
        
      </div>
       <!-- <div class="form-field col-lg-6 ">
         <input class="input-text js-input" type="text" required>
         <option>select category</option>
      </div> -->
       <div class="form-field col-lg-6 ">
            <label class="input-text js-input">image </label>
         <input class="input-text js-input" name="image" type="file" required>
           </div>
      
      <div class="form-field col-lg-12">
         <input class="submit-btn" name="ADD BRAND" type="submit" value="Submit">
      </div>
   </form>
</section>
</html>