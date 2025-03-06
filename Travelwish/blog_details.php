<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Blog</title>
</head>
<body>


<hr>
<?php 
             require 'DB.php';

             $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");
             $id = $_GET["blog"];
             $fetch_query = "SELECT  *  FROM blog WHERE blog_id = $id LIMIT 1";
             $fetch_query_run = mysqli_query($connection , $fetch_query);

                         
               while($row = mysqli_fetch_assoc($fetch_query_run))
              {
              ?>

<div class="swiper">
        <div class="swiper-wrapper">
        <?php
                    $json = $row['fileImg'];
                    $image = json_decode($json, true);
                    foreach($image as $key) :
                 ?>
                <div class="swiper-slide">
                <img src="uploads/<?php echo $key;  ?>" alt="..." >
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

  <?php
             }
      ?> 


<?php 
     require 'DB.php';

    $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

    $id = $_GET["blog"];
    $fetch_query = "SELECT  *  FROM blog WHERE blog_id = $id LIMIT 1";
    $fetch_query_run = mysqli_query($connection , $fetch_query);


                           

        while($row = mysqli_fetch_array($fetch_query_run))
        {
           ?>
<div class="blog-body">
    <div class="row">
     <div class="col-md-8">
      <div class="blog-title">
          <h1><?php echo $row['blog_title']; ?></h1>
            <hr>
            <p><?php echo $row['content']; ?></p>
            
            </div>
          
    </div>

        <div class="col-md-4">
           
         
        </div> 

            
       
    </div>
</div>
<?php
             }
      ?> 

<div class="blog-body">
     <div class="row">
    <h2>Related Blogs :</h2>
    <hr>
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

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="script.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>