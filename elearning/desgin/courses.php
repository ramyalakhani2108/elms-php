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
</body>

<!-- courses section starts  -->

<section class="courses" id="courses">

   <h1 class="heading">our <span>courses</span></h1>

   <div class="swiper course-slider">

      <!-- <div class="swiper-wrapper"> -->

         <div class="swiper-slide slide">
            <img src="images/course-1.svg" alt=""><a href="http://localhost/elearning/desgin/courses/webdev.php">
            <h3>web development</h3></a>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repellat!</p>
         </div>

         <div class="swiper-slide slide">
            <img src="images/course-2.svg" alt=""><a href="http://localhost/elearning/desgin/courses/digimar.php">
               <h3>digital marketing</h3></a>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repellat!</p>
            </div>
            
            <div class="swiper-slide slide">
               <img src="images/course-3.svg" alt="">
               <a href="http://localhost/elearning/desgin/courses/sandb.php">
                  <h3>science and biology</h3></a>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repellat!</p>
               </div>
               
               <div class="swiper-slide slide">
                  <img src="images/course-4.svg" alt="">
                  <a href="http://localhost/elearning/desgin/courses/graphicdes.php">
                     <h3>graphic design</h3></a>
                     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repellat!</p>
                  </div>
                  
                  <div class="swiper-slide slide">
                     <img src="images/course-5.svg" alt="">
                     <a href="http://localhost/elearning/desgin/courses/spokenenglish.php">
                        <h3>Spoken English</h3></a>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repellat!</p>
                     </div>
                     
                     <div class="swiper-slide slide">
                        <img src="images/course-6.svg" alt="">
                        <a href="http://localhost/elearning/desgin/courses/engineering.php">
            <h3>engineering</h3></a>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repellat!</p>
         </div>

      <!-- </div> -->

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- courses section ends -->
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
</html>