 <?php
   
    $conn=mysqli_connect('localhost','root','redhat','student');
    // $state_id = $_POST["state_id"];
    $result = mysqli_query($conn,"SELECT * FROM brand");
     while($row = mysqli_fetch_array($result)) 
     {
 echo '<option value="'.$row['brand_name'].'">'.$row['brand_name'].'</option>';
     } 
?>