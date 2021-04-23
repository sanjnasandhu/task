<?php
	include('adminheader.php');
?>

	  
	    	<hr>
             <div class="row justify-content-center">
              <div class="card">
               <article class="card-body">
	            <form class="form-group" method="post" role="form" id="login" action="loginfunction.php">
	           	<header class="card-header">
		         <h4 class="card-title mt-2">LOGIN - HERE</h4>
		        </header>

		    		 <div class="form-group">
		               <label for="email"><b>email:-</b></label>
		                <input type="email" name="email" value=""  placeholder="" id="email" class="form-control" required/><br>
	                 </div>
                     <div class="form-group">
	                   <label><b>password:-</b></label>
		                <input type="password" name="password" value="" minlength="8"  maxlength="12" placeholder="" class="form-control" required/>
		                <br>
		               <div class="form-group">
                         <button type="login" name="login" value="login" class="btn btn-primary btn-block"> login </button>
                       </div> 
                       <a href="regis.php">Don't Have An Account..?!!!</a>
                     </div>
	            </form>
	           </article>
              </div>
             </div>
       
  <?php
  include ('footer.php');
  ?>


	   