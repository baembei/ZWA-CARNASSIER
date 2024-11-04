<!--TEST-->
<?php
$_SESSION['user_logged_in'] = true;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Account | Carnassier</title>
    <link rel="stylesheet" href="style/style-main.css">
</head>
<body>
    <?php include 'headers/header.php'; ?>
    <div class="first-body-container account-overview section">
        <div class="nepridumala ">
            <div class="nav-links">
                <p>Overview</p>
                <a>Orders</a>
                <a>Profile</a>
            </div>
            <a class="fall-title">Fall 2024</a>
            <div class="account-image">
                <img src="references/elordi2.jpeg" alt="Arrow" class="collection-image">
            </div>
            <a class="discover-link">DISCOVER THE WOMEN'S FALL 2024 COLLECTION</a>
        </div>
    </div>

    <footer class="section">
        <div class="footer-container">
            <div class="footer-column">
                <p>SHIPPING TO</p>
                <a href="#">UNITED STATES $ / EN &#x203A;</a>
            </div>
            <div class="footer-column">
                <a href="#">CLIENT SERVICE</a>
                <a href="#">SHIPPING & RETURNS</a>
                <a href="#">EMAIL US</a>
                <a href="#">+1 646 889 1961</a>
                <a href="#">TRACK ORDER</a>
                <a href="#">RETURN YOUR ORDER</a>
                <a href="#">MAKE AN APPOINTMENT &#x203A;</a>
            </div>
            <div class="footer-column">
                <a href="#">LEGAL NOTICES</a>
                <a href="#">COOKIES SETTINGS AND DO NOT SELL OR SHARE</a>
                <a href="#">ACCESSIBILITY</a>
                <a href="#">CAREER</a>
            </div>
            <div class="footer-column">
                <a href="#">SUBSCRIBE TO THE NEWSLETTER &#x203A;</a>
            </div>
        </div>

        <div class="footer-social">
            <a href="#"><img src="references/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="references/instagram.png" alt="Instagram"></a>
            <a href="#"><img src="references/youtube1.png" alt="YouTube"></a>
        </div>
    </footer>

    <script type="module" src="javascript/user-logged.js"></script>
    <script src="javascript/header.js"></script>
</body>
</html>