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






<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>