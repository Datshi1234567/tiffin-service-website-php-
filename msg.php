<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Yummy Tiffin</title>
</head>
<body>
    <header></header>
     
        <ul class="navbar">
        <img src ="logo.png">
       
   
     <li> <a href="submit.html" class="link">Home</a></li>
        <li> <a href="about.html" class="link">About</a></li>
        <li> <a href="menu_main.php" class="link">Menu</a></li>
        <li> <a href="contact.html" class="link">Contact</a></li>
        <li> <a href="signin.html" class="link">Sign in</a></li>
        </ul>

        </li>
        <div class='men1'>
            <br>
            <br>
            <h1>Thanks! Your mesage has been sent successfully- we'll be in touch soon!</h1>
            <br>
            <h1></h1>
        </div>
</body>
</html>
<?php
$nm=$_POST['nm'];
$no=$_POST['no'];
$cust_email=$_POST['cust_email'];
$msg=$_POST['msg'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"tiffin");
$rs=mysqli_query($con,"insert into inbox(nm,no,cust_email,msg) values('$nm',$no,'$cust_email','$msg')");

mysqli_close($con);

?>
