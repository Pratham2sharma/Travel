<?php
session_start();
/*if (!isset($_SESSION['uname'])) {
    header("Location: signup.php");
    exit();
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
    <title></title>
</head>
<body>

<nav class="first">
  <h1 class="fheading">TravelWish</h1>
  <ul class="flist">
    <a href="index.php"><li>Home</li></a>
    <a href="explore.php"><li>Explore</li></a>
    <a href="about.php"><li>About Us</li></a>
    <a href="blog.php"><li>Blogs</li></a>
    <a href="contact-us.php"><li>Contact Us</li></a>
  </ul>
  <?php if (!isset($_SESSION['uname'])): ?>  <!-- Show only if NOT logged in -->
        <a href="signup.php" class="sign-up">Sign Up</a>
    <?php else: ?>  <!-- Show logout if logged in -->
      <h2 class="username-status">Welcome, <?php echo htmlspecialchars($_SESSION['uname']); ?>!</h2>
      <a class="logout" href="logout.php">Logout</a>
    <?php endif; ?>
   
    <div class="hamburger">&#9776;</div>
  <!---<button class="reg">Sign up</button>---->
  
</nav> 


<script>
        document.querySelector(".hamburger").addEventListener("click", function() {
            document.querySelector(".flist").classList.toggle("active");
        });
    </script>
 </body>
 </html>