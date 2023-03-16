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
    <link rel="stylesheet" href="../css/contact_us.css">
    
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
    <div class="form">
        <form method="post" action="../php/Contact.php">
            <h1>Contact us</h1>

            <h2>We'd love to hear from you</h2>
            <h3>Whether you're curious about our fitness plans,diet plans, free trials and store - we are ready to all possible inquiries</h3></br>

            <label class="textb">Full name</label>
            <input class="texta" type="text" name="fullname" id="Full name" placeholder="Full name" required>

            <label class="textb">Email</label>
            <input class="texta" type="email" name="mail" id="e-mail" placeholder="Email address" required>

            <label class="textb">Please enter your message</label>
            <input rows="6" cols="50" class="texta" name="question" id="Question" placeholder="Write your enquiries"></textarea>
            <input id="submit" class="submit" type="submit" onclick="showalert();" value="Submit" name="submit"></br></br>
            <input id="reset" class="reset" type="reset" value="Reset">
            </br>

        </form>
    </div>
    </br>
    </br>
    <div class="clear"></div>
    <?php require("footer.php"); ?>

</body>

</html>