<?php
   session_start();
?>

<html>
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
    <section class="contact" id="contact">
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
          <select name="course" class="box" required>
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
 
 </section>
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
</html>
<?php

include "admin/conn.php";

if(isset($_POST['send']))
{
      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $course = $_POST['course'];
      $gender = $_POST['gender'];

      $qry = "select * from contacts_list where Name = '$name' and Email='$email' and Number='$number' and course='$course' and Gender='$gender'";
      $data = mysqli_query($con,$qry);
      if($r = mysqli_fetch_array($data))
      {
         echo "<script>alert('you have already contacted us we will reach you very soon ');</script>";
      }
      else
      {
         $qry = "insert into contacts_list values('','$name','$email','$number','$course','$gender');";
         $data = mysqli_query($con,$qry);
         if($data) {
               echo "<script>alert('thank you for contacting us');</script>";
         }
         else{
               echo "<script>alert('sorry your contact can not be reached');</script>";
         }
      }
}
?>