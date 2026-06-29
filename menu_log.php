<?php

session_start();
$usernm=$_POST['usernm'];
$pwd=$_POST['pwd'];
$_SESSION['usernm']=$usernm;

$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"tiffin");
$rs=mysqli_query($con,"select * from register");
$n=mysqli_num_rows($rs);
$res=0;
for($i=0;$i<$n;$i++)
{
    $row=mysqli_fetch_row($rs);
    if($row[0]==$usernm && $pwd==$row[1])
    {
       //echo" <h1>Login successful..";
       $res=1;
       header("location:menu1.php");

      
    }
}
    
if($res==0)
{
    echo" <h1>Login not successful..";
    echo"<a href=menu1_log.php>Sign in agin</a>";


}


mysqli_close($con);


?>