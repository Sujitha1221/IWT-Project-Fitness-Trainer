<link rel="stylesheet" href="../css/header.css">
<?php
if(isset($_SESSION["username"]))
    $loginButtonText = "USER " . $_SESSION['username'];
else
    $loginButtonText = "Login/Register";
?>
<header>

        <div id="header-area">
            <div id="head-image">
               <img src="../images/Banner.png" alt="header Image">
            </div>
          <!--  <div id="topic">
                <h1>Fit To Be</h1>
            </div>  -->
            <div id="navigations">
                <ul>
                    <li>
                        <a href="Homepage.php" id="Homepage"> Home</a>
                        <a href="supp.php" id="supp" >Online Store</a>
                        <a href="Fitness.php" id="Fitness">Fitness Plans</a>
                        <a href="DietPlans.php"  id="DietPlans">Diet Plans</a>
                        <a href="aboutus.php"  id="aboutus">About Us</a>
                        <a href="contactUs.php" id="contactUs" >Contact Us</a>
                        <a href="Reviews.php" id="Reviews">Reviews</a>
                        <a href="cartnew.php" id="cartnew"> Cart</a>
                        <a href="LoginD.php" id="LoginD"><?php echo $loginButtonText ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>