<?php
require("../php/session.php");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Fit To Be</title>
  <link rel="icon" href="../images/favcon.png">
  <link rel="stylesheet" href="../css/HomeStyle.css">
  <link rel="stylesheet" href="../css/payment.css">

</head>

<body>
  <?php
  require("header.php");
  ?>
  <br>
  <h2>
    <center>Payment Form</center>
  </h2>
  <br>

  <div class="row">
    <div class="col-75">

      <form method="post" action="../php/payment_insert.php" class="form">

        <div class="col-50">

          <h3>Payment Details</h3>
          <label for="fname" class="textb">Accepted Cards</label>
          <div class="icon-container">
            <i class="fa fa-cc-visa" style="color:navy;"></i>
            <i class="fa fa-cc-amex" style="color:blue;"></i>
            <i class="fa fa-cc-mastercard" style="color:red;"></i>
            <i class="fa fa-cc-discover" style="color:orange;"></i>
          </div>
          <label for="cname" class="textb">Name on Card</label>
          <input type="text" id="cname" name="cardName">
          <label for="ccnum" class="textb">Card number</label>
          <input type="text" id="ccnum" name="cardNumber">
          <label for="expmonth" class="textb">Month</label>
          <input type="text" id="month" name="month">
          <div class="row">
            <div class="col-50">
              <label for="date" class="textb">Date</label>
              <input type="date" id="date" name="date">
            </div>


            <div class="col-50">
              <label for="cvv" class="textb">CVC</label>
              <input type="text" id="cvv" name="cvc">
            </div>
          </div>
        </div>

        <br><br>
        <label for="pay" class="textb">Total bill amount</label>
        <input type="text" id="bill" name="total" value="<?php echo $_POST['total'] ?>" readonly>

        <!-- hidden atrtibutes to forward -->
        <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>">
        <?php
        if ($_POST['type'] == 'fitness') {
        ?>
          <input type="hidden" name="fitnessPlanId" value="<?php echo $_POST['fitnessPlanId']; ?>">
          <input type="hidden" name="trainerId" value="<?php echo $_POST['trainerId']; ?>">
          <input type="hidden" name="inquiries" value="<?php echo $_POST['inquiries']; ?>">
        <?php
        } else if ($_POST['type'] == 'diet') {
        ?>
          <input type="hidden" name="dietPlanId" value="<?php echo $_POST['dietPlanId']; ?>">
          <input type="hidden" name="nutritionistId" value="<?php echo $_POST['nutritionistId']; ?>">
          <input type="hidden" name="vegetarian" value="<?php echo $_POST['vegetarian']; ?>">
          <input type="hidden" name="medications" value="<?php echo $_POST['medications']; ?>">
        <?php
        }
        ?>

        <input type="submit" value="Finish Payment" name="submit" class="btn" style="background-color:cyan; color:black; font-weight: bold;">
      </form>
    </div>


  </div>
  </div>
  </div>
  </div>

  <br> <br> <br>

  </div>
  </div>
  </div>
  <br><br><br><br><br><br>

  <?php require("footer.php");?>
</body>