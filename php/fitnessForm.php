<?php
require("config.php");

if (isset($_POST['submitBts']))
{
   $login_id=['userId'];
   $fitnessPlan=['fitnessPlan'];
   $fitnessTrainer=['trainers'];
   $Ask=["inquiries"];

    $query = " INSERT INTO fitness_form(LoginId,FitnessPlanId,TrainerId,Inquiries) values('$login_id','$fitnessPlan','$fitnessTrainer','$Ask','$medi')";

            if($conn->query($query))
            {
              echo"success";
            }
            else
            {
                echo 'Please Check Your Query ';
            }
        
    }<br><br>

    if ( isset ( $_POST['save_select'])){

echo "Login id:". $_POST['userId']."<br>";

echo "FitnessPlan id:". $_POST['nutri']."<br>";

echo "Trainer id:". $_POST['plans']. "<br>";

echo "inquiries:". $_POST['inquiries']. "<br>";
}
    $conn ->close();
  
?>
