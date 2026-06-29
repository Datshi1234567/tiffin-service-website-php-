<?php
session_start();
$rs= $_SESSION['res'];//table name
$rno=$_GET["rno"];//1 col 1 value
$_SESSION['rno']=$rno;
//echo $rno;
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"tiffin");

$ans="SHOW COLUMNS FROM $rs";
$rs2=mysqli_query($con,$ans);
$num=mysqli_num_rows($rs2);
//echo"<h1>NO of columns:$num";

//echo $abc[0];
/*$rs3=mysqli_query($con,"select *from $rs where $abc[0]='$rno'" );

$res6=mysqli_fetch_row($rs3);
mysqli_data_seek($rs2,0);*/
/*echo $r[0];
echo $rs;
echo $rno;
$res6=mysqli_fetch_row($rs3);*+**
echo "<br>$res6[0]";
echo "<br>$res6[1]";
echo "<br>$res6[2]";
echo "<br>$num";*/
$l=0;

//echo "<h1>$r[0]";
echo"<html>
<body>
  <table border='10'>
<form action='insert1.php'>";
for($l=0;$l<$num;$l++){   
       
        $res5=mysqli_fetch_row($rs2);
       // $rs3=mysqli_query($con,"select *from $rs where $res5[0]=$rno" ); 
        //$res6=mysqli_fetch_row($rs3);
		echo"<tr>
			<td><h1>$res5[0]
			<td><h1>:
			<td><h1><input type='$res5[1]' name='{$res5[0]}' >
			<tr>";
}

			echo"</table><input type='submit' name='submit' >
			</form>
  </body>
  </html>";
//header("location:adm.php?rno=$rs");
?>