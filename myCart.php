<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
       th, tr, td{
            background-color: bisque;
            padding: 30px;
        }

    </style>
</head>
<body>

    <div class="heading">
    <h1>MY CART</h1>
    </div>

    <div class="myTable">
        <table>
            <thead>
                <tr>
                    <th>number</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Quantity</th>
                    <th>Total Amount</th> 
                </tr>
            </thead>

            <?php
            // print_r($_SESSION['myCart']);
                $total = 0;
                if (isset ($_SESSION['myCart']))
                {
                    foreach ($_SESSION['myCart'] as $key => $value)
                    {
                        $total = $total + $value ['Item_value'];
                        // print_r($value);
                        echo "
                        <tr>
                            <td>1</td>
                            <td>$value[Item_name]</td>
                            <td>$value[Item_value]</td>
                            <td>
                                <input type='number' value='$value[Quantity]' min='1' max='10'>
                            </td>
                            <td>
                                <form action='cart_manage.php' method='POST'>
                                    <button name='remove_item'>REMOVE ITEM</button>
                                    <input type='hidden' name='Item_name' value= '$value[Item_name]'>
                            </form>
                            </td>
                            <td></td>
                        </tr>
                        ";
                    }
                }
            ?>

                <div class="myTotal">
                    <h2>Total:</h2>
                    <h6><?php echo $total?></h6>
                    <form action="">
                        <button>Purchase Now</button>
                    </form>
                </div>



                <!-- <tr>
                    <td>1</td>
                    <td>bag 1</td>
                    <td>233</td>
                    <td>3</td>
                    <td>233</td>
                </tr> -->
        </table>
    </div>










<!-- 
<div class="container">

<?php
// if (isset($_POST["login"])){
//     $Emails = $_POST["Email"];
//     $Newpass = $_POST["newpass1"];
//     $error = array();

//     require_once "Database.php";
//     $sql = "SELECT * FROM users WHERE Email = '$Emails' ";
//     $result = mysqli_query($conn, $sql);
//     $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
//     if ($user){
//         if (password_verify($Newpass, $user["Password"])){
//             header("Location: index.php");
//             die();
        
//     }else{
//         echo "password does not exist/ no match";
//     }
//     }else{
//         echo "Email does not match";
//     }
// }


?>
    <form action="index.php" method="post">
        <div class="formgroup">
            <input type="email" placeholder="entee mail" name="Email">
        </div>

        <div class="formgroup">
            <input type="password" placeholder="enter password" name="newpass1">
        </div>

        <div class="submitting">
            <input type="submit" value="login" name="login">

            <div class="reg"><a href="register.php">or register new here</a></div>
        </div>
    </form>
</div>

<?php
// echo '<script> alert ("logged in congrats") </script>';


// echo  "password is: "; $Newpass;
// echo "<br> and email is " ; $Emails
?> -->

</body>
</html>

