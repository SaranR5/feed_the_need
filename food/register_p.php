<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed the Need</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<?php include 'header.php'; ?>
<div class="form-container">
    <h2>Register</h2>
    <form action="register.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <div id="email-error" class="error-message">Email already exists.</div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="donor">Donor</option>
            <option value="charity">Charity</option>
        </select>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login_p.php">Login here</a>.</p>
</div>
<?php include 'footer.php'; ?>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const emailExists = urlParams.get('email_exists');
    if (emailExists === 'true') {
        document.getElementById('email-error').style.display = 'block';
    }
</script>
</body>
</html>
