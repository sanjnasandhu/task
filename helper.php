<?php
class database
{
    var $host = "localhost";
    var $user = "root";
    var $pass = "redhat";
    var $dbname = "student";


   function connect() 
    {  
      $con=  mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
      return $con;
    }  

   function insert($post_data, $file_data)
    {

      $conn = $this->connect();

      $firstname = $post_data['firstname'];
      $lastname=$post_data['lastname'];
      $email = $post_data['email'];
      $phone = $post_data['phone'];

      $orgname=$file_data['image']['name'];
      $tempname=$file_data['image']['tmp_name'];
      $path = "images/".$orgname;
      move_uploaded_file($tempname, $path);

      $gender = $post_data['gender'];
      $country = $_POST['country'];
      $state = $_POST['state'];
      $city = $_POST['city'];
      $password = $post_data['password'];

      $qry= "INSERT  INTO form VALUES ('$firstname','$lastname','$email','$phone','$orgname','$gender','$country','$state','$city','$password','user')";
      mysqli_query($conn,$qry) or die("error in query" . mysqli_error($conn));
      $count=mysqli_affected_rows($conn);
      mysqli_close($conn);

      if($count==1)
      {
        return array('status' => 1, 'msg' => "data added successfully");
      }else{  
      return array('status' => 0, 'msg' => "data not added successfully"); 
      }
                
   }

 function select($email,$password)

       {

      $conn = $this->connect();
     // $email = $_SESSION['email'];
      $qry= "SELECT * FROM form WHERE email = '$email' AND password = '$password'";
      $result=$conn->query($qry);
      $res=mysqli_query($conn,$qry) or die("error in query" . mysqli_error($conn));
      $count=mysqli_affected_rows($conn);
      $data=mysqli_fetch_array($res);
     // print_r($data);
      //die();
      $usertype=$data[10];
       
      mysqli_close($conn); 

      if($count==1)
      {
      $_SESSION['email'] = $email;
      $_SESSION['usertype'] = $usertype;
       if ($usertype == admin){
       header ("location:admindashboard.php");
     }else if ($usertype == user){
      header ("location:adminheader.php");
      }
        //echo "login successful"; 
        //header ("location:welcome.php");  
      }
      else {
       echo "<script>alert('invalid email or password')</script>"; 
       include ("loginpage.php");
      }
      }        

    function userprofile()

     {
     $conn = $this->connect();
     $uname=$_SESSION['email'];
     $sql = "SELECT * FROM form WHERE email='$uname'"; 
     $result =  mysqli_query($conn,$sql) or die("error in query" . mysqli_error($conn));
     $row=mysqli_fetch_array($result);
     return $row;
     }   


  function update($post_data, $file_data)
      
      {
      $conn = $this->connect();

      $firstname=$post_data['firstname'];
      $lastname=$post_data['lastname'];
      $email = $post_data['email'];
      $phone = $post_data['phone'];
     /* $state = $_POST['state'];
      $country = $_POST['country'];*/
     

      
      $orgname=$file_data['image']['name'];
      $tempname=$file_data['image']['tmp_name'];
      $path = "images/".$orgname;
      move_uploaded_file($tempname, $path);

      $gender = $post_data['gender'];
      $country = $_POST['country'];
      $state = $_POST['state'];
      $city = $_POST['city'];
      $password = $post_data['password'];

      $qry= "UPDATE form set firstname='$firstname',lastname='$lastname',email='$email',phone='$phone',image='$orgname',gender='$gender',country='$country',state='$state',city='$city',password='$password' WHERE email='$email'";
     


      $res = mysqli_query($conn,$qry) or die("error in query" . mysqli_error($conn));
     
      $count=mysqli_affected_rows($conn);

      mysqli_close($conn);

      if($count==1)
      {
        header("location:welcome.php");
         echo '<script language="javascript">';
       echo 'alert(message successfully sent)';  //not showing an alert box.
      echo '</script>';
      exit;
      }
      else{ 
        echo "Problem while updating your data please try after sometime";
      }
  }


    function insertproduct($post_data, $file_data)
      { 
      /*echo '<pre>';
      print_r($_FILES);
      echo '</pre>';*/
      $conn = $this->connect();
      $name = $post_data['title'];

      $orgname=$file_data['image']['name'];
      $tempname=$file_data['image']['tmp_name'];
      $path = "images/".$orgname;
      move_uploaded_file($tempname, $path);

      $description = $post_data['description'];

      $qry = "INSERT INTO product VALUES('$name','$orgname','$description')";
   
      mysqli_query($conn,$qry) or die("error in query" . mysqli_error($conn));
      $count=mysqli_affected_rows($conn);
      mysqli_close($conn);

      if($count==1)
      {
        return array('status' => 1, 'msg' => "data added successfully");
      }else{  
      return array('status' => 0, 'msg' => "data not added successfully"); 
      }      
  

}   


}
?>
