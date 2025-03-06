<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <title>Places</title>
</head>
<body>


<hr>
<?php 
             require 'DB.php';

             $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");
             $id = $_GET["place"];
             $fetch_query = "SELECT  *  FROM destination WHERE place_id = $id LIMIT 1";
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
             $fetch_query = "SELECT  *  FROM destination WHERE place_id = $id LIMIT 1";
             $fetch_query_run = mysqli_query($connection , $fetch_query);

                         
             $current_destination = mysqli_fetch_assoc($fetch_query_run);
              ?>
<div class="place-body">
    <div class="row">
     <div class="col-md-6">
      <div class="place-title">
          <h1><?php echo htmlspecialchars($current_destination['dest_name']); ?></h1>
            <hr>
            <p><?php echo $current_destination['description']; ?></p>
           
            </div>
          <div class="tips-place">
            <h2>Tips</h2>
            <hr>
            <ul class="tips">
            <li><?php echo htmlspecialchars($current_destination['tip1']); ?> </li>
                <li><?php echo htmlspecialchars($current_destination['tip2']); ?></li>
                <li><?php echo htmlspecialchars($current_destination['tip3']); ?></li>
                <li><?php echo htmlspecialchars($current_destination['tip4']); ?></li>
            </ul>
            </div> 
    </div>




   

        

        <div class="col-md-6">
           
          <div class="best-time">
            <h1>Best Time to Visit</h2>
            <hr>
            <p><?php echo $current_destination['best_time']; ?></p>
          </div>
          <div class="place-reach">
            <h2>Location</h2>
             <hr>
            <div class="row">
              <div class="col-md-6">
                 
                  <h3>City :</h3>
                 <h4><?php echo htmlspecialchars($current_destination['city']); ?></h4><br>
                
                 
              </div>
              <div class="col-md-6">
                 
                    <h3>State : </h3>
                    <h4><?php echo htmlspecialchars($current_destination['states']); ?></h4><br>
              
                  
              </div>
            </div> 
            </div>  
            <div class="budget">  
            <h2>Budget</h2>
            <hr>
            <p>Average Price Per Head : &#8377;<?php echo htmlspecialchars($current_destination['budget']); ?></p>
        </div> 

            
        </div>
    </div>
</div>
 







<div class="slider-container">

    <h1 class="related-h1">More Destinations to Visit in <b><?php echo htmlspecialchars($current_destination['states']); ?></b></h1>
    <hr>
        <div class="slider">
        <?php 
        require 'DB.php';
        $id = $_GET["place"];
        $category = $current_destination['states'];
        $related_query = "SELECT * FROM destination WHERE states = '$category' AND place_id != $id LIMIT 9";
        $related_query_run = mysqli_query($connection, $related_query);
        while ($row = mysqli_fetch_assoc($related_query_run)):
        ?>
        
        <div class="col">
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
            <h5 class="card-title"><?php echo htmlspecialchars($row['dest_name']); ?></h5>
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
          <?php endwhile; ?>   
            
        </div>
        <div class="buttons">
            <button id="prev">&#10094;</button>
            <button id="next">&#10095;</button>
        </div>
  </div>
  <?php include 'footer.php'; ?>

  
<script>
       const slider = document.querySelector('.slider');
const prev = document.getElementById('prev');
const next = document.getElementById('next');
const cards = Array.from(document.querySelectorAll('.col'));
let cardWidth = 410;
let visibleCards = 3;
let index = visibleCards;

// Function to determine `cardWidth` and `visibleCards` dynamically
const updateSliderConfig = () => {
    const screenWidth = window.innerWidth;

    if (screenWidth < 576) {
        visibleCards = 1;
        cardWidth = screenWidth * 1; // 90% of screen width
    } else if (screenWidth < 992) {
        visibleCards = 2;
        cardWidth = screenWidth / 2.2;
    } else {
        visibleCards = 3;
        cardWidth = 400;
    }

    resetSlider();
};

// Function to reset slider when resizing
const resetSlider = () => {
    slider.innerHTML = ''; // Clear previous elements
    let newCards = [...cards]; // Get original cards
    let firstClone = [];
    let lastClone = [];

    for (let i = 0; i < visibleCards; i++) {
        firstClone.push(newCards[i].cloneNode(true));
        lastClone.push(newCards[newCards.length - 1 - i].cloneNode(true));
    }

    // Append cloned elements
    lastClone.reverse().forEach(card => slider.appendChild(card));
    newCards.forEach(card => slider.appendChild(card));
    firstClone.forEach(card => slider.appendChild(card));

    // Adjust index for correct initial position
    index = visibleCards;
    slider.style.transition = "none";
    slider.style.transform = `translateX(-${index * cardWidth}px)`;
};

// Move slider function
const moveSlider = (direction) => {
    index += direction;
    slider.style.transition = "transform 0.5s ease-in-out";
    slider.style.transform = `translateX(-${index * cardWidth}px)`;

    // Reset position after transition (for infinite loop effect)
    setTimeout(() => {
        if (index >= cards.length + visibleCards) {
            index = visibleCards;
            slider.style.transition = "none";
            slider.style.transform = `translateX(-${index * cardWidth}px)`;
        } else if (index <= 0) {
            index = cards.length;
            slider.style.transition = "none";
            slider.style.transform = `translateX(-${index * cardWidth}px)`;
        }
    }, 500);
};

// Event listeners
next.addEventListener('click', () => moveSlider(1));
prev.addEventListener('click', () => moveSlider(-1));

// Handle screen resizing
window.addEventListener('resize', updateSliderConfig);

// Initialize slider
updateSliderConfig();
    </script>

     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script type="text/javascript" src="script.js"></script>
     <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

