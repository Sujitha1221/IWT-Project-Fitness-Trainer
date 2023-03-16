<?php
require("../php/session.php");
$ActivePage = basename($_SERVER['PHP_SELF'], ".php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Fit To Be</title>
    <link rel="icon" href="../images/favcon.png">
    <link rel="stylesheet" href="../css/review.css">

    <script type="text/javascript" src="../js/review.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    require("header.php");
    ?>
    <script>
        document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
    </script>
    <div class="clear"></div>

    <div class="reviewque">
        <br>
        <h1>Reviews</h1> <br>
        <div class="form">
            <form id="form1" method="post" action="../php/review.php">
                <h1>Review please!</h1>

                <label class="textb">Full name:</label><br>
                <input class="texta" type="text" name="Full name" id="Full name" placeholder="Full name"><br><br>

                <label class="textb">Review:</label><br>
                <textarea rows="6" cols="70" class="texta" name="Review" id="Review" placeholder="Write your review"></textarea><br><br>

                <label for="ratings" class="textb">Ratings:</label>

                <select name="Rating" id="Rating" class="textc">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br><br>

                <input id="submit" class="submit" type="submit" value="Submit" name="submit"></br></br>

            </form>
        </div>
    </div><br><br>
    <h1 id="cus">Customer Stories</h1><br><br>
    <section>
        <div id="mTable">
            <div class="m1">
                <p class="data">Great application for beginners and very user-friendly.Great selection if you are looking to get fit at home.I would prefer it for all age groups.</p>
                <p class="name">-Ann Fernando-</p><br><br><br><br><br><br>
                <p class="data">Unlike other apps, this application creates a workout plan specially for you.All you have to do is register,select a suitable plan and the trainer will take care of you.</p>
                <p class="name">-John Perera-</p><br><br><br><br><br>
                <p class="data">Trainers are very friendly.They keep motivating us whenever we feel tired or quitting.You can also customize your workout plan by disscussing with your trainer. I highly recommend this site</p>
                <p class="name">-Emma Bennett-</p><br><br><br>
                <p class="data">Very tiring,but also very fulfilling.Definitely try it if you want to build up muscle, keep fit, or lose weight</p>
                <p class="name">-Kamal Perera-</p><br><br><br>
                <p class="data">Simply amazing!Trainers will keep on motivating you.Variety of fitness plans are available.You can select according to your preference.</p>
                <p class="name">-Rehan Peiris-</p><br><br><br><br>
            </div>
            <div class="m2">

                <button type="button" id="btn1" class="rate" onclick="star('btn1')">Click me to see ratings</button><br><br>
                <img id="r1" src="../images/white.png" height="50" width="200"><br><br><br><br><br><br>
                <button type="button" id="btn2" class="rate" onclick="star('btn2')">Click me to see ratings</button><br><br>
                <img id="r2" src="../images/white.png" height="50" width="200"><br><br><br><br><br><br>
                <button type="button" id="btn3" class="rate" onclick="star('btn3')">Click me to see ratings</button><br><br>
                <img id="r3" src="../images/white.png" height="50" width="200"><br><br><br><br>
                <button type="button" id="btn4" class="rate" onclick="star('btn4')">Click me to see ratings</button><br><br>
                <img id="r4" src="../images/white.png" height="50" width="200"><br><br><br><br>
                <button type="button" id="btn5" class="rate" onclick="star('btn5')">Click me to see ratings</button><br><br>
                <img id="r5" src="../images/white.png" height="50" width="200"><br><br><br><br><br>


            </div>
            <div class="m3">

                <img class="gender" src="../images/1.jpg"><br><br><br><br>
                <img class="gender" src="../images/3_r.png"><br><br><br>
                <img class="gender" src="../images/2.png"><br><br><br><br>
                <img class="gender" src="../images/4_r.jpg"><br><br><br>
                <img class="gender" src="../images/5_r.png"><br><br><br><br>

            </div>
        </div>

        <br><br>
    </section>

    <?php require("footer.php"); ?>

</body>

</html>