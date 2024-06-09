<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'donor') {
    header('Location: login_p.php');
    exit();
}

include 'db.php';

$user_id = $_SESSION['user_id'];
$food_description = $_POST['food_description'];
$quantity = $_POST['quantity'];
$available_until = $_POST['available_until'];

$sql = "INSERT INTO food_surplus (user_id, food_description, quantity, available_until) VALUES ('$user_id', '$food_description', '$quantity', '$available_until')";

if ($conn->query($sql) === TRUE) {
    header('Location: dashboard.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
