
<?php
    session_start();
//    if (isset($_SESSION["user"])){
//         header("Location: index.php");
//    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account here</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="website icon" type="jpeg" href="./images/yarn2.png">

</head>
<body>

<?php
// $succ_msg = $err_msg;
if (isset($_POST ["registerr"])){
    $Firstname = $_POST['newFname'];
    $Lastname = $_POST['newLname'];
    $Emails = $_POST['Email'];
    $Newpass = $_POST['newpass1'];
    $Newpass2 = $_POST['newpass2'];
    //passhash default for security---doesnt show the password in sql
    $Passwordhash = password_hash($Newpass, PASSWORD_DEFAULT);

    $error = array();
    $welcome = array();
    $succ_msg = array();
    // $err_msg = array();

    if (empty($Firstname) OR empty ($Lastname) OR empty ($Emails) OR empty($Newpass) OR empty($Newpass2)) {
        array_push ($error,"All fields are required");
    }
    if (strlen($Newpass)<3) {
        array_push($error, "Password must be more than 8");
    }
    if ($Newpass!==$Newpass2) {
        array_push($error, "Password does not match");
    }

    require_once "Database.php";
    
    $sql = "SELECT * FROM users WHERE Email = '$Emails'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        array_push($error, "Email already exists!");
    }
    if (count ($error)>0) {
        foreach ($error as $error){
            echo '<div class= "message">'. $error. '</div>';
        }
    }

    else{
        //insert data into database

        $sql = "INSERT INTO users (First_Name, Last_Name, Email, Password) VALUES (?, ?, ?, ?)";
        $Stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($Stmt, $sql);
        
        if ($prepareStmt)  {
            mysqli_stmt_bind_param($Stmt,"ssss", $Firstname, $Lastname, $Emails, $Passwordhash);
            mysqli_stmt_execute($Stmt);
            array_push($succ_msg, "Registration successful. Please login <a href='Login.php' here </a>");
            // session_start();
            //         $_SESSION["user"] = "yes";
            //OR TRY --- echo "<script> alert ('Items added'); window.location.href = 'index.php'; </script>";
            // array_push($welcome, 'You have registered successfully! Welcome to Hooked on Stitches.');
            // header("Location: index.php");
            } 
            else { 
                array_push($error, "error happended");

            // $error[] = 'You have registered successfully! Welcome to Hooked on Stitches';
            //without arry push
        }
        
    }
}
?>
   <!-- <h1> Welcome to .... this is where you can create ur new account </h1> -->
   <form action="register.php" method="post">
        <div class="container">

        <?php
        if (!empty($succ_msg)){?>
        <div class = "alert alert-success">
            <?=$succ_msg; ?>
        </div>
        <?php } ?>

        <?php
        if (!empty($error)){?>
        <div class = "alert alert-danger">
            <?=$error; ?>
        </div>
        <?php
    } ?>

        <p>Login</p> 
        <div class="field">
            <label for="Fname"> <input type="text" name="newFname" placeholder="First Name" class="info"></label>
            <label for="Lname"><input type="text" name="newLname" placeholder="Last Name" class="info"> </label>
        </div> 

        <div class="field">
            <label for="Email"><input type="email" name="Email" placeholder="Email address" class="info"> </label>
            <label for="phone"><input type="tel" name="Number" placeholder="Phone number" class="info"> </label>
        </div>
        <div class="field"> 
            <label for="pass"><input type="password" name="newpass1" placeholder="Password" class="info"> </label> <br> <br>     
            <label for="pass2"><input type="password" name="newpass2" placeholder="Password Re-enter" class="info"> </label> 
        </div><br> <br>   <br>   
        <input type="submit" class="btn" name="registerr" value="Sign up"> </input> <br> <br><br> 
        <label for="register"> Already have an account? <a href="Login.php">Login here!</a></label>
        </div>
    </form>
    <div></div>
</body>
</html>