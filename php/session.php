<?php
session_start();
if(isset($_SESSION["username"]))
{
    $username_session = $_SESSION['username'];
}
?>