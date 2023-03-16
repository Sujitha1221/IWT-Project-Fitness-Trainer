<?php
require("config.php");
session_start();

$plan_id = $_POST['plans'];

$query = "SELECT d_price FROM dietplans WHERE d_id=$plan_id;";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$price = $row['d_price'];

$type = "diet";
$dietPlanId = $_POST['plans'];
$nutritionistId = $_POST['nutri'];
$vegetarian = $_POST['veg'];
$medications = $_POST['drug'];

?>

<form action="../Views/payment.php" method="POST">
    <!-- for purchase table -->
    <input type="hidden" name="total" value="<?php echo $price ?>">

    <!-- for diet_form table -->
    <input type="hidden" name="type" value="<?php echo $type ?>">
    <input type="hidden" name="dietPlanId" value="<?php echo $plan_id ?>">
    <input type="hidden" name="nutritionistId" value="<?php echo $nutritionistId ?>">
    <input type="hidden" name="vegetarian" value="<?php echo $vegetarian ?>">
    <input type="hidden" name="medications" value="<?php echo $medications ?>">

    <input id="submitbtn" type="submit" name="submit" value="submit">
</form>

<script type="text/javascript">
    document.getElementById('submitbtn').click(); // SUBMIT FORM
</script>