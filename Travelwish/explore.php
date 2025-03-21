<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Explore</title>
</head>
<body>

<section>
    <div class="carousel">
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/carousel-1.jpeg" class="d-block w-100" alt="...">
              <h1 class="banner-title">Explore Mountains</h1>
              <p>From misty peaks to lush valleys, Indian mountains offer serene escapes, thrilling adventures, and breathtaking views for the perfect retreat!</p>
              <a href="mountains.php"><button>Explore Now</button></a>
            </div>
            <div class="carousel-item">
              <img src="images/carousel-2.jpeg" class="d-block w-100" alt="...">
              <h1 class="banner-title">Explore Beaches</h1>
              <p>From golden sands to turquoise waves, Indian beaches offer sun-kissed shores, thrilling adventures, and breathtaking sunsets for the perfect escape!</p>
              <a href="beaches.php"><button>Explore Now</button></a>
            </div>
            <div class="carousel-item">
              <img src="images/carousel-3.jpg" class="d-block w-100" alt="...">
              <h1 class="banner-title">Explore Palaces</h1>
              <p>Step into a royal legacy—India’s palaces dazzle with grandeur, rich history, and timeless elegance, offering a glimpse into the past’s opulence!</p>
              <a href="palaces.php"><button>Explore Now</button></a>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
</section>


<div class="explore-body">
    <div class="row">
        <h2>Explore India as per Your Favourite Destination</h2>
        <hr>

        <div class="col-md-3">
             <a href="mountains.php"><img src="images/mountain.jpg" alt=""></a>
             <a class="explore-title" href="">Mountains</a>
        </div>
        <div class="col-md-3">
        <a href="beaches.php"><img src="images/beaches.jpg" alt=""></a>
            <a class="explore-title"  href="">Beaches</a>
        </div>
        <div class="col-md-3">
        <a href="palaces.php"><img src="images/palaces.jpeg" alt=""></a>
            <a class="explore-title"  href="">Palaces</a>
        </div>
        <div class="col-md-3">
        <a href="hill-station.php"><img src="images/hill-station.jpeg" alt=""></a>
            <a class="explore-title"  href="">Hill Stations</a>
        </div>
    </div>

</div>

<div class="movies-body">
  <div class="row">
        <h2>Explore Your Favourite Movies Places</h2>
        <hr>
        <?php 
     require 'DB.php';

    $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

    $fetch_query = "SELECT * FROM movie";
    $fetch_query_run = mysqli_query($connection , $fetch_query);


                           

        while($row = mysqli_fetch_array($fetch_query_run))
        {
           ?>
       
        <div class="col-md-4">
                  <div class="blog_card">
              <div class="blog_card_image">
              <a href="movies-place.php?movie=<?php echo $row['movie_id'] ?>">
              <?php
                    $json = $row['fileImg'];
                    $image = json_decode($json, true);
                    $images = $image['3'];
                  ?>
                   <img src="uploads/<?php echo $images;  ?>" class="card-img-top" alt="...">
              </a>
              </div>
              <div class="blog_card_content">
                 <h3><?php echo $row['movie_title']; ?></h3> 
            
              </div>
            </div>
        </div>

      <?php
        }
        
       ?> 

     
    
       
        
    </div>
</div>

