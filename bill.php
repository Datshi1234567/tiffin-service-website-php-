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
            <h1>Order Confirmed Successfully!!!!</h1>
            <br>
            <h1>Thanks For Ordering-We Can't Wait To Serve You Again</h1>
        </div>
</body>
</html>
<?php
session_start();
$usernm=$_SESSION['usernm'];
$date=$_SESSION['date'];
$days=$_SESSION['days'];
$amt=$_SESSION['price'];
$plan=$_SESSION['plan'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"tiffin");
$rs=mysqli_query($con,"insert into cust_ord(usernm,date,days,amt,plan) values('$usernm','$date','$days',$amt,'$plan')");

mysqli_close($con);
?>