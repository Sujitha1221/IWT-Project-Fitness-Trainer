<?php
require("../php/session.php");
$ActivePage = 'LoginD';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="../images/favcon.png">
    
    <title>Registration Page</title>
    <script src="../js/confirm.js"></script>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    require("header.php");
    ?>
    <script>
        document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
    </script>

    <br><br>
    <div class="form">
        <form class="register" onsubmit="return checkPassword()" method="post" action="../php/Register.php">
            <h1>Create a New Account</h1>

            <h2>Come and join with us!Let's create your New account.</h2>
            <br><br>

            First Name:<br>
            <input type="text" id="fname" name="fname" placeholder="Enter First Name" required>
            <br><br>
            Last Name:<br>
            <input type="text" id="lname" name="lname" placeholder="Enter Last Name" required>
            <br><br>
            Gender:
            <input type="radio" name="gender">
            Male
            <input type="radio" name="gender">
            Female
            <br><br>
            Email:<br>
            <input type="email" id="email" name="email" placeholder="Enter Email" pattern="[a-z0-9._+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required>
            <br><br>
            Address:<br>
            <textarea id="address" name="address" rows="3" cols="50" required></textarea>
            <br><br>
            Mobile Number:<br>
            <input type="text" id="phone_num" name="phone_num" placeholder="Enter Mobile Number" pattern="[0-9]{10}" required>
            <br><br>
            Date Of Birth:<br>
            <input type="date" id="birthday" name="birthday">
            <br><br>
            Username:<br>
            <input type="text" name="username" id="username" placeholder="Enter Username" required>
            <br><br>
            Password:<br>
            <input type="password" name="user-password" id="pwd" placeholder="Enter password" required>
            <br><br>
            Confirm password:<br>
            <input type="password" name="password-repeat" id="repwd" placeholder="Repeat password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" required>
            <br><br>
            <input type="checkbox" class="checkbox" id="check" onclick="enableButton()">
            I agree to all the <a href="#" id="inside">Terms and Conditions</a></a>
            <br><br>
            <button type="submit" class="registerbtn" name="submit" value="submit"><b>Register</b></button>
            <br><br>
            <center>Already have an account? <a href="LoginD.php" id="inside">Sign in</a></center>
        </form>
    </div>
    <br><br>
    <?php require("footer.php"); ?>
    <div class="clear"></div>
   

</body>

</html>