<div class="states-body">
  <div class="row">
        <h2>Explore Your Favourite Indian States</h2>
        <hr>
        <div class="col">
        <a href="delhi.php"><img src="images/india-gate.jpg" alt=""></a>
        <h2>New Delhi</h2>
        </div>
        <div class="col">
        <a href="gujarat.php"><img src="images/Gujarat.jpeg" alt=""></a>
        <h2>Gujarat</h2>
        </div>
        <div class="col">
        <a href="goa.php"><img src="images/Goa.jpg" alt=""></a>
        <h2>Goa</h2>
        </div>
        <div class="col">
        <a href="andaman&nicobar.php"><img src="images/andaman.jpeg" alt=""></a>
        <h2>Andaman & Nicobar</h2>
        </div>
        
    </div>

    <div class="row">
        <div class="col">
        <a href="andhrapradesh.php"><img src="images/Andhra-Pradesh.png" alt=""></a>
        <h2>Andhra Pradesh</h2>
        </div>
        <div class="col">
        <a href="arunchalpradesh.php"><img src="images/arunachal-pradesh.jpeg" alt=""></a>
        <h2>Arunachal Pradesh</h2>
        </div>
        <div class="col">
        <a href="assam.php"><img src="images/assam.jpeg" alt=""></a>
        <h2>Assam</h2>
        </div>
        <div class="col">
        <a href="bihar.php"><img src="images/Bihar.jpg" alt=""></a>
        <h2>Bihar</h2>
        </div>
        
    </div>

    <div class="row">
        <div class="col">
        <a href="chhatisgarh.php"><img src="images/chattisgarh.jpg" alt=""></a>
        <h2>Chhatisgarh</h2>
        </div>
        <div class="col">
        <a href="haryana.php"><img src="images/haryana.jpeg" alt=""></a>
        <h2>Haryana</h2>
        </div>
        <div class="col">
        <a href="himachalpradesh.php"><img src="images/himachal-pradesh.jpg" alt=""></a>
        <h2>Himachal Pradesh</h2>
        </div>
        <div class="col">
        <a href="jammu&kashmir.php"><img src="images/jammu-kashmir.jpg" alt=""></a>
        <h2>Jammu & Kashmir</h2>
        </div>
        
    </div>

    <div class="row">
        <div class="col">
        <a href="jharkhand.php"><img src="images/jharkhand.jpeg" alt=""></a>
        <h2>Jharkhand</h2>
        </div>
        <div class="col">
        <a href="karnataka.php"><img src="images/Karnataka.jpg" alt=""></a>
        <h2>Karnataka</h2>
        </div>
        <div class="col">
        <a href="kerala.php"><img src="images/Kerela.jpg" alt=""></a>
        <h2>Kerala</h2>
        </div>
        <div class="col">
        <a href="madhyapradesh.php"><img src="images/madhya-pradesh.jpg" alt=""></a>
        <h2>Madhya Pradesh</h2>
        </div>
        
    </div>

    <div class="row">
        <div class="col">
        <a href="maharashtra.php"><img src="images/Maharashtra.jpg" alt=""></a>
        <h2>Maharashtra</h2>
        </div>
        <div class="col">
        <a href="manipur.php"><img src="images/manipur.jpg" alt=""></a>
        <h2>Manipur</h2>
        </div>
        <div class="col">
        <a href="meghalaya.php"><img src="images/meghalaya.jpg" alt=""></a>
        <h2>Meghalaya</h2>
        </div>
        <div class="col">
        <a href="mizoram.php"><img src="images/mizoram.jpg" alt=""></a>
        <h2>Mizoram</h2>
        </div>
        
    </div>

    <div class="row">
        <div class="col">
        <a href="nagaland.php"><img src="images/nagaland.jpg" alt=""></a>
        <h2>Nagaland</h2>
        </div>
        <div class="col">
        <a href="odisha.php"><img src="images/Odisha.jpg" alt=""></a>
        <h2>Odisha</h2>
        </div>
        <div class="col">
        <a href="pujab.php"><img src="images/punjab.jpg" alt=""></a>
        <h2>Punjab</h2>
        </div>
        <div class="col">
        <a href="rajasthan.php"><img src="images/rajasthan.jpeg" alt=""></a>
        <h2>Rajasthan</h2>
        </div>
        
    </div>

    <div class="row">
        <div class="col">
        <a href="sikkim.php"><img src="images/sikkhim.jpg" alt=""></a>
        <h2>Sikkim</h2>
        </div>
        <div class="col">
        <a href="Tamilnadu.php"><img src="images/Tamil-Nadu.jpg" alt=""></a>
        <h2>Tamil Nadu</h2>
        </div>
        <div class="col">
        <a href="telangana.php"><img src="images/Telangana.jpeg" alt=""></a>
        <h2>Telangana</h2>
        </div>
        <div class="col">
        <a href="tripura.php"><img src="images/tripura.jpg" alt=""></a>
        <h2>Tripura</h2>
        </div>
        
    </div>
</div>


<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>