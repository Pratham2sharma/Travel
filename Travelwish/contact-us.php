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

<div class="faq-container">
        <h2>Frequently Asked Questions</h2>

        <div class="faq">
            <div class="question">Want To Promote Your Property near These Destination On Wesbite? <span>+</span></div>
            <div class="answer">Yes, you can Promote your Properties on our Website. Just Contact Us Through Contact Form or Email.</div>
        </div>

        <div class="faq">
            <div class="question">Best time to visit Goa? <span>+</span></div>
            <div class="answer">The best time to visit Goa is from November to February when the weather is pleasant.</div>
        </div>

        <div class="faq">
            <div class="question">What are the must-visit places in India? <span>+</span></div>
            <div class="answer">India is a land of diverse beauty, from the iconic Taj Mahal in Agra to the royal forts of Jaipur. Experience spirituality in Varanasi, cruise through Kerala’s backwaters, or relax on Goa’s beaches. Adventure awaits in Leh-Ladakh, while the Rann of Kutch stuns with its white desert. Mysore’s palace, Andaman’s turquoise waters, and Meghalaya’s waterfalls offer unique experiences. Whether exploring history, nature, or vibrant culture, India has something for every traveler.</div>
        </div>

    </div>






<?php include 'footer.php'; ?>

<script>
        document.querySelectorAll(".question").forEach(question => {
            question.addEventListener("click", function() {
                const faq = this.parentElement;
                faq.classList.toggle("active");
                const span = this.querySelector("span");
                span.textContent = faq.classList.contains("active") ? "-" : "+";
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>