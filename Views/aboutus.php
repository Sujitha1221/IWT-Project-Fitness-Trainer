<?php
require("../php/session.php");
$ActivePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/about.css">
	
	<title>Fit To Be-about us</title>
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

	<section class="about">
		<div class="main">
			<img src="https://i.pinimg.com/originals/49/3f/2c/493f2c38da2a8346655ba88684a5791f.jpg">
			<div class="about-text">
				<h2> About Us</h2>
				<h5> Established Since @2020</h5>

				<p>FIT TO BE is bought you by METRO the first
					global fitness platform enabling many services
					to help you to be stay healthy life. </p>

				<p>We are on a mission to help trainers save
					time, deliever a better experience to their
					clients. We built FIT TO BE to help all around
					the people to stay strong life.</p>

				<a href="Home Page.php"><button type="button"> Back To Home </button></a>

				<hr>

				<br><br>

				<div class="quote">
					<h3>EXPERIENCE WORLD-CLASS PERSONAL TRAINING ONLINE 100%</h3>
					<h5>
						<center>We provide...</center>
					</h5>
				</div>

				<div class="gallery">
					<a target="_blank" href="https://media.istockphoto.com/photos/fitness-trainer-at-gym-picture-id1072395722?k=20&m=1072395722&s=612x612&w=0&h=zhxJbv4VDqOqt5JwXI7CgZ0CXfXtagmdtF2mSITW0eo=">
						<img src="https://media.istockphoto.com/photos/fitness-trainer-at-gym-picture-id1072395722?k=20&m=1072395722&s=612x612&w=0&h=zhxJbv4VDqOqt5JwXI7CgZ0CXfXtagmdtF2mSITW0eo=" alt="Quality trainers" width="600" height="400"></a>
					<div class="des"> Premium quality trainers to provide you the best personal training experience.</div>
				</div>

				<div class="gallery">
					<a target="_blank" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKD4O4OTKVEFXO5VpwLQ5C8R6U4QI54PiAIQ&usqp=CAU">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKD4O4OTKVEFXO5VpwLQ5C8R6U4QI54PiAIQ&usqp=CAU" alt="convenience" width="600" height="400"></a>
					<div class="des"> Workout anywhere,anytime with live video sessions with our qulified trainers' team.</div>
				</div>

				<div class="gallery">
					<a target="_blank" href="https://upjourney.com/wp-content/uploads/2019/09/how-much-do-personal-trainers-cost.jpg">
						<img src="https://upjourney.com/wp-content/uploads/2019/09/how-much-do-personal-trainers-cost.jpg" alt="journey" width="600" height="400"></a>
					<div class="des">Workouts tailored to your fitness level and goals.</div>
				</div>

				<div class="gallery">
					<a target="_blank" href="https://activeability.com.au/wp-content/uploads/2021/07/Active-Ability-nutritionist-vs-dietitian-scaled.jpg">
						<img src="https://activeability.com.au/wp-content/uploads/2021/07/Active-Ability-nutritionist-vs-dietitian-scaled.jpg" alt="trainers" width="600" height="400"></a>
					<div class="des"> Learn correct techniques, form and posture with feedback from your FITNESS trainer and NUTRITIONIST. </div>
				</div>


			</div>
		</div>

		<div class="clear"></div>

	</section>
	<?php require("footer.php"); ?>
</body>

</html>