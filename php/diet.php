<?php
require("config.php");

if (isset($_POST['save_select']))
{
   $login_id=['login'];
   $dietPlan=['nutri'];
   $dietNutri=['plans'];
   $vege=['veg'];
   $medi=["drug"];

    $query = " INSERT INTO diet_form(LoginId,DietPlanId,NutritionistId,vegetarian,Medications) values('$login_id','$dietPlan','$dietNutri','$vege','$medi')";

            if($conn->query($query))
            {
              echo"success";
            }
            else
            {
                echo 'Please Check Your Query ';
            }
        
    }

    if ( isset ( $_POST['save_select'])){

echo "Login id:". $_POST['login']."<br>";

echo "DietPlan id:". $_POST['nutri']."<br>";

echo "Nutritionist id:". $_POST['plans']. "<br>";

echo "vegetarian:". $_POST['veg']. "<br>";

echo "Medications:". $_POST['drug']. "<br>";
}
    $conn ->close();
  
?>
