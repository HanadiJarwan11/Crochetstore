<?php
    session_start();
//    if (!isset($_SESSION["user"])){
//         header("Location: index.php");
//    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="styleform.css">
</head>
<body>


    <div class="container">
        <?php
        if (isset($_POST ["submit"])){

            $Firstname = $_POST ["newFname"];
            $Newpass = $_POST ["newpass1"];
            $error = array();
            $welcome = array();


            require_once "Database.php";
            $sql = "SELECT * FROM  users WHERE First_Name = '$Firstname'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($Newpass, $user["Password"])){
                    // session_start();
                    // $_SESSION["user"] = "yes";
                    $_SESSION['newFname'] = $user ['newFname'];
                    //if not newFname try First_Name    
                    echo $_SESSION['newFname'] = $user['newFname'], $welcome,"Welcome back", $_SESSION['newFname'];
                    //try $welcome [] = 'welcome..'; OR  arraypush ($_SESSION) ['newFname'] = $user ['newFname']
                    header("Location: index.php");

                //index.php
                } else{
                    echo "Password does not match </div>";
                }

            } else {
                echo "  Username does not match </div>";
            }
}
?>
    <form action="login.php" method="post">
        <?php
        if (!empty($error)){?>
        <div class = "alert alert-danger">
            <?=$error; ?>
        </div>
        <?php
    } ?>
        <p>Login</p> 
        
        <label for="names" > <input type="text" name="newFname" placeholder="Username" class="info"> </label> <br><br>
        <label for="passs" > <input type="password" name="newpass1" placeholder="Password" class="info"> </label> <br> <br>      <br>
        <label for="login" > <input type="submit" name="submit" value="Log in" class="btn" target="blank"></input> </label><br> <br> <br>
        <label for="register"> Dont have an account? <a href="register.php" target="blank">Create one here!</a></label>
        <!-- go to jumia</a>     -->
    </div>
    </form>

    

</body>
</html>

