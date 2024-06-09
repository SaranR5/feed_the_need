<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed the Need</title>
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    
</head>
<body>
 <?php   
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login_p.php');
    exit();
}

include 'db.php';

$user_id = $_SESSION['user_id'];
$role = $_SESSION['role'];

include 'header.php';

echo "<h2>Welcome, {$_SESSION['name']}!</h2>";
echo "<a href='profile.php'>View/Edit Profile</a>";

if ($role == 'donor') {
    $result = $conn->query("SELECT * FROM food_surplus WHERE user_id = $user_id");
    $surplus_foods = $result->fetch_all(MYSQLI_ASSOC);

    $requests_result = $conn->query(
        "SELECT r.*, fs.food_description, u.name AS charity_name
         FROM requests r
         JOIN food_surplus fs ON r.surplus_id = fs.id
         JOIN users u ON r.charity_id = u.id
         WHERE fs.user_id = $user_id"
    );
    $requests = $requests_result->fetch_all(MYSQLI_ASSOC);

    echo "<h3>Your Surplus Food</h3>";
    echo "<table>
            <tr>
                <th>Description</th>
                <th>Quantity</th>
                <th>Available Until</th>
            </tr>";
    foreach ($surplus_foods as $food) {
        echo "<tr>
                <td>{$food['food_description']}</td>
                <td>{$food['quantity']}</td>
                <td>{$food['available_until']}</td>
              </tr>";
    }
    echo "</table>";

    echo "<h3>Add Surplus Food</h3>";
    echo "<form action='add_surplus.php' method='POST'>
            <label for='food_description'>Description:</label>
            <textarea id='food_description' name='food_description' required></textarea>
            <label for='quantity'>Quantity:</label>
            <input type='number' id='quantity' name='quantity' required>
            <label for='available_until'>Available Until:</label>
            <input type='datetime-local' id='available_until' name='available_until' required>
            <button type='submit'>Add</button>
          </form>";

    echo "<h3>Food Requests</h3>";
    echo "<table>
            <tr>
                <th>Charity</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>";
    foreach ($requests as $request) {
        echo "<tr>
                <td>{$request['charity_name']}</td>
                <td>{$request['food_description']}</td>
                <td>{$request['status']}</td>
                <td>";
        if ($request['status'] == 'pending') {
            echo "<a href='manage_request.php?id={$request['id']}&action=approve'>Approve</a>
                  <a href='manage_request.php?id={$request['id']}&action=decline'>Decline</a>";
        }
        echo "</td></tr>";
    }
    echo "</table>";

} else {

    $result = $conn->query(
        "SELECT fs.*, u.name AS donor_name
         FROM food_surplus fs
         JOIN users u ON fs.user_id = u.id"
    );
    $available_foods = $result->fetch_all(MYSQLI_ASSOC);

    $requests_result = $conn->query(
        "SELECT r.*, fs.food_description, u.name AS donor_name
         FROM requests r
         JOIN food_surplus fs ON r.surplus_id = fs.id
         JOIN users u ON fs.user_id = u.id
         WHERE r.charity_id = $user_id"
    );
    $requests = $requests_result->fetch_all(MYSQLI_ASSOC);

    echo "<h3>Available Food</h3>";
    echo "<table>
            <tr>
                <th>Donor</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Available Until</th>
                <th>Action</th>
            </tr>";
    foreach ($available_foods as $food) {
        echo "<tr>
                <td>{$food['donor_name']}</td>
                <td>{$food['food_description']}</td>
                <td>{$food['quantity']}</td>
                <td>{$food['available_until']}</td>
                <td><a href='request_food.php?id={$food['id']}'>Request</a></td>
              </tr>";
    }
    echo "</table>";

    echo "<h3>Your Requests</h3>";
    echo "<table>
            <tr>
                <th>Donor</th>
                <th>Description</th>
                <th>Status</th>
            </tr>";
    foreach ($requests as $request) {
        echo "<tr>
                <td>{$request['donor_name']}</td>
                <td>{$request['food_description']}</td>
                <td>{$request['status']}</td>
              </tr>";
    }
    echo "</table>";
}

include 'footer.php';
$conn->close();
?>    
</body>
</html>