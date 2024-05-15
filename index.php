<?php
    session_start();
   if (!isset($_SESSION["user"])){
        header("Location: Login.php");
   }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="website icon" type="jpeg" href="./images/yarn2.png">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    <div class="header">
        <ul class="logo">
        <li><a class="yarnpic" href="#" > <img src="./images/yarn2.png" alt="yarn hook"></a></li>
    </ul>
    <ul>
        <li><a href="#">About us</a></li>
        <li><a href="#">Buy now</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="register.php">Sign up</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="Logout.php">Log out</a></li>
    </ul> 
</div>

<div class="card_container">
    <div class="card">
        <img src="./images/shirt1.jpeg" alt="">
        <div class="card_info">
            <h4>this is card1</h4>
            <p>this is a detailed info. idk if needed</p>
        </div>
    </div>
        
    <div class="card">
        <img src="./images/shirt2.jpeg" alt="">
        <div class="card_info">
            <h4>this is card2</h4>
            <p>this is a detailed info. idk if needed</p>
        </div>
    </div>

    <div class="card">
        <img src="./images/shirt3.jpeg" alt="">
        <div class="card_info">
            <h4>this is card3</h4>
            <p>this is a detailed info. idk if needed</p>
        </div>
    </div>
    
    <div class="card">
        <img src="./images/shirt4.jpeg" alt="">
        <div class="card_info">
            <h4>this is card4</h4>
            <p>this is a detailed info. idk if needed</p>
        </div>
    </div>

    <div class="card">
        <img src="./images/shirt1.jpeg" alt="">
        <div class="card_info">
            <h4>this is card1</h4>
            <p>this is a detailed info. idk if needed</p>
        </div>
    </div>

    <div class="card">
        <img src="./images/shirt2.jpeg" alt="">
        <div class="card_info">
            <h4>this is card2</h4>
            <p>this is a detailed info. idk if needed</p>
        </div>
    </div>

    <div class="card">
        <img src="./images/shirt3.jpeg" alt="">
        <div class="card_info">
            <h4>this is card3</h4>
            <p>this is a detailed info. idk if needed</p>
        </div>
    </div>
    
    <div class="card">
        <img src="./images/shirt4.jpeg" alt="">
        <div class="card_info">
            <h4>this is card4</h4>
            <p>this is a detailed info. idk if needed</p>
        </div>
    </div>

    <?php
echo '<script> alert ("logged in congrats") </script>';

?>
   






</div>


<footer>just text for footer</footer>

</form>
</body>
</html>