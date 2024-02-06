<?php
   session_start();
?>
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
           <link rel="stylesheet" href="http://localhost/elearning/desgin/css/style.css">
      
<style> 


.contact input {
  width: 100%;
  margin-top: 1rem;
  margin-bottom: 2rem;
  border-radius: .5rem;
  background-color: var(--light-bg);
  font-size: 1.8rem;
  color: var(--white);
  padding: 1.4rem;
  text-transform: none;
}
textarea{
    width: 100%;
  margin-top: 1rem;
  margin-bottom: 2rem;
  border-radius: .5rem;
  background-color: var(--light-bg);
  font-size: 1.8rem;
  color: var(--white);
  padding: 1.4rem;
  text-transform: none;

}
</style>
<!-- 
<style type="text/css">
    ::selection {
  background-color: var(--white);
  color: var(--black);
}
/* element {
} */
section {
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem;
}
* {
  font-family: 'Rubik', sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
  transition: .2s linear;
  text-transform: capitalize;
}
:root {
  --green: #00E77F;
  --white: #fff;
  --light-white: #aaa;
  --black: #3d3d3d;
  --light-bg: #4b4b4b;
}
:host, :root {
  --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Free";
}
:host, :root {
  --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Free";
}
:host, :root {
  --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
}
:root {
  --swiper-navigation-size: 44px;
}
:root {
  --swiper-theme-color: #007aff;
}
html {
  font-size: 62.5%;
} -->
</style>           
</head>
<body>

   <!-- <section class="reviews" id="reviews"> -->
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
      <a href="update_profile.php"    ><?php echo $_SESSION['uname'];   ?></a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

</header>
   <h1 class="heading" style="margin-top:6%;"> student's <span>reviews</span></h1>

   <div class="swiper reviews-slider">
      <!-- <div class="swiper-wrapper"> -->
<?php
     include "admin/conn.php";
    $qry = "select * from reviews";
    $data = mysqli_query($con,$qry);
    while($row = mysqli_fetch_array($data))
    {
?>
        <div class=" slide"style="flex-shrink: 0;width: 100%;height: 40%;position: relative;transition-property: transform;">
            <p><?php echo $row['review']?></p>
            <div class="user">
            <?php 
            if($row['image'] == ''){
                echo '<img src="loginpage/images/default-avatar.png">';
            }else{
                echo '<img src="  '.$row['image'].'">';
            }
            ?>
               <div class="user-info">
                  <h3><?php echo $row['name']?></h3>
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
<?php
    }
?>
<section class="contact" id="contact" >
   
<form method="post" enctype="multipart/form-data">
          <span style="font-size:30px;color:var(--light-white);">your name</span>
          <input type="text" required placeholder="enter your full name" maxlength="50" name="name" class="box">
          <span style="font-size:30px;color:var(--light-white);">Enter your review</span><br>
          <textarea required placeholder="enter your review" maxlength="500" name="review" class="box"></textarea>
            <input type="file" name = "image">
          <!-- <span>your profile</span>
          <input type="number" required placeholder="enter your valie number" max="9999999999" min="0" name="number" class="box" onkeypress="if(this.value.length == 10) return false;"> -->
          <!-- <span>select course</span> -->
         <!-- <select name="course" class="box" required>
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
          </select>  -->
          <!-- <span>select gender</span> -->
          <!-- <div class="radio">
             <input type="radio" name="gender" value="male" id="male">
             <label for="male">male</label>
             <input type="radio" name="gender" value="female" id="female">
             <label for="female">female</label>
          </div> -->
          <!-- <input type="submit" value="send message" class="btn" name="send"> -->
          <div align="center">
   <button  name="add_review" style="margin-bottom:10%;font-size:25px;"class="btn">add a review</button>
</div>
        </form>
 
    </div>
 
 </section>
         <!-- <div class=" slide"style="flex-shrink: 0;width: 100%;height: 40%;position: relative;transition-property: transform;">
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

         <div class=" slide"style="flex-shrink: 0;width: 100%;height: 40%;position: relative;transition-property: transform;">
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

         <div class=" slide"style="flex-shrink: 0;width: 100%;height: 40%;position: relative;transition-property: transform;">
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

         <div class=" slide"style="flex-shrink: 0;width: 100%;height: 40%;position: relative;transition-property: transform;">
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

         <div class=" slide"style="flex-shrink: 0;width: 100%;height: 40%;position: relative;transition-property: transform;">
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

      </div> -->

      <div class="swiper-pagination"></div>

   </div>
   
   <!-- </section> -->
        <!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="http://localhost/elearning/desgin/js/script.js"></script>
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
<?php
include "admin/conn.php";
if(isset($_POST['add_review']))
{
    $name = $_POST['name'];
    $review = $_POST['review'];
    $image = $_FILES['image'];
    $imagename = $image['name'];
    $image_tmp = $image['tmp_name'];
    $fileext=explode('.', $imagename);
    $filecheck=strtolower(end($fileext));
    $destinationfile='profiles/'.$imagename;
   	move_uploaded_file($image_tmp,'profiles/'.$imagename);
    $qry = "insert into reviews values('','$name','$review','$destinationfile');";
    $data = mysqli_query($con,$qry);
    if($data)
    {
        header('Location:http://localhost/elearning/desgin/review.php');
    }
    else{
        echo "<script>alert('error');</script>";
    }
}
?>