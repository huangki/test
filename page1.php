<html>
 <body>
 
�m�W: <?php  echo $_GET["id"];
              $d =$_GET["id"]; ?> 123123<br>
�K�X:<?php  echo  $_GET["pass"]; 
$s=$_GET["pass"];?><br>
�m�W:<?php echo           $_GET["nn"]; 
$a=$_GET["nn"]?><br>
�l��:<?php echo           $_GET["mail"]; 
$m=$_GET["mail"];?><br>
�q��:<?php echo           $_GET["tel"]; 
$t= $_GET["tel"];?><br>
¾�~:<?php echo           $_GET["job"]; 
$j=$_GET["job"];  ?> 
</body>
<br>  <input name="Submit" type="button"  onClick="history.back()" value="�^�@�W��" /> 
<?php
$con=mysqli_connect("127.0.0.1","root","1111","TDB");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO  REID (ii,pp,n,mm,tt,jj)
VALUES ( '$d' ,  '$s',  '$a',' $m','$t','$j')");

mysqli_close($con);
?>
<a href="page2.php">�d�߸�Ʈw</a>
</html>