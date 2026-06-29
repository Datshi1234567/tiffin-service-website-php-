<?php
$id=$_POST['id'];
$name=$_POST['name'];
$pwd=$_POST['pwd'];

$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"tiffin");
$rs=mysqli_query($con,"select * from admin_info");
$n=mysqli_num_rows($rs);
$res=0;
for($i=0;$i<$n;$i++)
{
    $row=mysqli_fetch_row($rs);
    if($row[0]==$id && $row[1]==$name && $row[2]==$pwd)
    {
       echo" <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='style.css'>
    <link rel='stylesheet' href='menu.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css'>
    <title>Yummy Tiffin</title>
</head>
<body>
    <header></header>
     
        <ul class='navbar'>
        <img src ='logo.png'>
       
   
     <li> <a href='submit.html' class='link'>Home</a></li>
        <li> <a href='about.html' class='link'>About</a></li>
        <li> <a href='menu_main.ph' class='link'>Menu</a></li>
        <li> <a href='contact.html' class='link'>Contact</a></li>
        <li> <a href='signin.html' class='link'>Sign in</a></li>
        </ul>

        </li>
        <div class='men1'>
            <br>
            <br>
            <h1>Congratulations!!Login successfull!!</h1>
            <form action='database.php'>
            <h1>View Database:<button type='submit' name=button style='height: 45px; width:150px; font-size:18px;'>Click here</button>
            <br>
          
        </div>
</body>
</html> ";
       $res=1;

      
    }
}
    
if($res==0)
{
    echo" <h1>Login not successful..";
        echo"<br>To sign in again <a href='admin.html'>'click here'</a>";

}

mysqli_close($con);

?>