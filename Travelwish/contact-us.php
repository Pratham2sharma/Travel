<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Contact-Us</title>
</head>
<body>


<hr>

<div class="contact-body">
 <div class="container">
  <div class="contact-card">
    <div class="left">
      <img src="https://images.unsplash.com/photo-1659706994835-fb804722b0f2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
    </div>
     <div class="right">
              <h2>Contact Us</h2>
              <div class="contact">
                <div class="form-container">
                  <form action="mail.php" class="form" method="post">
                    <div class="username">
                      <input type="text" name="name" placeholder="Enter your Name">
                    </div>
                   <div class="useremail">
                      <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="usermessage">
                      <textarea placeholder="Enter your message" name="message" required></textarea>
                    </div>
                    <div class="usersubmit">
                      <input type="submit" value="Contact Us">
                    </div>
                  </form>
                </div>
        
              </div>
              <div class="social">
                 <span><a href="#"><i class="fab fa-facebook"></i></a>&nbsp&nbsp</span>
                 <span><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>&nbsp&nbsp</span>
                 <span><a href="#" target="_blank"><i class="fab fa-twitter"></i></a>&nbsp&nbsp</span>
             </div>
     </div>

    </div> 
  </div>
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