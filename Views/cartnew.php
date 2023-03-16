<?php
	  require("../php/session.php");
      $ActivePage = basename($_SERVER['PHP_SELF'], ".php");

      if (!isset($_SESSION['username'])) {
        $loginrequired = true;
        header("location:../Views/LoginD.php?loginrequired=$loginrequired");
      }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/cartStyle.css" />
        <link rel="stylesheet" href="../css/HomeStyle.css">
        <script src="../js/cart.js" async></script>
    </head>
    <body>
        <?php
    require("header.php");
    ?>
    
        <main>
            <section class="SupCart  content">
                <h2 class="topic">Supplements And Equipment</h2>
                <div class="supplements">
                    <div class="supplement">
                        <span class="supplement-title">Sup1</span>
                        <img class="supplement-image" src="../images/download7.jpg">
                        <div class="supplement-details">
                            <span class="supplement-price">500.00</span>
                            <button class="btn btn-primary supplement-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="supplement">
                        <span class="supplement-title">Sup2</span>
                        <img class="supplement-image" src="../images/download-1.jpg">
                        <div class="supplement-details">
                            <span class="supplement-price">800.00</span>
                            <button class="btn btn-primary supplement-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="supplement">
                        <span class="supplement-title">Sup3</span>
                        <img class="supplement-image" src="../images/download13.jpg">
                        <div class="supplement-details">
                            <span class="supplement-price">Rs 500.00</span>
                            <button class="btn btn-primary supplement-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="supplement">
                        <span class="supplement-title">Sup4</span>
                        <img class="supplement-image" src="../images/download12.jpg">
                        <div class="supplement-details">
                            <span class="supplement-price">Rs 8000.00</span>
                            <button class="btn btn-primary supplement-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="supplement">
                        <span class="supplement-title">Sup5</span>
                        <img class="supplement-image" src="../images/download10.jpg">
                        <div class="supplement-details">
                            <span class="supplement-price">Rs 3000.00</span>
                            <button class="btn btn-primary supplement-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="supplement">
                        <span class="supplement-title">Sup6</span>
                        <img class="supplement-image" src="../images/download4.jpg">
                        <div class="supplement-details">
                            <span class="supplement-price">Rs 4000.00</span>
                            <button class="btn btn-primary supplement-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="supplement">
                        <span class="supplement-title">Sup7</span>
                        <img class="supplement-image" src="../images/download8.jpg">
                        <div class="supplement-details">
                            <span class="supplement-price">Rs 5000.00</span>
                            <button class="btn btn-primary supplement-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="supplement">
                        <span class="supplement-title">Sup8</span>
                        <img class="supplement-image" src="../images/download5.jpg">
                        <div class="supplement-details">
                            <span class="supplement-price">Rs 2000.00</span>
                            <button class="btn btn-primary supplement-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    
                </div>
            </section>
            <section class="SupCart  content">
                <h2 class="">CART</h2>
                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">ITEM</span>
                    <span class="cart-price cart-header cart-column">PRICE</span>
                    <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                </div>
                <div class="cart-items">
                </div>
                <form action="payment.php" method="POST">
                    <div class="cart-total">
                        <strong class="cart-total-title">Total</strong>
                        <input class="cart-total-price" type="text" name="total" value="0" readonly/>
                        <input type="hidden" name="type" value="cart">
                    </div>
                    <input type="submit" name="submit" value="PURCHASE" class="btn-purchase" />
                </form>
            </section>    
        </main>
        <footer>
            <div class="footer">
                <div>
                    <p class="copyRSing">Copyright &#169; 2020 - FIT TO BE - All Rights Reserved</p>
                </div>  
                <div class="SocialLogos">
                    <a href="https://facebook.com" ><img src="../images/FBLogo.png" alt="Facebook"></a> 
                    <a href="https://instagram.com" ><img src="../images/InstaLogo.png" alt="Instagram"></a> 
                    <a href="https://twitter.com" ><img src="../images/TwitterLogo.png" alt="Twitter"></a> 
                    <a href="https://youtube.com" ><img src="../images/youtube.png" alt="Youtube"></a>  
                </div>
            </div>
        </footer>
        <script>
            document.getElementById("<?php echo $ActivePage; ?>").classList.add('active');
        </script>
    </body>
</html>