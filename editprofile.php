 <?php
	include ("header.php");
	include ("selectdata.php");
	
 ?>


  	<div class="row justify-content-center">
     <div class="col-md-6">
      <div class="card">
	   <h4 class="card-title mt-2"  align="center">update profile</h4>
        <article class="card-body">
         <form action="updateprofile.php" method="post" enctype="multipart/form-data">
	      <div class="form-row">
		   <div class="col form-group">
			<label>Firstname </label>   
		  	<input type="text" class="form-control" name="firstname" value="<?php echo  $data['firstname'];?>" placeholder="" >
		   </div> <!-- form-group end.// -->

		   <div class="col form-group">
			<label>Lastname</label>
		  	<input type="text" class="form-control" name="lastname" value="<?php echo  $data['lastname'];?>" placeholder=" " >
		   </div> <!-- form-group end.// -->
	      </div> <!-- form-row end.// -->

	       <div class="form-group">
		    <label>Email</label>
		    <input type="email" class="form-control" name="email" value="<?php echo  $data['email'];?>" placeholder="username@outlook.com" >
		    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
	       </div> <!-- form-group end.// -->
	       
		   <div class="form-group">
		    <label>Phone</label>
		    <input type="tel" class="form-control" placeholder="" value="<?php echo  $data['phone'];?>" name="phone" pattern="[0-9]{10}"  minlength="10" maxlength="10" >
	       </div> 

	       <div class="form-group">	
	    	<label>gender</label><br>
		     <label class="form-check form-check-inline">
		      <input  type="radio" class="form-check-input" <?php if($data['gender']=="Male"){ echo "checked";} ?> value="Male"  name="gender" >
		      <span class="form-check-label"> Male </span>
		     </label>
		     <label class="form-check form-check-inline">
		      <input type="radio" class="form-check-input" <?php if($data['gender']=="Female"){ echo "checked";} ?>  name="gender" value="Female">
		      <span class="form-check-label"> Female</span>
		     </label>
		     
		     <label class="form-check form-check-inline">
		      <input class="form-check-input" type="radio" <?php if($data['gender']=="Others"){ echo "checked";} ?>  name="gender" value="Others" >
		      <span class="form-check-label"> Others</span>
	          </label>	      
           
           </div>

	       <div class="form-row">
		    <div class="form-group col-md-3">
		     <label for="country">Country</label>
               <input class="form-control" name="country" value="<?php echo  $data['country'];?>" type="text"> 
		    </div> 
		   <div class="form-group col-md-3">
		    <label for="state">State</label> 
	         <input class="form-control" name="state"  value="<?php echo  $data['state'];?>" type="text">
           </div>
           <div class="form-group col-md-3"> 
            <label for="city">City</label> 
            <input class="form-control" name="city" value="<?php echo  $data['city'];?>" type="text">
		    </div>
		   </div> 

	        <div class="form-group">
		     <label>Image</label>
		      <input type="file" name="image" class="form-control" value ="<?php echo $data['image'];?>" placeholder="" required="">
	        </div>

	        <div class="form-group">
		     <label>Password</label>
	          <input class="form-control" name="password" value="<?php echo  $data['password'];?>" type="password">
	        </div> <!-- form-group end.// -->  

            <div class="row">
             <div class="col">
              <button name="update" value="update" type="submit" class="btn btn-primary ml-10">UPDATE</button>
            </div>
                 
            <div class="col-md-2">
             <a href="welcome.php" class="btn btn-primary ml-10">EXIT</a>
            </div>
            </div>
              
            </div> <!-- form-group// --> 

              <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
         </form>
        </article> <!-- card-body end .// --> 
       </div> <!-- card.// -->
      </div> <!-- col.//-->
     </div> <!-- row.//-->
    </div> <!--container end.//--> 

  <?php
  include ('footer.php');
  ?>

