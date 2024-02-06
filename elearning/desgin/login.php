<?php
   session_start();
   // session_start();
if (!isset($_SESSION['uname']) ){
 	header('location:index.php');
	# code...

}
// else if (!isset($_SESSION['unamesup']) ){
// 	header('location:index.php');
// 	# code...

// }
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
   
<!-- header section starts  -->

<header class="header">

   <section class="flex">

      <a href="http://localhost/elearning/desgin/login.php" class="logo">educa.</a>

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

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="row">

      <div class="content">
         <h3>online <span>education</span></h3>
         <a href="http://localhost/elearning/desgin/courses.php" class="btn">Browse Course</a>
      </div>

      <div class="image">
         <img src="images/homg-img.svg" alt="">
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- couter section stars  -->

<section class="count">

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div class="content">
            <h3>150+</h3>
            <p>courses</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div class="content">
            <h3>1300+</h3>
            <p>students</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div class="content">
            <h3>80+</h3>
            <p>teachers</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-face-smile"></i>
         <div class="content">
            <h3>100%</h3>
            <p>satisfaction</p>
         </div>
      </div>

   </div>

</section>

<!-- couter section ends -->

<!-- about section starts  -->

<!-- <section class="about" id="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quibusdam magni error, aut enim rerum?</p>
         <a href="#contact" class="btn">contact us</a>
      </div>

   </div>

</section> -->

<!-- about section ends -->

<!-- courses section starts  -->
<!-- 
<section class="courses" id="courses">

   <h1 class="heading">our <span>courses</span></h1>

   <div class="swiper course-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/course-1.svg" alt="">
            <h3>web development</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repellat!</p>
         </div>

         <div class="swiper-slide slide">
            <img src="images/course-2.svg" alt="">
            <h3>digital marketing</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repellat!</p>
         </div>

         <div class="swiper-slide slide">
            <img src="images/course-3.svg" alt="">
            <h3>science and biology</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repellat!</p>
         </div>

         <div class="swiper-slide slide">
            <img src="images/course-4.svg" alt="">
            <h3>graphic design</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repellat!</p>
         </div>

         <div class="swiper-slide slide">
            <img src="images/course-5.svg" alt="">
            <h3>teaching</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repellat!</p>
         </div>

         <div class="swiper-slide slide">
            <img src="images/course-6.svg" alt="">
            <h3>engineering</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repellat!</p>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section> -->

<!-- courses section ends -->

<!-- teachers section starts  -->

<!-- <section class="teachers" id="teachers">

   <h1 class="heading">expert <span>tutors</span></h1>

   <div class="swiper teachers-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/rashu1.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>
         
         <div class="swiper-slide slide">
            <img src="images/rashu2.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/rashu3.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/rashu4.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/rashu5.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/rashu6.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section> -->

<!-- teachers section ends -->

<!-- reviews section starts  -->

<!-- <section class="reviews" id="reviews">

   <h1 class="heading"> student's <span>reviews</span></h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus atque fuga delectus numquam consequatur velit autem distinctio possimus culpa!</p>
            <div class="user">
               <img src="images/pic-1.png" alt="">
               <div class="user-info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus atque fuga delectus numquam consequatur velit autem distinctio possimus culpa!</p>
            <div class="user">
               <img src="images/pic-2.png" alt="">
               <div class="user-info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus atque fuga delectus numquam consequatur velit autem distinctio possimus culpa!</p>
            <div class="user">
               <img src="images/pic-3.png" alt="">
               <div class="user-info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus atque fuga delectus numquam consequatur velit autem distinctio possimus culpa!</p>
            <div class="user">
               <img src="images/pic-4.png" alt="">
               <div class="user-info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus atque fuga delectus numquam consequatur velit autem distinctio possimus culpa!</p>
            <div class="user">
               <img src="images/pic-5.png" alt="">
               <div class="user-info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus atque fuga delectus numquam consequatur velit autem distinctio possimus culpa!</p>
            <div class="user">
               <img src="images/pic-6.png" alt="">
               <div class="user-info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section> -->

<!-- reviews section ends -->

<!-- contact section starts  -->
<!-- 
<section class="contact" id="contact">

   <h1 class="heading"><span>contact</span> us</h1>

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <span>your name</span>
         <input type="text" required placeholder="enter your full name" maxlength="50" name="name" class="box">
         <span>your email</span>
         <input type="email" required placeholder="enter your valie email" maxlength="50" name="email" class="box">
         <span>your number</span>
         <input type="number" required placeholder="enter your valie number" max="9999999999" min="0" name="number" class="box" onkeypress="if(this.value.length == 10) return false;">
         <span>select course</span>
         <select name="couses" class="box" required>
            <option value="" disabled selected>select the course --</option>
            <option value="web developement">web developement</option>
            <option value="science and biology">science and biology</option>
            <option value="engineering">engineering</option>
            <option value="digital marketing">digital marketing</option>
            <option value="graphic design">graphic design</option>
            <option value="teaching">teaching</option>
            <option value="social studies">social studies</option>
            <option value="data analysis">data analysis</option>
            <option value="artificial intelligence">artificial intelligence</option>
         </select>
         <span>select gender</span>
         <div class="radio">
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">female</label>
         </div>
         <input type="submit" value="send message" class="btn" name="send">
      </form>

   </div>

</section> -->

<!-- contact section ends -->

<!-- footer section starts  -->

<footer class="footer" >

   <section >

      <div class="share" >
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
<!-- 
<section class="contact" id="contact">
        
   <h1 class="heading"><span>contact</span> us</h1>

   <div class="row">

      <div class="image">
          <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <span>your name</span>
         <input type="text" required placeholder="enter your full name" maxlength="50" name="name" class="box">
         <span>your email</span>
         <input type="email" required placeholder="enter your valie email" maxlength="50" name="email" class="box">
         <span>your number</span>
         <input type="number" required placeholder="enter your valie number" max="9999999999" min="0" name="number" class="box" onkeypress="if(this.value.length == 10) return false;">
         <span>select course</span>
         <select name="couses" class="box" required>
             <option value="" disabled selected>select the course --</option>
            <option value="web developement">web developement</option>
            <option value="science and biology">science and biology</option>
            <option value="engineering">engineering</option>
            <option value="digital marketing">digital marketing</option>
            <option value="graphic design">graphic design</option>
            <option value="teaching">teaching</option>
            <option value="social studies">social studies</option>
            <option value="data analysis">data analysis</option>
            <option value="artificial intelligence">artificial intelligence</option>
         </select>
         <span>select gender</span>
         <div class="radio">
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">female</label>
         </div>
         <input type="submit" value="send message" class="btn" name="send">
       </form>

   </div>

</section> -->













<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>