<?php

session_start();
if(isset($_POST['more_day'])){
    $_SESSION['days']=$_POST['more_day'];
}
if($_SESSION['menu']=="1") { 

if($_SESSION['days']=="Today")
{
    $_SESSION['price']=120;
}
if($_SESSION['days']=="3 Days")
{
    $_SESSION['price']=300;
}
if($_SESSION['days']=="1 Week")
{
    $_SESSION['price']=700;
}
if($_SESSION['days']=="2 Week")
{
    $_SESSION['price']=958;
}
if(is_numeric($_SESSION['days']))
{
    $extra=(int)$_SESSION['days'];
    $_SESSION['price']=120*$extra;
}}
if($_SESSION['menu']=="2") { 
    //$extra=isset($_POST['more_day'])?(int)$_POST['more_day']:0;
    if($_SESSION['days']=="Today")
    {
        $_SESSION['price']=140;
    }
    if($_SESSION['days']=="3 Days")
    {
        $_SESSION['price']=330;
    }
    if($_SESSION['days']=="1 Week")
    {
        $_SESSION['price']=750;
    }
    if($_SESSION['days']=="2 Week")
    {
        $_SESSION['price']=990;
    }
    if(is_numeric($_SESSION['days']))
    {
        $extra=(int)$_SESSION['days'];
        $_SESSION['price']=140*$extra;
    }}
    if($_SESSION['menu']=="3") { 
        //$extra=isset($_POST['more_day'])?(int)$_POST['more_day']:0;
        if($_SESSION['days']=="Today")
        {
            $_SESSION['price']=170;
        }
        if($_SESSION['days']=="3 Days")
        {
            $_SESSION['price']=375;
        }
        if($_SESSION['days']=="1 Week")
        {
            $_SESSION['price']=795;
        }
        if($_SESSION['days']=="2 Week")
        {
            $_SESSION['price']=1000;
        }
        if(is_numeric($_SESSION['days']))
        {
            $extra=(int)$_SESSION['days'];
            $_SESSION['price']=170*$extra;
        }}
        if($_SESSION['menu']=="4") { 
            //$extra=isset($_POST['more_day'])?(int)$_POST['more_day']:0;
            if($_SESSION['days']=="Today")
            {
                $_SESSION['price']=75;
            }
            if($_SESSION['days']=="3 Days")
            {
                $_SESSION['price']=250;
            }
            if($_SESSION['days']=="1 Week")
            {
                $_SESSION['price']=550;
            }
            if($_SESSION['days']=="2 Week")
            {
                $_SESSION['price']=750;
            }
            if(is_numeric($_SESSION['days']))
            {
                $extra=(int)$_SESSION['days'];
                $_SESSION['price']=75*$extra;
            }}
   

echo"  <!DOCTYPE html>
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
        <form action='bill.php'>
        <div class='or1'>
        <h1>ORDER SUMMARY</h1></div>
        <div class='men1'>";
        if($_SESSION['menu']=="1") { echo"
        <div id='lb'> LIGHT BITE</div>
        <br>
        <h1>Order Menu: 1 Vegetable, 1 Dal, 3 Chapati, 1 Salad/Soup</h1>";
       echo" <h1>Username:" .$_SESSION['usernm']."<br>";
       echo"Service Start Date:".$_SESSION['date']."<br>";
       echo"Order Duration:".$_SESSION['days']."<br>";
       echo"Total Amount:"."Rs.".$_SESSION['price']."<br>";
       $_SESSION['plan']='light bite';
       echo"<button type='submit' name='submit' style='height: 45px; width:150px; font-size:18px;'  >Confirm Order</button>
       ";}
       if($_SESSION['menu']=="2") { echo"
        <div id='lb'> BIG BITE</div>
        <br>
        <h1>Order Menu: 1 Vegetable, 1 Dal, 3 Chapati, 1 Rice, 1 Salad/Soup</h1>";
       echo" <h1>Username:" .$_SESSION['usernm']."<br>";
       echo"Service Start Date:".$_SESSION['date']."<br>";
       echo"Order Duration:".$_SESSION['days']."<br>";
       echo"Total Amount:"."Rs.".$_SESSION['price']."<br>";
       $_SESSION['plan']='Big bite';
       echo"<button type='submit' name='submit' style='height: 45px; width:150px; font-size:18px;'  >Confirm Order</button>
       ";}
       if($_SESSION['menu']=="3") { echo"
        <div id='lb'> JUMBO FEAST</div>
        <br>
        <h1>Order Menu: 1 Gravy Veg, 1 Dry Veg, 1 Dal, 4 Chapati, 1 Rice, 1 Salad/Soup</h1>";
       echo" <h1>Username:" .$_SESSION['usernm']."<br>";
       echo"Service Start Date:".$_SESSION['date']."<br>";
       echo"Order Duration:".$_SESSION['days']."<br>";
       echo"Total Amount:"."Rs.".$_SESSION['price']."<br>";
       $_SESSION['plan']='Jumbo feast';
       echo"<button type='submit' name='submit' style='height: 45px; width:150px; font-size:18px;'  >Confirm Order</button>
      ";}
       if($_SESSION['menu']=="4") { echo"
        <div id='lb'> MINI MEAL</div>
        <br>
        <h1>Order Menu: 1 Vegetable, 3 Chapati</h1>";
       echo" <h1>Username:" .$_SESSION['usernm']."<br>";
       echo"Service Start Date:".$_SESSION['date']."<br>";
       echo"Order Duration:".$_SESSION['days']."<br>";
       echo"Total Amount:"."Rs.".$_SESSION['price']."<br>";
       $_SESSION['plan']='Mini meal';
       echo"<button type='submit' name='submit' style='height: 45px; width:150px; font-size:18px;'  >Confirm Order</button>
       </form>";}
      ?>
       
