<?php
$usernm=$_POST['usernm'];
$pwd=$_POST['pwd'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"tiffin");
$rs=mysqli_query($con,"insert into register values('$usernm',$pwd)");
mysqli_close($con);
header("location:signup_done.php");
?>