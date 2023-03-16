<?php
require("../php/session.php");
$ActivePage = basename($_SERVER['PHP_SELF'], ".php");

if(isset($_SESSION["username"]))
{
    header("location:Logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit TO Be</title>
    <link rel="icon" href="../images/favcon.png">
    <link rel="stylesheet" href="../css/LoginD.css">
    <script type="text/javascript" src="../js/contactus.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
    <?php
    require("header.php");
    ?>
    <script>
        document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
    </script>

    <br><br><br><br>
    <h1></h1><br><br>

    <div class="form">
        <form method="post" action="../php/login.php">
            <img src="../images/user2.png" class="user"><br><br>

            <label class="textb">User name</label>
            <input class="texta" type="text" name="username" id="username" placeholder="User name" required>

            <label class="textb">Password</label>
            <input class="texta" type="password" name="pw" id="password" placeholder="Password" required>

            <a href="#"> Forgot Password?</a><br>
            <input id="submit" class="submit" type="submit" value="login" name="login"></br></br>
            <a href="register.php"> Don't have an account? Register here</a><br>

            </br>

        </form>
    </div>
    </br>
    </br>
    <div class="clear"></div>
    <?php require("footer.php"); ?>


    <?php
    if (isset($_GET['failed'])) {
        if ($_GET['failed'] == true) {
            ?> <script>alert("Incorrect username password combination. Plaese re-enter.")</script> <?php
        }
    }
    else if (isset($_GET['loginrequired'])) {
        if ($_GET['loginrequired'] == true) {
            ?> <script>alert("Please login to continue..")</script> <?php
        }
    }
    ?>
</body>

</html>