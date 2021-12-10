<!DOCTYPE html>
<html>

<body>
  <?php
$servername="localhost";
$username="tanmay";
$password="tanmayDB";
$database="IWP";
$con = new mysqli($servername,$username,$password,$database);
if (!$con)
{
die('Could not connect: ' . mysqli_connect_error());
}
else{
 echo "Success ";
 echo"<br>";
}
$sql="DELETE FROM `mobile_details` WHERE `numbr`=12345";
if (mysqli_query($con,$sql))
{
echo "Record deleted successfully";
}
else
{
echo "Error in deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>

</body>