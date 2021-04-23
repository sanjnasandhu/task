<?php
include("header.php");
?>
 <div class="row justify-content-center">
   <div class="card">
       <header class="card-header">
 <h4 class="card-title mt-2">product details</h4>
</header>
<article class="card-body">
            <form class="form-group" method="post" enctype="multipart/form-data"  action="productfunction.php">
                      
              
               <div class="form-group">
                  <label><b>Name:-</b></label>
                  <input type="text" name="title" class="form-control" required/>
               </div>

              <div class="form-group">
                  <label><b>Image:-</b></label>
                  <input type="file" name="image" class="form-control" required/>
               </div>
               
               <div class="form-group">
                  <label><b>Description:-</b></label>
                  <textarea class="form-control rounded-0" type="text" name="description" rows="5"></textarea>
               </div>
                  
               <div class="form-group">
               <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block"> submit  </button>
              </div>
                  
               </div>
            </form>
         </article>
         </div>
      </div>