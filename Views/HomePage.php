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
    <!--  -->
</head>

<body>
    <?php
    require("header.php");
    ?>

    <script>
        document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
    </script>

    <main>
        <div class="hero-area">
            <div class="hero-area">
                <div class="block">
                    <div class="slidShow">
                        <img src="../images/banner2.jpg" alt="slide1">
                        <?php
                        if (isset($_SESSION['username'])) {
                            ?> <div class="description"><button class="midbtn" onclick="alreadyLoggedIn()">Sign Up Now!!!</button></div> <?php
                        } else {
                            ?> <div class="description"><a href="register.php"><button class="midbtn">Sign Up Now!!!</button></a></div> <?php
                        }
                        ?>
                    </div>
                    <div class="slidShow">
                        <img src="../images/Banner3.jpg" alt="slide2">
                        <div class="description"><a href="supp.php"><button class="midbtn">Visit Our Online Store!!!</button></a></div>
                    </div>
                    <div class="slidShow">
                        <img src="../images/Banner5.jpg" alt="slide3">
                        <div class="description"><a href="Fitness.php"><button class="midbtn">Select Your Own Trainer!!!</button></a></div>
                    </div>
                    <a class="leftArrow" onclick="increaseSlideNumber(-1)">❮</a>
                    <a class="rightArrow" onclick="increaseSlideNumber(1)">❯</a>
                </div>
            </div>
        </div>
        <?php
    require("footer.php");
    ?>
    </main>
    <section></section>
   
</body>
<script>
    var index = 1;
    displaySlides(index);

    function increaseSlideNumber(n) {
        displaySlides(index = index + n);
    }

    function displaySlides(n) {
        var slides = document.getElementsByClassName("slidShow");

        if (n > 3) {
            index = 1;
        }
        if (n < 1) {
            index = 3;
        }

        for (var i = 0; i < 3; i++) {
            slides[i].style.display = "none";
        }

        slides[index - 1].style.display = "block";
    }

    function alreadyLoggedIn() {
        alert("Already logged in, logout to register another account");
    }
</script>

</html>