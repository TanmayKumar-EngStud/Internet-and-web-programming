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
$sql="SELECT *FROM mobile_details where numbr LIKE '%567'";
$result=mysqli_query($con,$sql);
echo "<table border='3' >";
while($row = mysqli_fetch_array($result))
{
//printf ("%s (%s)\n", $row[0], $row[1]);
echo"<tr><td>"."Mobile
number"."</td>"."<td>"."Date"."</td>"."<td>"."Amount"."</td></tr>";
echo "<tr><td>".$row[0]."</td>"."<td>". $row[1]."</td>"."<td>".$row[2]."</td></tr>";
}
echo "</table>";
mysqli_free_result($result);
mysqli_close($connection);
?>
</body>

</html>