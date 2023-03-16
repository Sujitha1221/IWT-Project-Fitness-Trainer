<?php 

    require_once("config.php");
    $query = " SELECT * FROM review ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Contact Us</title>
		<link rel="stylesheet" href="../css/review.css">
	
		
	</head>
	<body>
	<header>
        <div id="header-area">
            <div id="head-image">
                <img src="../images/Banner.png" alt="header Image" href="www.index.html">
            </div>
          <!--  <div id="topic">
                <h1>Fit To Be</h1>
            </div>  -->
            <div id="navigations">
                <ul>
                    <li>
                        <a href="Home page.php"> Home</a>
                        <a href="#">Online Store</a>
                        <a href="#">Fitness Plans</a>
                        <a href="#">Diet Plans</a>
                        <a href="#">About Us</a>
                        <a href="contact_us.php" >Contact Us</a>
                        <a href="Reviews.php" class = "active">Reviews</a>
                        <a href="#"><i class="fa fa-opencart" style="font-size:15px" aria-hidden="true"></i> Cart</a>
                        <a href="#">Login/Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
	
		<div class="form">
			<form>
			
			<table style="width:100%">
			<tr>
				<th>Full name</th>
				<th>Review</th>
				<th>Rating</th>
			</tr>
			
			<?php 
                                    
					while($row=mysqli_fetch_assoc($result))
					{
						$Fullname = $row['Full name'];
						$review = $row['Review'];
						$rating = $row['Rating'];
			  
					 <tr>
						<td><?php echo $Fullname; ?></td>
						<td><?php echo $review; ?></td>
						<td><?php echo $rating; ?></td>
						
					 </tr> 
				
					}
				?>
			
			
			
			
			</form>
		</div>
		</br>
		</br>	
	
		</br>		
		<footer>
        <div class="footer">
            <form method="post">
            <div>
                <p class="copyRSing">Copyright &#169; 2020 - FIT TO BE - All Rights Reserved</p>
            </div>  
            <div class="SocialLogos">
                <a href="https://facebook.com" ><img src="../images/FBLogo.png" alt="Facebook"></a> 
                <a href="https://instagram.com" ><img src="../images/InstaLogo.png" alt="Instagram"></a> 
                <a href="https://twitter.com" ><img src="../images/TwitterLogo.png" alt="Twitter"></a> 
                <a href="https://youtube.com" ><img src="../images/youtube_PNG.png" alt="Youtube"></a>  
            </div>
            </form>
        </div>
    </footer>
		
	
	</body>	
</html>