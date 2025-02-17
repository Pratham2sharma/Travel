<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Nagaland</title>
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
              <h1 class="banner-title">Explore Nagaland</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In veritatis quia tempore officia voluptate vero sapiente accusantium exercitationem, non esse! Modi repellendus mollitia recusandae ex vel inventore quod odio repudiandae.</p>
              <button>Explore Now</button>
            </div>
            <div class="carousel-item">
              <img src="images/carousel-2.jpeg" class="d-block w-100" alt="...">
              <h1 class="banner-title">Explore Nagaland Forts</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In veritatis quia tempore officia voluptate vero sapiente accusantium exercitationem, non esse! Modi repellendus mollitia recusandae ex vel inventore quod odio repudiandae.</p>
              <button>Explore Now</button>
            </div>
            <div class="carousel-item">
              <img src="images/carousel-3.jpg" class="d-block w-100" alt="...">
              <h1 class="banner-title">Explore Nagaland Palaces</h1>
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

<h1 class="state-head">Top Places to Visit in Nagaland</h1>

<div class="state">
    <div class="row">
    <?php 
     require 'DB.php';

    $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

    $per_page_record = 6;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {    
    $page  = $_GET["page"];    
}    
else {    
  $page=1;    
}    

$start_from = ($page-1) * $per_page_record;     


    $fetch_query = "SELECT * FROM destination WHERE states='Nagaland' LIMIT $start_from, $per_page_record";
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
        
    </div>
</div>


<div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM destination WHERE states='Nagaland' ";     
        $rs_result = mysqli_query($connection, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='nagaland.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='nagaland.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='nagaland.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='nagaland.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div> 
      
      <div class="inline-pagination">   
      <input class="input" id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button class="pagination-btn" onClick="go2Page();">Go</button>   
     </div>    

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>