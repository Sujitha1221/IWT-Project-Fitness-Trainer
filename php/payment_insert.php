<?php
require("config.php");
session_start();

$uname = $_SESSION['username'];
$lid = $_SESSION['lid'];
$total = $_POST['total'];

$query = "INSERT INTO purchase (username, amount) VALUES ('$uname', $total);";

$purchaseId = null;
if ($conn->query($query)) {
    $query = "SELECT id FROM purchase ORDER BY id DESC LIMIT 1;";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $purchaseId = $row['id'];
}

// adding to fitness_form and diet_form when necissary
if ($_POST['type'] == 'diet') {
    $dietPlanId = $_POST['dietPlanId'];
    $nutritionistId = $_POST['nutritionistId'];
    $vegetarian = $_POST['vegetarian'];
    $medications = $_POST['medications'];

    if ($vegetarian == 'yes') {
        $vegetarian = 1;
    }
    else {
        $vegetarian = 0;
    }

    echo "> vegeta " . $vegetarian . " <";
    // vegetarian hard coded for now, check later
    echo "> dietplanid " . $dietPlanId . " <";
    $query = "INSERT INTO diet_form VALUES ($lid, $dietPlanId, $nutritionistId, $vegetarian, '$medications', $purchaseId);";
    echo "<br/> $query <br/>";
    $conn->query($query);
    // INSERT INTO diet_form VALUES (userid, dietplanid, nutritionistid, vegetarian, medications, paymentid);
} else if ($_POST['type'] == 'fitness') {
    $fitnessPlanId = $_POST['fitnessPlanId'];
    $trainerId = $_POST['trainerId'];
    $inquiries = $_POST['inquiries'];

    $query = "INSERT INTO fitness_form VALUES ($lid, $fitnessPlanId, $trainerId, '$inquiries', $purchaseId);";
    echo "$query <br/>";
    $conn->query($query);
    // INSERT INTO fitness_form VALUES (userid, fitnessplanid, trainerid, inquiries, paymentid);
}

header('location:../Views/HomePage.php');
