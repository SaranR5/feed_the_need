<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'charity') {
    header('Location: login_p.php');
    exit();
}

include 'db.php';

$charity_id = $_SESSION['user_id'];
$surplus_id = $_GET['id'];

$sql = "INSERT INTO requests (charity_id, surplus_id) VALUES ('$charity_id', '$surplus_id')";

if ($conn->query($sql) === TRUE) {
    header('Location: dashboard.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
