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
    <title>Movies-Places</title>
</head>
<body>


<hr>

<?php 
             require 'DB.php';

             $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");
             $id = $_GET["movie"];
             $fetch_query = "SELECT  *  FROM movie WHERE movie_id = $id LIMIT 1";
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

    $id = $_GET["movie"];
    $fetch_query = "SELECT  *  FROM movie WHERE movie_id = $id LIMIT 1";
    $fetch_query_run = mysqli_query($connection , $fetch_query);


                           

        while($row = mysqli_fetch_array($fetch_query_run))
        {
           ?>
  <div class="place-body">
    <div class="row">
     <div class="col-md-8">
      <div class="place-title">
          <h1><?php echo $row['movie_title']; ?></h1>
            <hr>
            <p><?php echo $row['description']; ?></p>
            
       </div>


          <div class="tips-place">
            <h2>Movie Shots Here :</h2>
            <hr>
            <?php
                    $json = $row['fileImg'];
                    $image = json_decode($json, true);
                    $images = $image['0'];
                  ?>
                   <img src="uploads/<?php echo $images;  ?>" class="card-img-top" alt="...">
            <h3><?php echo $row['dest_1']; ?></h3>
            <p class="movies-para"><?php echo $row['description1']; ?></p>
            <div class="row">
              <div class="col-md-6">
                 <h4>City :</h4>
                 <p class="movies-location"><?php echo $row['city1']; ?></p>
              </div>
              <div class="col-md-6">
                <h4>State :</h4>
                <p class="movies-location"><?php echo $row['states1']; ?></p>
              </div>
            </div>  

            <hr>
            <?php
                    $json = $row['fileImg'];
                    $image = json_decode($json, true);
                    $images = $image['1'];
                  ?>
                   <img src="uploads/<?php echo $images;  ?>" class="card-img-top" alt="...">
            <h3><?php echo $row['dest_2']; ?></h3>
            <p class="movies-para"><?php echo $row['description2']; ?></p>
            <div class="row">
              <div class="col-md-6">
                 <h4>City :</h4>
                 <p class="movies-location"><?php echo $row['city2']; ?></p>
              </div>
              <div class="col-md-6">
                <h4>State :</h4>
                <p class="movies-location"><?php echo $row['states2']; ?></p>
              </div>
            </div>  

            <hr>
            <?php
                    $json = $row['fileImg'];
                    $image = json_decode($json, true);
                    $images = $image['4'];
                  ?>
                   <img src="uploads/<?php echo $images;  ?>" class="card-img-top" alt="...">
            <h3><?php echo $row['dest_3']; ?></h3>
            <p class="movies-para"><?php echo $row['description3']; ?></p>
            <div class="row">
              <div class="col-md-6">
                 <h4>City :</h4>
                 <p class="movies-location"><?php echo $row['city3']; ?></p>
              </div>
              <div class="col-md-6">
                <h4>State :</h4>
                <p class="movies-location"><?php echo $row['states3']; ?></p>
              </div>
            </div>  

            <hr>
            <?php
                    $json = $row['fileImg'];
                    $image = json_decode($json, true);
                    $images = $image['5'];
                  ?>
                   <img src="uploads/<?php echo $images;  ?>" class="card-img-top" alt="...">
            <h3><?php echo $row['dest_4']; ?></h3>
            <p class="movies-para"><?php echo $row['description4']; ?></p>
            <div class="row">
              <div class="col-md-6">
                 <h4>City :</h4>
                 <p class="movies-location"><?php echo $row['city4']; ?></p>
              </div>
              <div class="col-md-6">
                <h4>State :</h4>
                <p class="movies-location"><?php echo $row['states4']; ?></p>
              </div>
            </div>  
         </div> 
    </div>

        <div class="col-md-4">
           
        
            
         <div class="budget">  
            <h2>Budget</h2>
            <hr>
            <p>Average Price Per Head : &#8377;<?php echo $row['budget']; ?></p>
        </div> 
            
        </div>
    </div>
</div>




<?php

        }
        ?>


<?php include 'footer.php'; ?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="script.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>