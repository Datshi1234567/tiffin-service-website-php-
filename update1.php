<?php
session_start();
$rs= $_SESSION['res'];//table name
$rno=$_SESSION['rno'];
//echo $rno;
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"tiffin");
$ans="SHOW COLUMNS FROM $rs";
$rs2=mysqli_query($con,$ans);
$num=mysqli_num_rows($rs2);
$res5=mysqli_fetch_row($rs2);
$main=$res5[0];
//echo"MAIN:$main";
mysqli_data_seek($rs2,0);
for($l=0;$l<$num;$l++){   
    $res5=mysqli_fetch_row($rs2);
    $a=$_GET[$res5[0]];
   // echo"<br>$a";
   // $f=$_GET[$res5[0]];
    //echo $f;
    $f=$res5[0];
   /* echo "<br>$f";
    echo"MAIN:$main";*/
    $q="UPDATE $rs SET $f='$a' WHERE  $main=$rno";
    $ans=mysqli_query($con,$q);
    if($ans){
           echo"<br><h1>DATA UPDATED SUCCESSFULLY!!";
    }
}
header("location:adm.php?rno=$rs");
?>