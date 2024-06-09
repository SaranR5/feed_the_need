<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'donor') {
    header('Location: login_p.php');
    exit();
}

include 'db.php';

$request_id = $_GET['id'];
$action = $_GET['action'];
$status = ($action == 'approve') ? 'approved' : 'declined';

$sql = "UPDATE requests SET status='$status' WHERE id=$request_id";
if ($conn->query($sql) === TRUE) {
    if ($action == 'approve') {
        $delete_surplus_sql = "DELETE FROM food_surplus WHERE id = (SELECT surplus_id FROM requests WHERE id = $request_id)";
        if ($conn->query($delete_surplus_sql) === TRUE) {
            header('Location: dashboard.php');
        } else {
            echo "Error deleting surplus food: " . $conn->error;
        }
    } else {
        header('Location: dashboard.php');
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
