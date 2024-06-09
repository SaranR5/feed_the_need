<div class="navbar">
    <a style="text-decoration: none; color: black;" href="index.php">
        <div class="name"><span style="font-weight: bold; font-style: oblique;">Feed</span> the Need</div>
    </a>
    <div class="nav">
        <ul>
            <li><a href="aboutus.php">About Us</a></li>
            <?php if(isset($_SESSION['user_id'])): ?>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login_p.php">Login</a></li>
                <li><a href="#conti">Contact Us</a></li>
                <li><a href="why.php">Why it Matters</a></li>
                <li><a href="faq.php">FAQ's</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
