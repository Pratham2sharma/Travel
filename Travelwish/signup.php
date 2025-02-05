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
                <form action="check-login.php" method="post" class="login">
                    <div class="field">
                        <input type="text" placeholder="Username" name ="uname" required>
                    </div>

                    <div class="field">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    
                    <div class="field">
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">Not a member?<br>
                        <a href="#">Signup Now</a>
                    </div>
                </form>

                 

                <form action="signup-back.php" method="post" class="signup">
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
                        <input type="password" placeholder="Confirm Password" name="cpassword" required>
                    </div>
                    <div class="field">
                        <input type="submit" value="Signup" name="save_data"  required>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="signup.js"></script>
</body>
</html>