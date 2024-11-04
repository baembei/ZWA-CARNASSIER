<?php
session_start();

if (isset($_SESSION['user_role'])) {
    if ($_SESSION['user_role'] === 'admin') {
        header("Location: add-product-contoller.php");
        exit();
    } elseif ($_SESSION['user_role'] === 'user') {
        header("Location: home-user-logged.php");
        exit();
    }
}

//require 'database.php';
//$conn = getDatabaseConnection();

//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    $email = strtolower(trim($_POST['email']));
//    $password = trim($_POST['password']);
//
//    $stmt = $conn->prepare("SELECT role, password FROM users WHERE email = ?");
//    $stmt->bind_param("s", $email);
//    $stmt->execute();
//    $stmt->store_result();
//
//    if ($stmt->num_rows > 0) {
//        $stmt->bind_result($role, $hashedPassword);
//        $stmt->fetch();
//
//        echo "<br><br><br>Role: " . ($role) . "<br>";
//        echo "Password: " . htmlspecialchars($password) . "<br>";
//        echo "Hashed Password: " . ($hashedPassword) . "<br>";
//        $bla = password_verify($password, $hashedPassword);
//        echo "pass-verify: " . ($bla ? 'true' : 'false') . "<br>";
//
//        if (password_verify($password, $hashedPassword)) {
//            $_SESSION['user_role'] = $role;
//            if ($role === 'admin') {
//                header("Location: add-product-contoller.php");
//            } else {
//                header("Location: home-user-logged.php");
//            }
//            exit();
//        } else {
//            echo "<p style='color:red;'>Invalid login or password. Remember that password is case-sensitive. Please try again.</p>";
//        }
//    } else {
//        echo "<p style='color:red;'>No user found with that email address.</p>";
//    }
//
//    $stmt->close();
//    $conn->close();
//}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Carnassier</title>
    <link rel="stylesheet" href="style/style-main.css">
</head>
<body class="sign-in-body">
    <?php include 'headers/header.php'; ?>
    <div class="sign-in-container">
        <section class="login-section">
            <p class="login-create">LOGIN</p>
            <form action="#" method="post">
                <div class="form-group">
                    <div class="form-header">
                        <label for="email">EMAIL *</label>
                        <p class="required-fields">*Required fields</p>
                    </div>
                    <input type="email" id="email" name="email" placeholder="EMAIL" required>
                    <label for="password">PASSWORD *</label>
                    <input type="password" id="password" name="password" placeholder="PASSWORD" required>
                    <p id="login-error" style="color:red; display:none;">Invalid login or password. Remember that password is case-sensitive. Please try again.</p>
                </div>

                <div class="form-group-checkbox">
                    <div class="remember-container">
                        <input type="checkbox" id="remember" name="remember">
                        <label class="remember" for="remember">REMEMBER ME</label>
                    </div>
                    <a class="forgot" href="#">FORGOT PASSWORD?</a>
                </div>

                <button type="submit" class="submit-btn">NEXT</button>
            </form>
        </section>

        <section class="register-section">
            <p class="login-create">CREATE AN ACCOUNT</p>
            <p class="description">ENJOY A FASTER CHECKOUT EXPERIENCE AND MANAGE ALL YOUR PERSONAL INFORMATION IN YOUR DEDICATED ACCOUNT.</p>
            <button class="submit-btn" onclick="window.location.href='create-account.php'">CREATE AN ACCOUNT</button>        </section>
    </div>

<?php include "footers/footer-scrollable.php"?>
    <script src="javascript/header.js"></script>
</body>
</html>