<?php
session_start();
$rs= $_SESSION['res'];
$rno=$_GET["rno"];
echo $rno;//1 col  1 value
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"tiffin");
/*$sql="SHOW TABLES";
$rs=mysqli_query($con,$sql);*/
$ans="SHOW COLUMNS FROM $rs";

$rs2=mysqli_query($con,$ans);

$final=mysqli_fetch_row($rs2);
echo "<br>$final[0]";//name
echo"<br> $rs";//table name
$col=$final[0];
$rs1=mysqli_query($con,"delete from $rs where $col='$rno'");

if(!$rs1){
    echo"no";
}
header("location:adm.php?rno=$rs");
?>