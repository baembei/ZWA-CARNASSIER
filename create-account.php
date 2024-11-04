<?php

//require 'database.php';
//$conn = getDatabaseConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $firstName = htmlspecialchars(trim($_POST['first-name']));
    $lastName = htmlspecialchars(trim($_POST['last-name']));
    $email = strtolower(trim($_POST['email']));
    $country = $_POST['country'];
    $password = trim($_POST['password']);
    $offersConsent = isset($_POST['offers-consent']) ? 1 : 0;

    $firstName = ucwords(strtolower($firstName));
    $lastName = ucwords(strtolower($lastName));

    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";

    $birthDay = htmlspecialchars(trim($_POST['birth-day']));
    $birthMonth = htmlspecialchars(trim($_POST['birth-month']));
    $birthYear = htmlspecialchars(trim($_POST['birth-year']));

    $birthdate = sprintf('%04d-%02d-%02d', $birthYear, $birthMonth, $birthDay);

    $dateOfBirth = DateTime::createFromFormat('Y-m-d', $birthdate);

    if (!$dateOfBirth || $dateOfBirth->format('Y-m-d') !== $birthdate) {
        echo "Invalid date format.";
    } else {
        $currentDate = new DateTime();
        $age = $currentDate->diff($dateOfBirth)->y;
        if ($age < 15) {
            echo "You must be at least 15 years old to register.";
            exit;
        }
    }

    $errors = [];

    if (empty($title) || empty($firstName) || empty($lastName) || empty($birthMonth) || empty($birthDay) || empty($birthYear) || empty($country) || empty($email) || empty($password)) {
        $errors[] = "All fields are required.";
    }

    if (!$email) {
        echo "Invalid email format";
    }

    if (strlen($_POST['password']) < 8) {
        echo "Password must be at least 8 characters long";
    }

    if ($_POST['password'] !== $_POST['confirm-password']) {
        echo "Passwords do not match!";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

//    $sql = "INSERT INTO users (title, first_name, last_name, birth_date, country, email, password, offers_consent)
//            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
//    $stmt = $conn->prepare($sql);
//    $stmt->bind_param("sssssssi", $title, $firstName, $lastName, $birthdate, $country, $email, $hashedPassword, $offersConsent);
//    if ($stmt->execute()) {
////        header("Location: home-user-logged.php");
//        exit();
//    } else {
//        echo "Error: " . $stmt->error;
//    }
//
//    $stmt->close();
//    $conn->close();

}

$currentYear = date('Y');
$minYear = $currentYear - 15;
$maxYear = $currentYear - 99;

?>


<?php
$_SESSION['user_logged_in']=false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style/style-main.css">
</head>
<body>

<?php include 'headers/header.php'; ?>

<div class="create-account-container">
    <div class="form-section">
        <h2>Create an Account</h2>
        <p class="p-benefits">Register at Carnassier.com to enjoy the benefits of your account:</p>

        <form action="" method="post">
            <div class="form-group">
                <div class="form-header">
                    <label for="title">Title*</label>
                    <p class="required-fields">*Required fields</p>
                </div>
                <select id="title" name="title" required>
                    <option value="" disabled selected>Title*</option>
                    <option value="mr">Mr</option>
                    <option value="ms">Ms</option>
                </select>
            </div>


            <div class="form-group">
                <label for="first-name">First Name*</label>
                <input type="text" id="first-name" name="first-name" placeholder="First Name*" required>
                <p id="name-error" style="color:red; display:none;">Please enter a valid First Name (letters only).</p>
            </div>

            <div class="form-group">
                <label for="last-name">Last Name*</label>
                <input type="text" id="last-name" name="last-name" placeholder="Last Name*" required>
                <p id="last-name-error" style="color:red; display:none;">Please enter a valid Last Name (letters only).</p>
            </div>

            <div class="form-group">
                <label for="birth-month">DATE OF BIRTH*</label>
                <div class="birth-date-group">
                    <select id="birth-month" name="birth-month" required>
                        <option value="" disabled selected>Month*</option>
                        <?php
                        $months = [
                            '01' => 'January',
                            '02' => 'February',
                            '03' => 'March',
                            '04' => 'April',
                            '05' => 'May',
                            '06' => 'June',
                            '07' => 'July',
                            '08' => 'August',
                            '09' => 'September',
                            '10' => 'October',
                            '11' => 'November',
                            '12' => 'December',
                        ];
                        foreach ($months as $value => $name) {
                            echo "<option value=\"$value\">$name</option>";
                        }
                        ?>
                    </select>

                    <select id="birth-day" name="birth-day" required>
                        <option value="" disabled selected>Day*</option>
                        <?php for ($i = 1; $i <= 31; $i++): ?>
                            <option value="<?= str_pad($i, 2, '0', STR_PAD_LEFT); ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>

                    <select id="birth-year" name="birth-year" required>
                        <option value="" disabled selected>Year*</option>
                        <?php for ($year = $maxYear; $year <= $minYear; $year++): ?>
                            <option value="<?= $year; ?>"><?= $year; ?></option>
                        <?php endfor; ?>
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label for="country">COUNTRY/REGION OF RESIDENCE*</label>
                <select id="country" name="country" required>
                    <option value="" disabled selected>Country*</option>
                    <option value="KAZ">Kazakhstan</option>
                    <option value="CZE">Czech Republic</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email Address*</label>
                <input type="email" id="email" name="email" placeholder="Email Address*" required>
            </div>

            <div class="form-group">
                <label for="password">Password*</label>
                <input type="password" id="password" name="password" required placeholder="Password*">
                <button type="button" id="togglePassword">Show Password</button>
                <p id="password-error" style="color:red; display:none;">Password must be at least 8 characters long.</p>
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirm Password*</label>
                <input type="password" id="confirm-password" name="confirm-password" required placeholder="Confirm Password*">
                <p id="password-match-error" style="color:red; display:none;">Passwords do not match!</p>
            </div>


            <div class="form-group-checkbox">
                <input type="checkbox" id="offers-consent" name="offers-consent">
                <label for="offers-consent">I consent to obtaining tailored offers and proposals based on my preferences in accordance with the Carnassier Privacy Policy.</label>
            </div>

            <div class="form-group-checkbox">
                <input type="checkbox" id="privacy-policy" name="privacy-policy">
                <label for="privacy-policy">I have read and understood the privacy policy and I agree to the Terms of use.*</label>
            </div>


            <input type="submit" value="Register" class="submit-button">

            <p class="privacy-text">
                By proceeding, you confirm you have read and understood the Carnassier <a href="#">Privacy Policy</a>.
            </p>
        </form>
    </div>

    <div class="image-section">
        <img src="references/hunter1.jpeg" alt="Model Image">
    </div>
</div>

<?php include 'footers/footer-scrollable.php'; ?>

<script src="javascript/forms.js"></script>
<script src="javascript/header.js"></script>
</body>
</html>