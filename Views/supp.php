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
    <title>Fit TO Be</title>
    <link rel="icon" href="../images/favcon.png">
    <link rel="stylesheet" href="../css/supp and equip.css">
    <script type="text/javascript" src="../js/contactus.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    


</head>

<body>
    <?php
    require("header.php");
    ?>
    <script>
        document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
    </script>

    <br><br>

    <!-- box-1 -->
    <div class="bg">

        <div class="item-box" style="background-image: url(../images/download7.jpg);">

            <div class="item-box-overlay">



                <center><a href="cartnew.php"><button class="item-view-button">Add to Cart</button></a></center>


            </div>
            <div class="item-box-disc">
                <p>Protein Bar [peanut butter]</p>
                <p>Rs.500</p>
            </div>

        </div>





        <!-- box-2 -->
        <div class="item-box" style="background-image: url(../images/download-1.jpg);">

            <div class="item-box-overlay">



                <center><a href="cartnew.php"><button class="item-view-button">Add to Cart</button></a></center>


            </div>
            <div class="item-box-disc">
                <p>PAK energy drink<br>
                <p>Rs.800</p>
                </p>
            </div>

        </div>



        <!-- box-3 -->
        <div class="item-box" style="background-image: url(../images/download13.jpg);">

            <div class="item-box-overlay">



                <center><a href="cartnew.php"><button class="item-view-button">Add to Cart</button></a></center>


            </div>
            <div class="item-box-disc">
                <p>Protein Bar[chocolate sea salt]</p>
                <p>Rs.500</p>
            </div>

        </div>




        <!-- box-4 -->
        <div class="item-box" style="background-image: url(../images/download12.jpg);">

            <div class="item-box-overlay">



                <center><a href="cartnew.php"><button class="item-view-button">Add to Cart</button></a></center>


            </div>
            <div class="item-box-disc">
                <p>Whey protein mass gainer<br>
                <p>Rs.8000</p>
                </p>
            </div>

        </div>





        <!-- box-5 -->
        <div class="item-box" style="background-image: url(../images/download10.jpg);">

            <div class="item-box-overlay">



                <center><a href="cartnew.php"><button class="item-view-button">Add to Cart</button></a></center>


            </div>
            <div class="item-box-disc">
                <p>Best Ceratine<br>
                <p>Rs.3000</p>
                </p>
            </div>

        </div>


        <!-- box-6 -->
        <div class="item-box" style="background-image: url(../images/download4.jpg);">

            <div class="item-box-overlay">



                <center><a href="cartnew.php"><button class="item-view-button">Add to Cart</button></a></center>


            </div>
            <div class="item-box-disc">
                <p>The SHADOW pre-workout<br>
                <p>Rs.4000</p>
                </p>
            </div>

        </div>




        <!-- box-7 -->
        <div class="item-box" style="background-image: url(../images/download8.jpg);">

            <div class="item-box-overlay">



                <center><a href="cartnew.php"><button class="item-view-button">Add to Cart</button></a></center>


            </div>
            <div class="item-box-disc">
                <p>Testrol GOLD ES<br>
                <p>Rs.5000</p>
                </p>
            </div>

        </div>





        <!-- box-8 -->
        <div class="item-box" style="background-image: url(../images/download5.jpg);">

            <div class="item-box-overlay">



                <center><a href="cartnew.php"><button class="item-view-button">Add to Cart</button></a></center>


            </div>
            <div class="item-box-disc">
                <p>CARNIVOR MASS<br>
                <p>Rs.2000</p>
                </p>
            </div>

        </div>


        <div class="clear"></div>
    </div>
    <?php require("footer.php"); ?>

</body>

</html>