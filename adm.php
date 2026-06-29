<?php
session_start();
$r1=$_GET['rno'];
//$ress=$_GET['rno'];
$_SESSION['res']=$_GET['rno'];
$ress=$_SESSION['res'];
//echo"$res<br>";
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"tiffin");
$sql="SHOW COLUMNS FROM $ress";
$rs=mysqli_query($con,$sql);

$ans=mysqli_query($con,"select *from $ress");
$n=mysqli_num_rows($rs);
$m=mysqli_num_rows($ans);

if($n!=0){
  
    echo"<h1>Columns in table $ress:<br><br>";
    echo"<table border='10' style='width: 890px; border-collaspse:collapse; table-layout:fixed;'  >";
   
    for($l=0;$l<$n;$l++){   
       
        $res=mysqli_fetch_row($rs);
        echo"
        <td><h1>$res[0]";
   
    }echo"</table>";
    echo"<table border='10' style='width: 1500px;' >";
    
  /*  for($l=0;$l<$n;$l++){   
       
        $res=mysqli_fetch_row($rs);
        
        echo"$res[0]";
   
    }*/
      
    
    for($j=0;$j<$m;$j++)
    
   { 
       $res1=mysqli_fetch_row($ans);
       echo"<tr>";
     
    
    for($i=0;$i<$n;$i++)
{

  
  
    for($k=$i;$k>=$i;$k--){
       
         
            echo"
            <td><h1>$res1[$k]"
            ;
          
    }
   

  
      
    
} echo" <td><a href='del.php?rno=$res1[0]'>DELETE RECORD</a>";
echo" <td><a href='update.php?rno=$res1[0]'>UPDATE RECORD</a>";
}
echo"<tr><td colspan=6 align='center'><a href='insert.php?rno=$res1[0]'>INSERT RECORD</a>";
}






?>
