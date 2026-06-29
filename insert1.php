<?php
session_start();
$rs= $_SESSION['res'];//table name
$rno=$_SESSION['rno'];
//echo $rno;
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"tiffin");
$ans1="SHOW COLUMNS FROM $rs";
$rs2=mysqli_query($con,$ans1);
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
       echo"iteration:$l";
   /* echo "<br>$f";
    echo"MAIN:$main";*/
    echo "$rs($f)";
    
    $q="INSERT INTO  $rs($f) VALUES(`$a`)";

    $ans_final=mysqli_query($con,$q);
   /* echo "<br>$f";
    echo"<br>MAIN:$main";
    echo "<br>con:$rno";
    echo"<br>new:$a";
    echo "<br>col:$f";

    echo "<br>table:$rs";
    $ans=mysqli_query($con,$q);
    if($ans){
           echo"<br>yes";
    }*/
    if($ans_final){
        echo"<br>yes";
 }

}
//$q="INSERT into $rs($f) values('$a')";
//$ans=mysqli_query($con,$q);
  
//$ans=mysqli_query($con,"update $rs set $res5[0]='$a' where  $res5[0]=$rno");
?>