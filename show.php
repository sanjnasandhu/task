<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title" align="center">USER PROFILE</h3>
    </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center" ><td> <?php echo "<img src='images/$rest[4]'  height='200px' width='200px'>"; ?> </td></div> 
                  <div class=" col-md-6 col-lg-9 "> 
                    <table class="table table-user-information">
                      <tbody>
                        <tr>
                          <td>firstname:</td>
                          <td> <?php echo $rest[0];?></td>
                        </tr>
                        <tr>
                          <td>lastname:</td>
                          <td> <?php echo $rest[1];?></td>
                        </tr>
                        <tr>
                          <td>email</td>
                          <td> <?php echo $rest[2];?></td>
                        </tr>
                        <tr>
                          <td>Phone Number</td>
                          <td><?php echo $rest[3]; ?></td>
                        </tr>
                        <tr>        
                          <td>Gender</td>
                          <td> <?php echo $rest[5];?></td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="col-md-12 bg-light text-right">
                      <a href="editprofile.php" class="btn btn-primary">Edit Profile</a>
                        
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <?php
  include ('footer.php');
  ?>
  <!-- <?php

// session_start();

// if(!isset($_SESSION['email']))
// {
//   header('location:loginpage.php');
// }
// $uname=$_SESSION['email'];
// echo "Personal Details<br>";


//   	echo "Firstname:- $x[0]<br>";
//   	echo "Lastname:- $x[1]<br>";
//   	echo "Email Id:- $x[2]<br>";
//   	echo "Phone:- $x[3]<br>";
//   	/*echo "State:- $x[4]<br>";
//   	echo "Country:- $x[5]<br>";
//   	echo "Hobbies:- $x[6]<br>";
//   	echo "Age:- $x[7]<br>";*/
//   	echo "<img src='images/$x[4]' width='100px'<br><br>";
//   	echo "Gender:- $x[5]<br>";
//   	echo "Password:- $x[6]<br>";
                  
?> 
<!-- <button><a href="">update</a></button>
<button><a href="">change password</a></button>
<button><a href="">logout</a></button> -->
<!-- 
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">user profile details
                     <hr></h1>
                     
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>firstname</th>
                                            <th>lastname</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>image</th>
                                            <th>gender</th>
                                            <th>password</th>
                                        </tr>
                                    </thead>
                                    <tr class="even gradeA">
                                      <td> <?php #echo $rest[0];?></td>
                                       <td> <?php #echo $rest[1];?></td>
                                        <td> <?php #echo $rest[2];?></td>
                                         <td> <?php #echo $rest[3];?></td>
                                          <td> <?php #echo "<img src='images/$rest[4]' height='50px' width='100px'>"; ?></td>
                                           <td> <?php #echo $rest[5];?></td>
                                            <td> <?php# echo $rest[6];?></td>
             </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>

</html>








 <button><a href="editprofile.php">update</a></button>
<button><a href="loggingout.php">logout</a></button>
</form>  -->

