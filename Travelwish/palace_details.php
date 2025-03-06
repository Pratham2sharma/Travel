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
    <title>Places</title>
</head>
<body>


<hr>
<?php 
             require 'DB.php';

             $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");
             $id = $_GET["place"];
             $fetch_query = "SELECT  *  FROM palace WHERE palace_id = $id LIMIT 1";
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

    $id = $_GET["place"];
    $fetch_query = "SELECT  *  FROM palace WHERE palace_id = $id LIMIT 1";
    $fetch_query_run = mysqli_query($connection , $fetch_query);


                           

        while($row = mysqli_fetch_array($fetch_query_run))
        {
           ?>
<div class="place-body">
    <div class="row">
     <div class="col-md-6">
      <div class="place-title">
          <h1><?php echo $row['dest_name']; ?></h1>
            <hr>
            <p><?php echo $row['description']; ?></p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa ipsum at assumenda fuga minus et officiis, aliquam unde necessitatibus deleniti nihil libero vitae quod distinctio quae aspernatur delectus quisquam suscipit!</p>
            </div>
          <div class="tips-place">
            <h2>Tips</h2>
            <hr>
            <ul class="tips">
                <li><?php echo $row['tip1']; ?> </li>
                <li><?php echo $row['tip2']; ?></li>
                <li><?php echo $row['tip3']; ?></li>
                <li><?php echo $row['tip4']; ?></li>
            </ul>
            </div> 
    </div>

        <div class="col-md-6">
           
          <div class="best-time">
            <h1>Best Time to Visit</h2>
            <hr>
            <p><?php echo $row['best_time']; ?></p>
          </div>
          <div class="place-reach">
            <h2>How To Reach</h2>
             <hr>
            <div class="row">
              <div class="col-md-6">
                 <ul>
                 <i class="fa-solid fa-train"></i> <li>Possible</li><br>
                 <i class="fa-solid fa-plane"></i> <li>Not Possible</li><br>
                 </ul>
              </div>
              <div class="col-md-6">
                  <ul>
                  <i class="fa-solid fa-car"></i> <li>Possible</li><br>
                  <i class="fa-solid fa-person-biking"></i><li> Possible</li>
                  </ul>
              </div>
            </div> 
            </div>  
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