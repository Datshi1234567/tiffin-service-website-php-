<?php 
session_start();

    echo"
    <!DOCTYPE html>
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
        <div class='or1'>
        <h1>ORDER DETAILS</h1></div>
        <div class='men1'>";
        if($_SESSION['menu']=="1"){echo"
        <div id='lb'> LIGHT BITE</div>";}
        if($_SESSION['menu']=="2"){
            echo"
        <div id='lb'> BIG BITE</div>";
        }
        if($_SESSION['menu']=="3"){
            echo"
        <div id='lb'>JUMBO FEAST</div>";
        }
        if($_SESSION['menu']=="4"){
            echo"
        <div id='lb'>MINI MEAL</div>";
        }
       echo"<br>
";

  
        $days=$_GET['days'];
        $_SESSION['days']=$days;
        $date=$_GET["date"];
        $_SESSION['date']=$date;
        if ($days=="More"){ 
           echo" <html>
           <body>
           <br>
           <form action='final.php' method='post'>
            <h1>Enter Number of Days:<input type='number' name='more_day' required  style='height: 45px; width:150px; font-size:18px;' placeholder='Enter no.of days'>
            <br><br>
            <input type='submit' name='submit'style='height: 45px; width:150px; font-size:18px;'>
             </form>
             </body>
            </html>";
            }
            else{
                header("location:final.php");
            }
            ?>