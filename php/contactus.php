
<?php

    require("config.php");

    if(isset($_POST['submit']))
    {
            $fullname = $_POST['fullname'];
            $email = $_POST['mail'];
            $question = $_POST['question'];

            $query = " INSERT INTO contact_us(Fullname,email,Question) values('$fullname','$email','$question')";

            if($conn->query($query))
            {
              echo"success";
            }
            else
            {
                echo 'Please Check Your Query ';
            }
        
    }<br><br>

    if ( isset ( $_POST['submit'])){

echo "Full name :". $_POST['fullname']."<br>";

echo "E-mail :". $_POST['mail']."<br>";

echo "Question :". $_POST['question']. "<br>";
}
    $conn ->close();
  
?>


















