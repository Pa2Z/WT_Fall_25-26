<?php
include "../config.php";


$name = $email = $password = $confirm_password = "";
$nameErr = $emailErr = $passwordErr = $confirmErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fullname"])) {
        $nameErr = "Name is required";
    } else {
        $name = trim($_POST["fullname"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = trim($_POST["email"]);
    }
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];

        if (strlen($password) < 8) {
            $passwordErr = "Password must be at least 8 characters";
        } elseif (!preg_match("/[a-z]/", $password)) {
            $passwordErr = "Password must contain at least 1 lowercase letter";
        } elseif (!preg_match("/[A-Z]/", $password)) {
            $passwordErr = "Password must contain at least 1 uppercase letter";
        } elseif (!preg_match("/[0-9]/", $password)) {
            $passwordErr = "Password must contain at least 1 number";
        } elseif (!preg_match("/[\W]/", $password)) {
            $passwordErr = "Password must contain at least 1 special character";
        }
    }

    if (empty($_POST["confirm_password"])) {
        $confirmErr = "Confirm password is required";
    } else {
        $confirm_password = $_POST["confirm_password"];
        if ($password !== $confirm_password) {
            $confirmErr = "Passwords do not match";
        }
    }

    if (
        empty($nameErr) &&
        empty($emailErr) &&
        empty($passwordErr) &&
        empty($confirmErr)
    ) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (fullname, email, password)
                VALUES ('$name', '$email', '$hashedPassword')";

        if (mysqli_query($conn, $sql)) {
            header("Location: ../DASHBOARD/DASHBOARD.php");
            exit();
        } else {
            $emailErr = "Email already exists";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>NeedSurveyResponses - Sign Up</title>
<link rel="stylesheet" href="signuppage.css"> 

<script>
function togglePassword() {
    var p1 = document.getElementById("password");
    var p2 = document.getElementById("confirm_password");

    if (p1.type === "password") {
        p1.type = "text";
        p2.type = "text";
    } else {
        p1.type = "password";
        p2.type = "password";
    }
}
</script>
</head>

<body>

<header>
  <div class="nav">
    <div class="logo"></div>
    <div class="site-name">NeedSurveyResponses</div>
  </div>
</header>

<main>
<div class="card">

<h1>Create an account</h1>

<form method="post">

<label>Full Name</label>
<input type="text" name="fullname" value="<?php echo $name; ?>">
<div class="error"><?php echo $nameErr; ?></div>

<label>Email</label>
<input type="text" name="email" value="<?php echo $email; ?>">
<div class="error"><?php echo $emailErr; ?></div>

<label>Password</label>
<input type="password" name="password" id="password">

<div class="password-info">
• Minimum 8 characters<br>
• 1 lowercase<br>
• 1 uppercase<br>
• 1 number<br>
• 1 special character
</div>
<div class="error"><?php echo $passwordErr; ?></div>

<label>Confirm Password</label>
<input type="password" name="confirm_password" id="confirm_password">
<div class="error"><?php echo $confirmErr; ?></div>

<div class="show-pass">
<input type="checkbox" onclick="togglePassword()"> Show Password
</div>

<div class="actions">
<button type="reset" class="btn-secondary"><a href="../Homepage/Homepage.php">Discard</button>
<button type="submit" class="btn-primary">Sign Up</button>
</div>

</form>

</div>
</main>

</body>
</html>
