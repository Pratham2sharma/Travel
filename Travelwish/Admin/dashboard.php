<?php
 


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin-Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    
   
    <!-- Template Main CSS File -->
  
    <link href="admin.css" rel="stylesheet">
 
</head>
<body>

    <!-- Header --
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <img src="admin/assets/img/logo.png" alt="Logo" width="100" height="100" style="margin-bottom: -50px;">
                <br>
                <br>
                <h2 class="text-light"><a href="admin_dash.php">InvestConnect</a></h2>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active" href="admin_dash.php">Home</a></li>
                    <li><a href="admin_campaign-list.php">Ideas</a></li>
                    <li><a href="#">/</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li><a href="#">Welcome, <?php echo $_SESSION['username']; ?></a></li>
                    <?php endif; ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>-->
    <hr>
    <!-- End Header -->

    <!-- Admin Dashboard -->
    <section class="dashboard">
        <h2>Admin Dashboard</h2>
        <div class="btn-group">
            <!----<a href="manage_tiles.php" class="btn">Manage Tiles</a>---->
            <a href="manage_user.php" class="btn">Manage Users</a>
            <a href="manage_destination.php" class="btn">Manage Destinations</a>
            <a href="manage_mountains.php" class="btn">Manage Mountains</a>
            <a href="manage_beaches.php" class="btn">Manage Beaches</a>
            <a href="manage_palaces.php" class="btn">Manage Palaces</a>
            <a href="manage_hillstations.php" class="btn">Manage Hill Stations</a>
            <a href="manage_movies.php" class="btn">Manage Movies</a>
            <a href="manage_blogs.php" class="btn">Manage Blogs</a>
            <a href="make_admin.php" class="btn">Make New Admin</a>
            <a href="logout.php" class="btn">Logout</a>
        </div>
    </section>
    
    
    
 
    <script src="admin.js"></script>
    
</body>
</html>