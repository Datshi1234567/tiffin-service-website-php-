<?php
$name=$_GET['name'];
$phone=$_GET['mobile'];
$email=$_GET['email'];
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"tiffin");
$rs=mysqli_query($con,"insert into userdetails values('$name',$phone,'$email')");
mysqli_close($con);
header("location:otp.html");
?>