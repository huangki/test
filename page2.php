<html>
<?php
$con=mysqli_connect("127.0.0.1","root","1111","TDB");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM  REID");

while($row = mysqli_fetch_array($result))
  {
  echo $row['ii'] . "   " . $row['pp']."  ".  ;
  echo "<br />";
  }

mysqli_close($con);
?>
</html>