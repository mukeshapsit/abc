<?php
    session_start();
 
    if(isset($_SESSION['User']))
    {
        echo ' Well Come ' . $_SESSION['User'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:index.php");
    }
 
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta cahrset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" a href="css/fonts.css"/>
        <link rel="stylesheet" a href="css/style.css"/>
        <link rel="stylesheet" a href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css"/>
        <script src="js/bootstrap.js"></script>
        <script src="js/boostrapjquery.js"></script>
        <script src="js/proper.js"></script>
    </head>
<body> 
<section>
    <div class="header">
        <p class="text1">COMPARE BEST PRICES AND GET GREAT DEALS</p>
    </div>
    <div class="new-launch">
    </div>
</section>
<section class="main">
    <div class="phone-list">
        <div class="phone-container">
            <div class="phone-img">
            <img src="img/oneplus.jpg" style="width:100%">
            </div>
            <div class="phone-name">
                ONEPLUS 7T <br> Rs. 31999
            </div>
        </div> 
        <div class="phone-container">
            <div class="phone-img">
            <img src="img/iphone%2011.jpg" style="width:100%">
            </div>
            <div class="phone-name">
                I PHONE 11 <br> Rs. 78999
            </div>
        </div> 
        <div class="phone-container">
            <div class="phone-img">
            <img src="img/note%208%20pro.jpg" style="width:100%">
            </div>
            <div class="phone-name">
                REDMI NOTE 8 PRO <br> Rs. 15999
            </div>
        </div> 
        <div class="phone-container">
            <div class="phone-img">
            <img src="img/realme%20x1.jpg" style="width:100%">
            </div>
            <div class="phone-name">
                REALME XT <br> Rs. 16999
            </div>
        </div> 
        <div class="phone-container">
            <div class="phone-img">
            <img src="img/f1.jpg" style="width:100%">
            </div>
            <div class="phone-name">
                POCCO F1 <br> Rs. 32000
            </div>
        </div> 
        <div class="phone-container">
            <div class="phone-img">
            <img src="img/reno2%20z.jpg" style="width:100%">
            </div>
            <div class="phone-name">
                OPPO RENO Z <br> Rs. 32000
            </div>
        </div> 
    </div>
    <div class="news">
    </div>
</section>
</body>
</html> 