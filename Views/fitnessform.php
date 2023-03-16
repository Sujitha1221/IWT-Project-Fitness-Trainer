<?php
require("../php/session.php");
$ActivePage = 'Fitness';

if (!isset($_SESSION['username'])) {
    $loginrequired = true;
    header("location:../Views/LoginD.php?loginrequired=$loginrequired");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Fit To Be</title>
    <link rel="icon" href="../images/favcon.png">
    <link rel="stylesheet" href="../css/HomeStyle.css">
    <link rel="stylesheet" href="../css/fitnessStyle.css">
    
</head>

<body>
    <?php
    require("header.php");
    ?>
    <script>
        document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
    </script>
    <main>
        <br><br>
        <div class="Form">
            <h2>Purchase Fitness Plans</h2><br>
            <form action="../php/fitness_prepayment.php" class="purchaseOrder" method="POST">
                <label for="userId">Username :</label><br>
                <input type="text" name="userId" class="txt" value="<?php echo $_SESSION['username'] ?>" readonly><br><br>
                <label for="fitnessPlan">Select Fitness Plan id:</label><br>
                <select name="fitnessPlan" class="txt" required>
                    <option>---Choose Fitness Plan id---</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>

                </select><br><br>
                <label for="trainers">Select Trainer id:</label><br>
                <select name="trainers" class="txt" required>
                    <option value="T">---Choose Trainer id---</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select><br><br>
                <label for="inquiries">Ask us more,</label><br>
                <textarea name="inquiries" class="txt" cols="30" rows="5"></textarea><br><br>
                <input type="submit" value="Purchase" onclick="showalert()" name="submitFitness" id="btn"><br><br>

            </form>
        </div>
        <br><br>
        <br><br>
        
    </main>
    <?php require("footer.php"); ?>
</body>

</html>