 <?php
     session_start();
//     if (!isset($_SESSION["user"])){
//          header("Location: Login.php");
//     }
// else {echo '<script> alert ("logged in congrats") </script>'};

// if (isset($_SESSION ['Login']))
// {echo "welcome user "; }
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

<?php

            $Firstname = $_POST ["newFname"];
            $welcome = array();
            $error = array();

            require_once "Database.php";
            $sql = "SELECT * FROM users WHERE First_Name = '$Firstname'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount ($sql) > 0) {
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $fetch_user = mysqli_fetch_assoc($result);
            }
        ?>
    
    <p>Welcome to crochet <?php echo $fetch_user ['newFname'];?>  </p>

<form action="index.php" method="POST">
    <div class="header">
        <ul class="logo">
        <li><a class="yarnpic" href="#" > <img src="./images/yarn2.png" alt="yarn hook"></a></li>
    </ul>

    <div class="hamburger"> 
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div> 

    <ul>
        <div class="nav">
            <div class="dropdown">
            <li><a href="#">Account</a></li>
            
            <div class="dropdown_content">
                <li><a href="Login.php">Login</a></li>
                <li><a href="register.php">Sign up</a></li>
                <li><a href="#">Contact us</a></li>
            </div>
            </div>
            <li><a href="#">About us</a></li>
            <!-- add the log in, sign up, and contact us in accounts -->
            <?php
            $count = 0;
            if (isset($_SESSION['myCart']))
                {
                    $count = count($_SESSION['myCart']);
                }
            ?>
            <li><a href="myCart.php">My Cart (<?php echo $count;?>)</a></li>
            
            <li><a href="Logout.php">Log out</a></li>
   
        </div>
    </ul> 
    
</div>


</form>

<div class="card_container">

    <form action="cart_manage.php" method="POST">
    <div class="card">
        <img src="./images/shirt1.jpeg" alt="">
        <div class="card_info">
            <h4>this is card1</h4>
            <p>960 ksh</p>
            <button type="submit" name="add_to_cart" class="buy">Add to Cart</button>
            <input type="hidden" name="Item_name" value="Card 1">
            <input type="hidden" name="Item_value" value="960">
        </div>
    </div>
    </form>

        <form action="cart_manage.php" method="POST">
            <div class="card">
                <img src="./images/shirt2.jpeg" alt="">
                <div class="card_info">
                    <h4>this is card2</h4>
                    <p>450 ksh</p>
                    <button type="submit" name="add_to_cart" class="buy">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Card 2">
                    <input type="hidden" name="Item_value" value="450">
                </div>
            </div>
    </form>

    <form action="cart_manage.php" method="POST">
        <div class="card">
            <img src="./images/shirt3.jpeg" alt="">
                <div class="card_info">
                <h4>this is card3</h4>
                <p>980 ksh</p>
                <button type="submit" name="add_to_cart" class="buy">Add to Cart</button>
                <input type="hidden" name="Item_name" value="Card 3">
                <input type="hidden" name="Item_value" value="980">
                
            </div>
        </div>
        </form>
    
    <form action="cart_manage.php" method="POST">
        <div class="card">
            <img src="./images/shirt4.jpeg" alt="">
            <div class="card_info">
                <h4>this is card4</h4>
                <p>800 ksh</p>
                <button type="submit" name="add_to_cart" class="buy">Add to Cart</button>
                <input type="hidden" name="Item_name" value="Card 4">
                <input type="hidden" name="Item_value" value="800">
            </div>
        </div>
    </form>
    
    <form action="cart_manage.php" method="POST">
    <div class="card">
        <img src="./images/shirt5.jpeg" alt="">
        <div class="card_info">
            <h4>this is card5</h4>
            <p>200 ksh</p>
            <button type="submit" name="add_to_cart" class="buy">Add to Cart</button>
            <input type="hidden" name="Item_name" value="Card 5">
            <input type="hidden" name="Item_value" value="200">
        </div>
    </div>
    </form>
    
    <form action="cart_manage.php" method="POST">
    <div class="card">
        <img src="./images/shirt6.jpeg" alt="">
        <div class="card_info">
            <h4>this is card6</h4>
            <p>460 ksh</p>
            <button type="submit" name="add_to_cart" class="buy">Add to Cart</button>
            <input type="hidden" name="Item_name" value="Card 6">
            <input type="hidden" name="Item_value" value="460">
        </div>
    </div>
    </form>

    <form action="cart_manage.php" method="POST">
    <div class="card">
        <img src="./images/shirt7.jpeg" alt="">
        <div class="card_info">
            <h4>this is card7</h4>
            <p>760 ksh</p>
            <button type="submit" name="add_to_cart" class="buy">Add to Cart</button>
            <input type="hidden" name="Item_name" value="Card 7">
            <input type="hidden" name="Item_value" value="760">
        </div>
    </div>
    </form>
    
    <form action="cart_manage.php" method="POST">
    <div class="card">
        <img src="./images/shirt8.jpeg" alt="">
        <div class="card_info">
            <h4>this is card8</h4>
            <p>345 ksh</p>
            <button type="submit" name="add_to_cart" class="buy">Add to Cart</button>
            <input type="hidden" name="Item_name" value="Card 8">
            <input type="hidden" name="Item_value" value="345">
        </div>
    </div>


</div>


<footer>This website is created by non other than Hanadiii, aka Me. Enjoy!</footer>

<script>
//     function myFunction() {
//   const x = document.querySelector(".nav");
//   if (x.style.display === "block") {
//     x.style.display = "none";
//   } else {
//     x.style.display = "block";
//   }
// }
   const hamburger = document.querySelector(".hamburger");
   const nav = document.querySelector(".nav");

   hamburger.addEventListener("click", (phone));

   function phone(){
    hamburger.classList.toggle("active");
    nav.classList.toggle("active");
    }

//    const nav = document.querySelectorAll("")
</script>

</body>
</html>