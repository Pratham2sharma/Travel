<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>About-Us</title>
</head>
<body>


<div class="banner">
    <img src="images/about.jpg" alt="">
    <h1>About Us</h1>
</div>

<div class="about-body">
    <div class="row">
        <div class="col-md-5">
           <img class="pic-1" src="images/Goa.jpg" alt="">
           <img class="pic-2" src="images/sikkhim.jpg" alt="">
           <img class="pic-3"src="images/rajasthan.jpeg" alt="">
        </div>
        <div class="col-md-7">
            <h2>About Us</h2>
            <hr>
            <p>Welcome to <b>TravelWish</b>, your trusted travel guide to exploring the incredible beauty of India. Our mission is to inspire and assist travelers in discovering the diverse landscapes, rich heritage, and vibrant cultures that make India truly unique.</p>
            <p>Whether you're seeking adventure in the Himalayas, a peaceful retreat in Kerala, or a cultural journey through Rajasthan, we provide expert travel guides, curated itineraries, and insider tips to enhance your experience.</p> 
            <p>At <b>TravelWish</b>, we believe travel is more than just visiting places—it's about creating memories, embracing new cultures, and finding hidden gems. Our team of travel enthusiasts and experts work tirelessly to bring you up-to-date information, local insights, and personalized recommendations to make your journey seamless and unforgettable.</p>
            <p>Join us in exploring the magic of India—one destination at a time!</p> 
        </div>
    </div>
</div>

<hr>


<section class="our-team-section">
    <h1>Our Team</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Pratham Sharma</h3>
                            <span class="post">Co-founder</span>
                        </div>
                        <ul class="social">
                            <li>
                                <a href="#"  target="_blank"class="fab fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Sonu Kumar</h3>
                            <span class="post">Co-Founder</span>
                        </div>
                        <ul class="social">
                            <li>
                                <a href="#" class="fab fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>

    </section>

    <<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>