<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"tiffin");
$sql="SHOW TABLES";
$rs=mysqli_query($con,$sql);
$n=mysqli_num_rows($rs);
$res=0;
if($n!=0){
    echo"<h1>Tables in databse 'tiffin':<br><br>";
    for($i=0;$i<$n;$i++)
{
    $res=mysqli_fetch_row($rs);
    //echo"<h1><br>$res[0]";
    echo"<br><td><a href='adm.php?rno=$res[0]'>$res[0]</a>";
}
}
else{
    echo"<h1>NO TABLES IN DATABASE 'tiffin'";
}

?>