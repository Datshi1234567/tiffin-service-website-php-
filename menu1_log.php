<?php
session_start();
if(isset($_GET['menu'])){
    $_SESSION['menu']=$_GET['menu'];
}?>
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
        <div class="or1">
        <h1>LOG IN</h1></div>
        <div class="men1">
      
       <br>
       <form action="menu_log.php" method="post">
       <h1>Enter Username:<input type="varchar" name="usernm" required  style="height: 45px; width:150px; font-size:18px;"><br><br>
        <h1>Enter Password:<input type="number" name="pwd" required  style="height: 45px; width:150px; font-size:18px;" >
          <br>
        <br>
                <input type="submit" name="submit" style="height: 45px; width:150px; font-size:18px;"></div>
</div>
</form>
</body>
</html>
