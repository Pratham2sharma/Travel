<?php
session_start();
require 'DB.php';

$connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

// Handle Sign Up
if (isset($_POST['signup'])) {
    $username = trim($_POST['uname']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    $stmt = $connection->prepare("INSERT INTO user_detail (uname, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    
    if ($stmt->execute()) {
        $_SESSION['message'] = "Sign Up Successful! Please log in.";
    } else {
        $_SESSION['message'] = "Email already exists!";
    }
    $stmt->close();
}

// Handle Sign In
if (isset($_POST['signin'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $connection->prepare("SELECT user_id, uname, password FROM user_detail WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();
        
        if (password_verify($password, $hashed_password)) {
            $_SESSION['uname'] = $username;
            header("Location: index.php"); // Redirect to a dashboard
            exit();
        } else {
            $_SESSION['message'] = "Invalid password!";
        }
    } else {
        $_SESSION['message'] = "Email not found!";
    }
    $stmt->close();
}

$connection->close();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="signup.css">
    <title>Sign Up</title>
</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
        <p class="message"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
<?php endif; ?>

<div class="wrapper">
        <div class="title-text">
            <div class="title login">Login Form</div>
            <div class="title signup">Signup Form</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slide-tab"></div>
            </div>
            <div class="form-inner">
                <form method="post" class="login">
                    <div class="field">
                        <input type="text" placeholder="Email" name ="email" required>
                    </div>

                    <div class="field">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    
                    <div class="field">
                    <button class="signup-btn" type="submit" name="signin">Sign In</button>
                    </div>
                    <div class="signup-link">Not a member?<br>
                        <a href="#">Signup Now</a>
                    </div>
                </form>

                 

                <form  method="post" class="signup">
                    <div class="field">
                        <input type="text" placeholder="username" name="uname" required>
                    </div>
                    <div class="field">
                        <input type="email" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="field">
                    <button class="signup-btn" type="submit" name="signup">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="signup.js"></script>
</body>
</html>