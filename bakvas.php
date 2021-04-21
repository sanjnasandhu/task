if(isset($_GET['id']))
{
$id=$_GET['id'];
$name =$_GET['name'];
$file =$_GET['file'];
$flavour =$_GET['flavour'];
$price =$_GET['price'];
$select="SELECT * FROM addcat WHERE id = '$id'";
$qry="UPDATE  addcat SET name='$_POST[name]',file='$_POST[file]',flavour='$_POST[flavour]',price='$_POST[price]' WHERE id = '$id'";

if($connect->query($qry)){
echo "updated";
header('location:update1.php');
}}
else{
echo " error ".$connect->error;
}
$connect=new mysqli('localhost','root','','student');