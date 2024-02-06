<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Online Education Website Design</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header class="header" >

   <section class="flex">

      <a href="#home" class="logo">educa.</a>

      <nav class="navbar">
         <a href="http://localhost/elearning/desgin/login.php">home</a>
         <a href="http://localhost/elearning/desgin/about.php">about</a>
         <a href="http://localhost/elearning/desgin/courses.php">courses</a>
         <a href="http://localhost/elearning/desgin/teachers.php">teachers</a>
         <a href="http://localhost/elearning/desgin/review.php">reviews</a>
         <a href="http://localhost/elearning/desgin/contact.php">contact</a>
         <a href="http://localhost/elearning/desgin/Pricing/">Pricing</a>
         <a href="update_profile.php"    ><?php echo $_SESSION['uname'];   ?></a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

</header>
<section class="about" id="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quibusdam magni error, aut enim rerum?</p>
         <a href="http://localhost/elearning/desgin/contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>
<!-- footer section starts  -->

<footer class="footer">

   <section>

      <div class="share">
         <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
         <a href="https://twitter.com/" class="fab fa-twitter"></a>
         <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
         <a href="https://www.youtube.com/" class="fab fa-youtube"></a>
      </div>

      <div class="credit">&copy; Made  @ 2022 by <span>Lrupp Cyber</span> | all rights reserved!</div>

   </section>

</footer>

<!-- footer section ends -->
</body>
</html>