<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Delhi</title>
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
              <h1 class="banner-title">Explore New Delhi</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In veritatis quia tempore officia voluptate vero sapiente accusantium exercitationem, non esse! Modi repellendus mollitia recusandae ex vel inventore quod odio repudiandae.</p>
              <button>Explore Now</button>
            </div>
            <div class="carousel-item">
              <img src="images/carousel-2.jpeg" class="d-block w-100" alt="...">
              <h1 class="banner-title">Explore Delhi Forts</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In veritatis quia tempore officia voluptate vero sapiente accusantium exercitationem, non esse! Modi repellendus mollitia recusandae ex vel inventore quod odio repudiandae.</p>
              <button>Explore Now</button>
            </div>
            <div class="carousel-item">
              <img src="images/carousel-3.jpg" class="d-block w-100" alt="...">
              <h1 class="banner-title">Explore Delhi Palaces</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In veritatis quia tempore officia voluptate vero sapiente accusantium exercitationem, non esse! Modi repellendus mollitia recusandae ex vel inventore quod odio repudiandae.</p>
              <button>Explore Now</button>
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

<h1 class="state-head">Top Places to Visit in New Delhi</h1>

<div class="state">
    <div class="row">
    <?php 
     require 'DB.php';

    $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

    $fetch_query = "SELECT * FROM destination WHERE states='uttar Pradesh'";
    $fetch_query_run = mysqli_query($connection , $fetch_query);


                           

    while ($row = mysqli_fetch_array($fetch_query_run)) {
      ?>
      <div class="col-md-4">
        <div class="card" style="width: 25rem;">
          <a href="place.php?place=<?php echo $row['place_id'] ?>">
            <?php
            $json = $row['fileImg'];
            $image = json_decode($json, true);
            $images = $image['0'];
            ?>
            <img src="uploads/<?php echo $images; ?>" class="card-img-top" alt="...">
          </a>
          <div class="wrapper">
              <a href="place.php?place=<?php echo $row['place_id']; ?>"><span>Know More!</span></a>
         </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['dest_name']; ?></h5>
            <?php
            
            $sql = "SELECT LEFT(description, 140) AS short_description FROM destination WHERE place_id = " . intval($row['place_id']);
            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo ($row['short_description']); // Convert new lines to <br> for HTML display
            } else {
            echo "No data found";
            }
            
            ?>
          </div>          
      </div>
    </div>
    <?php
    }
    ?>
        <div class="col-md-4">
        <div class="card" style="width: 25rem;">
              <img src="images/india-gate.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Visit Us</a>
              </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card" style="width: 25rem;">
              <img src="images/india-gate.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Visit Us</a>
              </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>