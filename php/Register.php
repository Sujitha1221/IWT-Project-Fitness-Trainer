
<?php

    require("config.php");

    if(isset($_POST['submit']))
    {
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phonenum = $_POST['phone_num'];
            $birthday = $_POST['birthday'];
            $username = $_POST['username'];
            $pword = $_POST['user-password'];
            $repeat = $_POST['password-repeat'];

            $query = " INSERT INTO  login (username,password) values('$username','$pword')";
            if($conn->query($query))
            {
                echo"success";
            }
            else
            {
                echo 'Please Check Your Query ';
            }

            $query = " INSERT INTO register (First_name,Last_name,Gender,Email,Address,Mobile_number,DOB,Pword,username) VALUES
                ('$firstname','$lastname','$gender','$email','$address','$phonenum','$birthday','$pword','$username')";
            if($conn->query($query))
            {
                echo"success";
            }
            else
            {
                echo 'Please Check Your Query ';
            }
            
    }
    header("location:../Views/LoginD.php");
    $conn ->close();
  
?>











































