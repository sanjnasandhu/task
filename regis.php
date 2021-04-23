<?php
	include ('adminheader.php');
?>

   	<hr>
	 <div class="row justify-content-center">
	  <div class="col-md-6">
	   <div class="card">
	    <header class="card-header">
		 <a href="loginpage.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
		  <h4 class="card-title mt-2">Sign up</h4>
	    </header>
	    <article class="card-body">
	     <form action="regisfunction.php" method="post" enctype="multipart/form-data">
	      
	       <div class="form-row">
		    <div class="col form-group">
			 <label>firstname </label>   
		  	 <input type="text" class="form-control" name="firstname" placeholder="" required="">
		   	 </div> <!-- form-group end.// -->

		    <div class="col form-group">
			 <label>lastname</label>
		  	  <input type="text" class="form-control" name="lastname" placeholder=" " required="">
		    </div> <!-- form-group end.// -->
           </div> <!-- form-row end.// -->

	        <div class="form-group">
		     <label>email</label>
		     <input type="email" class="form-control" name="email"  onkeydown = "return Check(event)" onpaste = "return false;" placeholder="username@outlook.com" required="">
		      <small class="form-text text-muted">We'll never share your email with anyone else.</small>
	        
	        </div> <!-- form-group end.// -->

		   <div class="form-group">
		     <label>phone</label>
		     <input type="number" class="form-control" placeholder="" pattern="/^-?\d+\.?\d*$/" onkeypress="if(this.value.length==10) return false;" name="phone"  required >
	
	       </div> 
	
	         <!--   <div class="form-group">
		     <label>username</label>
	         <input class="form-control" name="username" type="text">
	         </div>
             -->
	        <div class="form-group">
		     <label>gender:-</label><br>
              <label class="form-check form-check-inline">
		         <input class="form-check-input" type="radio" name="gender" value="male">
		         <span class="form-check-label"> Male </span>
		      </label>
		      <label class="form-check form-check-inline">
		         <input class="form-check-input" type="radio" name="gender" value="female">
		         <span class="form-check-label"> Female</span>
		      </label>
		      <label class="form-check form-check-inline">
		         <input class="form-check-input" type="radio" name="gender" value="others">
		         <span class="form-check-label"> others</span>
		      </label>
	        </div> 
	          <div class="form-row">  
		       <div class="form-group col-md-3">
		        <label for="country">Country</label> 
                  <input class="form-control" name="country" type="text">         
		      </div> 		     
		      <div class="form-group col-md-3"> 
		       <label for="state">State</label> 
		     	 <input class="form-control" name="state" type="text">
              </div> 
             <div class="form-group col-md-3"> 
              <label for="city">City</label> 
               <input class="form-control" name="city" type="text">
		     </div>  
		    </div>
		      
	        <div class="form-group">
		       <label>image</label>
		       <input type="file" name="image" accept="image/*" class="form-control" value="" placeholder="" required="">
	        </div>

	        <div class="form-group">
		      <label>password</label>
	          <input class="form-control" name="password"  minlength="8"  maxlength="12" type="password">
	        </div> <!-- form-group end.// -->  

            <div class="form-group">
               <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block"> Register  </button>
            </div> <!-- form-group// -->

              <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
          </form>
        </article> <!-- card-body end .// -->
           <div class="border-top card-body text-center">Have an account? <a href="loginpage.php">Log In</a></div>
      </div> <!-- card.// -->
    </div> <!-- col.//-->
   </div> <!-- row.//-->
  </div> <!--container end.//-->

  <?php
  include ('footer.php');
  ?>

