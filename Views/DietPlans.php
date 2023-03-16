<?php
require("../php/session.php");
$ActivePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/dietPlan.css">
  
  <title>Fit To Be-Diet Plans</title>
  <link rel="icon" href="../images/favcon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <?php
  require("header.php");
  ?>
  <script>
    document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
  </script>

  <div class="initial">
    Dieting is a lot like dating—the process can be so daunting and
    draining you give up before you’ve found “the one.”
    Meet your match with our list of best diets based on your priorities, whether you want
    an overall great pick, need to boost your heart health or simply change your eating habits.
    <br>
    Our diet planns are designed by registered dietitians
    and food experts to help you lose weight, eat more fiber, go vegan and more.
    Browse more diet plan to find one that's right for you.
    <br>
    When you purchase your suitable diet plan, you'll assign to a nutritionist who
    is working in this field for more than 2 years. According to your age, gender,
    health conditions they'll provide meal plan for you for the selected
    period of time, diet chart including which foods should be
    included or excluded and also the proper time slots to eat food.
    <br><br>
    <center>"Work hard till you reach your fitness goal and We 'FIT TO BE' is always there
      behind you as a backbone to help you acheive your goal"</center>
    <br>
  </div>
  <!-- box-1 -->
  <div class="corner">
    <div class="Diets">
      <img src="../images/medi1.jpg">
      <div class="dietOverlay">
        <center><a href="dietPlansform.php"><button class="viewDiet">Purchase Plan</button></a></center>
      </div>
    </div>
    <div class="text">
      <br>
      <p class="head"><b>1.Mediterranean diet</b></p>
      <p>The Mediterranean diet is based on foods that people in countries like Italy and Greece have traditionally eaten. Rich in fresh fruit, vegetables, legumes, whole grains and fish while restricting refined grainsprocessed meat, sugar and other highly processed foods. This diet yields health benefits, including increased life expectancy,reduced risk of chronic disease and improved quality of life </p>
      <br>
      <p style="font-size: 21px;">Price=4000.00</p>
      <a href="dietPlansform.php"><button class="buy">Click here to purchase →</button></a>
    </div>

  </div>
  <br>
  <!-- box-2 -->
  <div class="corner">
    <div class="Diets">
      <img src="../images/volumetrics-diet.jpg">
      <div class="dietOverlay">
        <center><a href="dietPlansform.php"><button class="viewDiet">Purchase Plan</button></a></center>
      </div>
    </div>
    <div class="text">

      <p class="head"><b>2.Volumetrics Diet</b></p>
      <p>On the Volumetrics diet, you eat foods with lower caloric density, which is determined by dividing the number of calories by the number of grams found on food labels. The idea is you can feel full while still shedding pounds. Lower caloric density foods are typically high in fiber and water content.Foods Emphasized are fresh fruit, Vegetables
        Soups,Whole-grain pasta,Low-fat poultry,Low-fat dairy and high calorie density food is restricted. </p>
      <br>
      <p style="font-size: 21px;">Price=6000.00</p>
      <a href="dietPlansform.php"><button class="buy">Click here to purchase →</button></a>
    </div>
  </div>
  <br>
  <!-- box-3 -->
  <div class="corner">
    <div class="Diets">
      <img src="../images/PaleoDiet.jpg">
      <div class="dietOverlay">
        <center><a href="dietPlansform.php"><button class="viewDiet">Purchase Plan</button></a></center>
      </div>
    </div>
    <div class="text">

      <p class="head"><b>3.Paleo Diet</b></p>
      <p>The aim of a paleo diet is to return to a way of eating that's more like what early humans ate. The diet's reasoning is that the human body is genetically mismatched to the modern diet that emerged with farming practices -an idea known as the discordance hypothesis.The diet avoids processed food and typically includes vegetables, fruits, nuts, roots, and meat and excludes dairy products, grains, sugar, legumes, processed oils, salt, alcohol, and coffee. </p>
      <br>
      <p style="font-size: 21px;">Price=7000.00</p>
      <a href="dietPlansform.php"><button class="buy">Click here to purchase →</button></a>
    </div>
  </div>
  <br>
  <!-- box-4 -->
  <div class="corner">
    <div class="Diets">
      <img src="../images/ketodiet.jpg">
      <div class="dietOverlay">
        <center><a href="dietPlansform.php"><button class="viewDiet">Purchase Plan</button></a></center>
      </div>
    </div>
    <div class="text">

      <p class="head"><b>4.Keto Diet</b></p>
      <p>A keto diet is especially useful for losing excess body fat without hunger, and for improving type 2 diabetes or metabolic syndrome.On a keto diet, you cut way back on carbohydrates, also known as carbs, in order to burn fat for fuel.It includes foods such as meat, fish, eggs, butter, nuts, healthy oils, avocados, and plenty of low carb veggies.It eleiminates carb-based foods like grains, sugars, legumes, rice, potatoes, candy, juice, and even most fruits. </p>
      <br>
      <p style="font-size: 21px;">Price=4500.00</p>
      <a href="dietPlansform.php"><button class="buy">Click here to purchase →</button></a>
    </div>
  </div>
  <br>
  <!-- box-5 -->
  <div class="corner">
    <div class="Diets">
      <img src="../images/dashdiet.jpg">
      <div class="dietOverlay">
        <center><a href="dietPlansform.php"><button class="viewDiet">Purchase Plan</button></a></center>
      </div>
    </div>
    <div class="text">

      <p class="head"><b>5.Dash Diet</b></p>
      <p>Dietary Approaches to Stop Hypertension, or DASH, is an eating plan designed to help treat or prevent high blood pressure, which is clinically known as hypertension.Studies have also linked it to additional benefits for your heart and reduced risks of other chronic diseases.It includes fat-free or low-fat dairy products, fish, poultry, beans and nuts. It limits foods that are high in saturated fat, such as fatty meats and full-fat dairy products. </p>
      <br>
      <p style="font-size: 21px;">Price=7500.00</p>
      <a href="dietPlansform.php"><button class="buy">Click here to purchase →</button></a>
    </div>
  </div>
  <br>
  <!-- box-6 -->
  <div class="corner">
    <div class="Diets">
      <img src="../images/mind-diet.jpg">
      <div class="dietOverlay">
        <center><a href="dietPlansform.php"><button class="viewDiet">Purchase Plan</button></a></center>
      </div>
    </div>
    <div class="text">

      <p class="head"><b>6.Mind Diet</b></p>
      <p>The Mediterranean-DASH Intervention for Neurodegenerative Delay (MIND) diet combines aspects of the Mediterranean and DASH diets to create an eating pattern that focuses on brain health. This diet emphasizes a plant-based plate and limited intake of animal products and highly-saturated fats. Specifically, it highlights leafy green vegetables and berries. </p>
      <br>
      <p style="font-size: 21px;">Price=6000.00</p>
      <a href="dietPlansform.php"><button class="buy">Click here to purchase →</button></a>
    </div>
  </div>
  <br>
  <!-- box-7 -->
  <div class="corner">
    <div class="Diets">
      <img src="../images/veg.jpg">
      <div class="dietOverlay">
        <center><a href="dietPlansform.php"><button class="viewDiet">Purchase Plan</button></a></center>
      </div>
    </div>
    <div class="text">
      <p class="head"><b>7.Vegetarian Diet</b></p>
      <p>A vegetarian diet does not include any meat, poultry, or seafood. It is a meal plan made up of foods that come mostly from plants. These include vegetables,fruits, whole A well-planned vegetarian diet can meet your nutrition needs. Reducing the amount of meat in your diet may improve your health. Vegetarian diet may help you to reduce your chance of obesity,reduce your risk for heart disease,lower your blood pressure and lower your risk for type 2 diabetes. </p>
      <br>
      <p style="font-size: 21px;">Price=6500.00</p>
      <a href="dietPlansform.php"><button class="buy">Click here to purchase →</button></a>
    </div>
  </div>
  <br>
  <!-- box-8 -->
  <div class="corner">
    <div class="Diets">
      <img src="../images/mayo.jpg">
      <div class="dietOverlay">
        <center><a href="dietPlansform.php"><button class="viewDiet">Purchase Plan</button></a></center>
      </div>
    </div>
    <div class="text">
      <p class="head"><b>8.Mayo Clinic Diet</b></p>
      <p>Designed to be a lifestyle change over a quick fix, the Mayo Clinic diet focuses on replacing less healthy behaviors with ones that are more likely to support longevity and weight loss.Rather than banning certain foods, the Mayo Clinic diet uses a pyramid to encourage exercise and illustrate quantities of foods you should be consuming.Fruits, vegetables, and physical activity make up the base of the pyramid,
        followed by carbs in the next layer, then protein and dairy, fats, and finally, sweets.</p>
      <br>
      <p style="font-size: 21px;">Price=8000.00</p>

      <a href="dietPlansform.php"><button class="buy">Click here to purchase →</button></a>
    </div>
  </div>
  <br>
  <!-- box-9 -->
  <div class="corner">
    <div class="Diets">
      <img src="../images/weight.jpg">
      <div class="dietOverlay">
        <center><a href="dietPlansform.php"><button class="viewDiet">Purchase Plan</button></a></center>
      </div>
    </div>
    <div class="text">
      <p class="head"><b>9.Weight Gain Diet</b></p>
      <p>Weight gain diet plan focuses on high calorie and good quality protein intake.and it also includes a healthy, well-balanced diet rather than just empty calories and fats. It isa proper diet plan for weight gain provides you with essential nutrients while helping you build muscle mass.The primary aim of this diet plan is to provide you with more calories than what you burn in a day.and it includes an increased intake of all the macronutrients such as carbohydrates, proteins, healthy fats, and calories.</p>
      <br>
      <p style="font-size: 21px;">Price=7500.00</p>
      <a href="dietPlansform.php"><button class="buy">Click here to purchase →</button></a>
    </div>
  </div>
  <br><br>
  <div class="nutrila">
    <p>
      <center><b>Our Nutritionists</b></center>
    </p>
  </div>
  <br><br>
  <div class="card3">

    <div class="card1"><br><br>
      <img src="../images/dietician.jpg" alt="nutritionist" class="dietician">
      <div class="container">
        <h4>
          <center><b>Jane Benett</b></center>
        </h4>
        <p>Qualification-Completed Diet and Nutrition Coach Certification: Beginner to Advanced<br>Experience-5 years<br>Nutritionist_id-1<br></p>
      </div>
    </div>

    <div class="card1"><br><br>
      <img src="../images/man.jpg" alt="nutritionist" class="dietician">
      <div class="container">
        <h4>
          <center><b>John Kennedy</b></center>
        </h4>
        <p>Qualification-registered nutritionist RNutr with nutrition specialism in nutrition science<br>Experience-8 years<br>Nutritionist_id-2<br></p>
      </div>
    </div>

    <div class="card1"><br><br>
      <img src="../images/nutri la.jpg" alt="nutritionist" class="dietician">
      <div class="container">
        <h4>
          <center><b>Angel Rochell</b></center>
        </h4>
        <p>Qualification-associate nutritionist (ANutr)<br>Experience-2 years<br>Nutritionist_id-3<br></p>
      </div>
    </div>

    <div class="card1"><br><br>
      <img src="../images/chinNut.jpg" alt="nutritionist" class="dietician">
      <div class="container">
        <h4>
          <center><b>Qin Yu Chi</b></center>
        </h4>
        <p>Qualification-Completed Child Nutrition and Cooking<br>Experience-4 years<br>Nutritionist_id-4<br></p>
      </div>
    </div>

    <div class="card1"><br><br>
      <img src="../images/girly.jpg" alt="nutritionist" class="dietician">
      <div class="container">
        <h4>
          <center><b>Christiana Micheal</b></center>
        </h4>
        <p>Qualification-Completed weight management Course<br>Experience-6 years<br>Nutritionist_id-5<br></p>
      </div>
    </div>

    <div class="card1"><br><br>
      <img src="../images/good.jpg" alt="nutritionist" class="dietician">
      <div class="container">
        <h4>
          <center><b>Selena Bieber</b></center>
        </h4>
        <p>Qualification-Completed Diet and Nutrition Coach<br>Experience-3 years<br>Nutritionist_id-6<br></p>
      </div>
    </div>

  </div>
  <br><br>
  <br><br>
  <div class="clear"></div>
  <?php require("footer.php"); ?>
</body>

</html>