<?php
	  require("../php/session.php");
        $ActivePage = 'LoginD';
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit TO Be</title>
    <link rel="icon" href="../images/favcon.png">
    
    <script type="text/javascript" src="../js/contactus.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../css/LoginD.css">
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
    <div class="form" >

    <form  method = "post" action = "../php/login.php">
        <input id="submit" class="submit" type="submit"  value="logout" name = "logout"></br></br>  
    </form>
    <form  method = "post" action = "../php/login.php" >
        <input id="submit" class="submit" type="submit"  value="Delete Account" name = "delete" style="background-color:red"></br></br>  
    </form>

    <?php
    require("../php/config.php");
    $username = $_SESSION['username'];
    $query = "SELECT * FROM register WHERE username='$username'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();

    $firstName = $row['First_name'];
    $lasttName = $row['Last_name'];
    $gender = $row['Gender'];
    $email = $row['Email'];
    $address = $row['Address'];
    $mobile = $row['Mobile_number'];
    $dob = $row['DOB'];
    ?>

   
      <form  method = "post" action = "../php/updateAccDetails.php">
      </br>
      First Name:<br>
            <input type="text" id="fname" class="texta" name="fname" value="<?php echo $firstName ?>"  required>
            <br><br>
            Last Name:<br>
            <input type="text" id="lname" class="texta" name="lname" value="<?php echo $lasttName ?>" required>
            <br><br>
            Email:<br>
            <input type="email" id="email" class="texta" name="email" value="<?php echo $email ?>" pattern="[a-z0-9._+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required>
            <br><br>
            Address:<br>
            <textarea id="address" name="address" rows="3" cols="64" required><?php echo $address ?></textarea>
            <br><br>
            Mobile Number:<br>
            <input type="text" id="phone_num" class="texta" name="phone_num" value="0<?php echo $mobile ?>" pattern="[0-9]{10}" required>
            <br><br>
            Date Of Birth:<br>
            <input type="date" id="birthday" class="texta" name="birthday" value="<?php echo $dob ?>">
            <br><br>

            <input type="hidden" name="username" id="username" value="<?php echo $username ?>">
            <input type="hidden" name="gender" value="<?php echo $gender ?>">

            <button class="submit" type="submit">Update account</button>
      </form>
    </div>
    </br>
    </br> 
    <div class="clear"></div>
    <?php require("footer.php");?>

</body>
</html>