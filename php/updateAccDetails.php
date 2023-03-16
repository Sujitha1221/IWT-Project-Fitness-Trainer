<?php
session_start();
require("../php/config.php");

$username = $_SESSION['username'];

$firstName = $_POST['fname'];
$lasttName = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];
$mobile = $_POST['phone_num'];
$dob = $_POST['birthday'];

$query = "UPDATE register SET 
                First_name='$firstName',
                Last_name='$lasttName',
                Gender='$gender',
                Email='$email',
                Address='$address',
                Mobile_number='$mobile',
                DOB='$dob'
            WHERE username='$username'";
$result = $conn->query($query);

header('location:../Views/Logout.php');
?>