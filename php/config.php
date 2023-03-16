<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "oft";

$conn = new mysqli ($servername, $username, $password, $database );
//check connection
if( $conn->connect_error)
{
	die ( "Connection failed: " . $conn->connect_error);
}

?>