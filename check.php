<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">

<?php
if (isset($_POST["login"])){
    $Emails = $_POST["Email"];
    $Newpass = $_POST["newpass1"];
    $error = array();

    require_once "Database.php";
    $sql = "SELECT * FROM users WHERE Email = '$Emails' ";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user){
        if (password_verify($Newpass, $user["Password"])){
            header("Location: index.php");
            die();
        
    }else{
        echo "password does not exist/ no match";
    }
    }else{
        echo "Email does not match";
    }
}


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
?>
   
</body>
</html>

