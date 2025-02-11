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
             $fetch_query = "SELECT  *  FROM hillstation WHERE hill_station_id  = $id LIMIT 1";
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
    $fetch_query = "SELECT  *  FROM hillstation WHERE hill_station_id = $id LIMIT 1";
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


<!-- Footer Start -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="footer-blog">
          <h3>About TravelWish</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum at eos tempora aliquam labore, fuga nulla voluptatum dolore quos cum minima repellat quia a ut, repudiandae nesciunt laborum, sit excepturi?</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="footer-insta">
          <h3>From TravelWish</h3>
          <a href=""><img src="images/Gujarat.jpeg" alt="Image"></a>
          <a href=""><img src="images/Kerela.jpg" alt="Image"></a>
          <a href=""><img src="images/Maharashtra.jpg" alt="Image"></a>
          <a href=""><img src="images/sikkhim.jpg" alt="Image"></a>
          <a href=""><img src="images/himachal-pradesh.jpg" alt="Image"></a>
          <a href=""><img src="images/Goa.jpg" alt="Image"></a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="footer-tags">
          <h3>Tags Widget</h3>
          <a href="">Goa</a>
          <a href="">Sikkhim</a>
          <a href="">Punjab</a>
          <a href="">Kerela</a>
          <a href="">Rajasthan</a>
          <a href="">Haryana</a>
          <a href="">Odisha</a>
          <a href="">Tamil-Nadu</a>
          <a href="">Telangana</a>
          <a href="">Manipur</a>
          <a href="">Assam</a>
          <a href="">New Delhi</a>
          <a href="">Jammu-Kashmir</a>
          <a href="">West-Bengal</a>
          <a href="">Mizoram</a>
          <a href="">Tripura</a>
          <a href="">Meghalaya</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="footer-newsletter">
          <h3>Newsletter</h3>
          <div class="form">
            <input class="form-control" placeholder="Your Name">
            <input class="form-control" placeholder="Your Email">
            <button class="btn">Subscribe</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="footer-contact">
      <div class="row align-items-center">
        <div class="col-md-4">
          <h4>Call Now</h4>
          <p>+123 456 7890</p>
        </div>
        <div class="col-md-4">
          <h4>Email Us</h4>
          <p>info@example.com</p>
        </div>
        <div class="col-md-4">
          <h4>Get in Touch</h4>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-youtube"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="copy-text">
            <p>&copy; <a href="#">TravelWish</a>. All Rights Reserved.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="copy-menu">
            <a href="">Terms</a>
            <a href="">Privacy</a>
            <a href="https://htmlcodex.com">Author</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="script.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>