<?php
require("config.php");
session_start();

$plan_id = $_POST['fitnessPlan'];

$query = "SELECT f_price FROM fitnessplans WHERE f_id=$plan_id;";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$price = $row['f_price'];

$type = "fitness";
$fitnessPlanId = $_POST['fitnessPlan'];;
$trainerId = $_POST['trainers'];
$inquiries = $_POST['inquiries'];

?>

<form action="../Views/payment.php" method="POST">
    <!-- for purchase table -->
    <input type="hidden" name="total" value="<?php echo $price ?>">

    <!-- for fitness_form table -->
    <input type="hidden" name="type" value="<?php echo $type ?>">
    <input type="hidden" name="fitnessPlanId" value="<?php echo $fitnessPlanId ?>">
    <input type="hidden" name="trainerId" value="<?php echo $trainerId ?>">
    <input type="hidden" name="inquiries" value="<?php echo $inquiries ?>">

    <input id="submitbtn" type="submit" name="submit" value="submit">
</form>

<script type="text/javascript">
    document.getElementById('submitbtn').click(); // SUBMIT FORM
</script>