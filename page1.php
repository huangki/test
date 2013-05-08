<html>
 <body>
 
姓名: <?php  echo $_GET["id"];
              $d =$_GET["id"]; ?> 123123<br>
密碼:<?php  echo  $_GET["pass"]; 
$s=$_GET["pass"];?><br>
姓名:<?php echo           $_GET["nn"]; 
$a=$_GET["nn"]?><br>
郵件:<?php echo           $_GET["mail"]; 
$m=$_GET["mail"];?><br>
電話:<?php echo           $_GET["tel"]; 
$t= $_GET["tel"];?><br>
職業:<?php echo           $_GET["job"]; 
$j=$_GET["job"];  ?> 
</body>
<br>  <input name="Submit" type="button"  onClick="history.back()" value="回一上頁" /> 
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
<a href="page2.php">查詢資料庫</a>
</html>