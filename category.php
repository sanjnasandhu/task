 <?php
   
    $conn=mysqli_connect('localhost','root','redhat','student');
    // $state_id = $_POST["state_id"];
    $result = mysqli_query($conn,"SELECT * FROM categories");
     while($row = mysqli_fetch_array($result)) 
     {
 echo '<option value="'.$row['id'].'">'.$row['category'].'</option>';
     } 
?>