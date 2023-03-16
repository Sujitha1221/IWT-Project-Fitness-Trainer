<?php
require("../php/session.php");
$ActivePage = basename($_SERVER['PHP_SELF'], ".php");
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
        <div class="fitness-plans">
            <div class="seperator"></div>
            <div class="fplans">
                <div class="ftitle">
                    <h2>1.Build Muscle-Men</h2>
                    <p>Price-5000.00</p>
                </div>

                <div class="fcontent">
                    <br>
                    <h3>10 Week Mass Building Program</h3>
                    <p>This workout is designed to increase your muscle mass as much as possible in 10 weeks. Works each muscle group hard once per week using mostly heavy compound exercises.</p><br>
                </div>
                <div class="fpics">
                    <img src="../images/men1.jpg" alt="Build Muscle-Men">
                </div>

                <div class="fplan-button">
                    <a href="fitnessform.php"><button id="btn1">Buy</button></a>
                </div>
            </div>
            <div class="fplans">
                <div class="ftitle">
                    <h2>2.Loss Fat-Men</h2>
                    <p>Price-7000.00</p>
                </div>
                <div class="fcontent">
                    <br>
                    <h3>12 Week Fat Destroyer</h3>
                    <p>Complete Fat Loss Workout & Diet Program</p>
                </div>
                <div class="fpics">
                    <img src="../images/men2.jpg" alt="Loss Fat-Men">
                </div>
                <div class="fplan-button">
                    <a href="fitnessform.php"><button id="btn2">Buy</button></a>
                </div>
            </div>
            <div class="fplans">
                <div class="ftitle">
                    <h2>3.Build Muscle-women</h2>
                    <p>Price-6000.00</p>
                </div>
                <div class="fcontent">
                    <br>
                    <h3>Women's 3-Day Glute Building Workout</h3>
                    <p>This full-body plan will help maximize your glute gains and get you in great shape. Two accessory workouts are also included that will fire up your glute growth!</p>
                </div>
                <div class="fpics">
                    <img src="../images/women1.jpg" alt="Buld Muscle-women">
                </div>
                <div class="fplan-button">
                    <a href="fitnessform.php"><button id="btn3">Buy</button></a>
                </div>
            </div>
            <div class="fplans">
                <div class="ftitle">
                    <h2>4.Loss Fat-Women</h2>
                    <p>Price-8000.00</p>
                </div>
                <div class="fcontent">
                    <br>
                    <h3>12 week women strength program</h3>
                    <p>This 12 week women's specific training program is perfect for any healthy woman who is looking to transform her body through a good weight lifting program.</p>
                </div>
                <div class="fpics">
                    <img src="../images/women2.jpg" alt="Loss Fat-Women">
                </div>
                <div class="fplan-button">
                    <a href="fitnessform.php"><button id="btn5">Buy</button></a>
                </div>
            </div>
            <div class="fplans">
                <div class="ftitle">
                    <h2>5.General Fitness</h2>
                    <p>Price-5500.00</p>
                </div>
                <div class="fcontent">
                    <br>
                    <h3>The Best 15-Minute Warm-Ups</h3>
                    <p>Maximize your workout with these versatile and quick warm-up routines! In just 15 minutes, you will be better prepared for any workout program that you take on.</p>
                </div>
                <div class="fpics">
                    <img src="../images/menwomen.jpg" alt="General Fitness">
                </div>
                <div class="fplan-button">
                    <a href="fitnessform.php"><button id="btn6">Buy</button></a>
                </div>
            </div>
            <div class="fplans">
                <div class="ftitle">
                    <h2>6.Cardio Workout</h2>
                    <p>Price-7000.00</p>
                </div>
                <div class="fcontent">
                    <br>
                    <h3>40 Minute Blast - Abs, Cardio Workout</h3>
                    <p>A cardio, weights and abs workout perfect for those days when you need to do something fun at the gym. Simply grab a heavy and light set of dumbbells and go!</p>
                </div>
                <div class="fpics">
                    <img src="../images/cardio.jpg" alt="Cardio Workout">
                </div>
                <div class="fplan-button">
                    <a href="fitnessform.php"><button id="btn7">Buy</button></a>
                </div>
            </div>
        </div>
        <div class="infoSections">
            <h2>Our Trainers,<br></h2>
            <div class="container">
                <div class="infos">
                    <img src="../images/trainer1.jpg" alt="Kayla Itsines">
                    <h2>Kayla Itsines</h2>
                    <p>Qualification : Bachelor's degree in exercise science. </p>
                    <p>Experience : 5 years </p>
                    <p>Trainer ID : 1</p>
                </div>
            </div>
            <div class="container">
                <div class="infos">
                    <img src="../images/trainer2.jpg" alt="Jamie Eason">
                    <h2>Jamie Eason</h2>
                    <p>Qualification : Bachelor's degree in kinesiology.</p>
                    <p>Experience: 7 years </p>
                    <p>Trainer ID : 2</p>
                </div>
            </div>
            <div class="container">
                <div class="infos">
                    <img src="../images/trainer4.jpg" alt="Gunnar Peterson">
                    <h2>Gunnar Peterson</h2>
                    <p>Qualification : Diploma in exercise science </p>
                    <p>Experience : 2 years </p>
                    <p>Trainer ID : 3</p>
                </div>
            </div>
            <div class="container">
                <div class="infos">
                    <img src="../images/trainer5.jpg" alt="Harley Pasternak">
                    <h2>Harley Pasternak</h2>
                    <p>Qualification : Bachelor's degree in sport science </p>
                    <p>Experience : 10 years</p>
                    <p>Trainer ID : 4</p>
                </div>
            </div>
            <div class="container">
                <div class="infos">
                    <img src="../images/trainer6.jpg" alt="Joe Wicks">
                    <h2>Joe Wicks</h2>
                    <p>Qualification : Bachelor's degree in sport science</p>
                    <p>Experience : 5 years </p>
                    <p>Trainer ID : 5</p>
                </div>
            </div>
            <div class="container">
                <div class="infos">
                    <img src="../images/trainer7.jpg" alt="Bob Harper">
                    <h2>Bob Harper</h2>
                    <p>Qualification : Diploma in kinesiology</p>
                    <p>Experience : 2 years</p>
                    <p>Trainer ID : 6</p>
                </div>
            </div>
        </div>
        <div class="seperator"></div>
    </main>

    <?php require("footer.php"); ?>
</body>

</html>