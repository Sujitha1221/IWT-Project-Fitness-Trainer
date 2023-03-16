<?php
require("../php/session.php");
$ActivePage = 'DietPlans';

if (!isset($_SESSION['username'])) {
    $loginrequired = true;
    header("location:../Views/LoginD.php?loginrequired=$loginrequired");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/dietForm.css">
    
    <title>Fit To Be-Diet Plans</title>
    <link rel="icon" href="../images/favcon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/diet.js"></script>
</head>

<body>
    <?php
    require("header.php");
    ?>
    <script>
        document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
    </script>
    <br><br>
    
    <form class="form" action="../php/diet_prepayment.php" method="post">
        Username:
        <input type="text" id="login" name="login" value="<?php echo $_SESSION['username']; ?>" readonly>
        <br><br>
        Select Diet Plan id
        <select id="plans" name="plans">
            <option value="null">----Choose Diet Plan id----</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
        <br><br>
        Select Nutritionist id
        <select id="nutri" name="nutri">
            <option>----Choose Nutritionist id----</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <br><br>
        Are you vegetarian<br>
        <input type="radio" id="veg1" name="veg" value="yes">
        <label for="veg1">Yes</label><br>
        <input type="radio" id="veg2" name="veg" value="no">
        <label for="veg2">No</label><br><br>
        If you have allergies for particular foods or if you undertake any medications mention them <br>in the given textarea below<br><br>
        <textarea id="drug" name="drug" rows="4" cols="50" value="address">
    </textarea>
        <br><br>
        <button type="submit" class="registerbtn" onclick="myFunction()" value="submit" name="save_select"><b>Purchase Plan</b></button>
    </form>
    
    <br><br><br>
    <div class="clear"></div>
    <?php require("footer.php"); ?>
</body>

</html>