<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Blogs</title>
</head>
<body>

<div class="banner-blog">
    <img src="images/Blogs.jpg" alt="">
    <h1>Blogs</h1>
    <p>Find Your Favourite Destination Blogs Here</p>
</div>

<div class="blog-body">
    
    <div class="row">
    <h2>BLOG POSTS</h2>
    <hr class="hr">
    <?php 
     require 'DB.php';

    $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

    $fetch_query = "SELECT * FROM blog";
    $fetch_query_run = mysqli_query($connection , $fetch_query);


                           

        while($row = mysqli_fetch_array($fetch_query_run))
        {
           ?>
        <div class="col-md-4">
                  <div class="blog_card">
              <div class="blog_card_image">
                 <?php
                    $json = $row['fileImg'];
                    $image = json_decode($json, true);
                    $images = $image['0'];
                  ?>
                <img src="uploads/<?php echo $images;  ?>" alt="">
              </div>
              <div class="blog_card_content">
                 <h3><?php echo $row['blog_title']; ?></h3> 
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia provident voluptatem.</p>
                <a href="blog_details.php?blog=<?php echo $row['blog_id'] ?>"><h6>Read More</h6></a>
              </div>
            </div>
        </div>
      
      <?php
        }
      ?>    
        <div class="col-md-4">
        <div class="blog_card">
              <div class="blog_card_image">
                <img src="images/Goa.jpg" alt="">
              </div>
              <div class="blog_card_content">
                 <h3>Here Comes The Blog Title.</h3> 
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia provident voluptatem.</p>
                <a href=""><h6>Read More</h6></a>
              </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="blog_card">
              <div class="blog_card_image">
                <img src="images/Gujarat.jpeg" alt="">
              </div>
              <div class="blog_card_content">
                 <h3>Here Comes The Blog Title.</h3> 
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia provident voluptatem.</p>
                <a href=""><h6>Read More</h6></a>
              </div>
            </div>
        </div>
    </div>

    <div class="row">
    
        <div class="col-md-4">
                  <div class="blog_card">
              <div class="blog_card_image">
                <img src="images/Kerela.jpg" alt="">
              </div>
              <div class="blog_card_content">
                 <h3>Here Comes The Blog Title.</h3> 
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia provident voluptatem.</p>
                <a href=""><h6>Read More</h6></a>
              </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="blog_card">
              <div class="blog_card_image">
                <img src="images/Goa.jpg" alt="">
              </div>
              <div class="blog_card_content">
                 <h3>Here Comes The Blog Title.</h3> 
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia provident voluptatem.</p>
                <a href=""><h6>Read More</h6></a>
              </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="blog_card">
              <div class="blog_card_image">
                <img src="images/Gujarat.jpeg" alt="">
              </div>
              <div class="blog_card_content">
                 <h3>Here Comes The Blog Title.</h3> 
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia provident voluptatem.</p>
                <a href=""><h6>Read More</h6></a>
              </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>