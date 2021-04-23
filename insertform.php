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
   <h1 class="title">Get in touch</h1>
   <form class="contact-form row" method="post" enctype="multipart/form-data">
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Name</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="email" required>
         <label class="label" for="email">E-mail</label>
      </div>
      <div class="form-field col-lg-6 ">
         <select name ="brand" class="input-text" required>
            <option>Select Brand</option>
         <?php
         include('selectbrand.php');
         ?>
         </select>
      </div>
       <div class=" col-lg-6 ">
            <label class="input-text js-input">image </label>
         <input class="input-text js-input" type="file" required>
           </div>
      <div class="form-field col-lg-12">
         <input id="message" class="input-text js-input" type="text" required>
         <label class="label" for="message">Message</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
</section>
</html>