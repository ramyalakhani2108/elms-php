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
<html lang="en" style="overflow:hidden;">
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
   <link rel="stylesheet" href="http://localhost/elearning/desgin/sidebar/style.css">
   <link rel="stylesheet" href="http://localhost/elearning/desgin/css/style.css">
   <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
            .btn:hover{
                background-color: black;
            }
    </style>
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
         <a href="http://localhost/elearning/desgin/update_profile.php"    ><?php echo $_SESSION['uname'];   ?></a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

</header>
<!-- header section ends -->
<div class="btn" style="position:fixed;color:white;margin-top:4%;padding:2%;margin-left:1%;height:100px;width:100px;">
      <span class="fas fa-bars" ></span>
    </div>
    <nav class="sidebar" style="overflow:scroll;">
      <div class="text">Side Menu</div>
      <ul>
        <li class="active"><a href="webdev.php">Dashboard</a></li>
        <!-- <li>
          <a href="#" class="feat-btn">Features
            <span class="fas fa-caret-down first"></span>
          </a>
          <ul class="feat-show">
            <li><a href="#">Pages</a></li>
            <li><a href="#">Elements</a></li>
          </ul> 
        </li> -->
        <!-- <li>
          <a href="#" class="serv-btn">Services
            <span class="fas fa-caret-down second"></span>
          </a>
          <ul class="serv-show">
            <li><a href="#">App Design</a></li>
            <li><a href="#">Web Design</a></li>
          </ul>
        </li> -->
        <?php
               
               include "conn.php";
               $conn = mysqli_connect('localhost','root','','elearning_courses');
               if($conn)
               {
                    $qry = "SELECT * FROM webdev";
                    $data = mysqli_query($conn,$qry);
                    if($data)
                    {
                        while($r = mysqli_fetch_array($data))
                        {
                            echo "<li><a href='#section$r[Id]'>".$r['topic_name']."</a></li>";
                        }
                    }

                // <li><a href="#">Shortcuts</a></li>
                // <li><a href="#">Feedback</a></li>
               }
            //    <li><a href="#">Portfolio</a></li>

        ?> 
      
      </ul>
      <!-- <h1> hii</h1> -->
    </nav>
    <!-- <div id="section1" style="margin-top:10%">
               <h1>hello</h1>




    </div> -->

    <div class="content" style="word-wrap:break-word;margin-left:30%;margin-top:100%;font-size:1px;">
      
      <!-- <div class="header">Sidebar Menu with sub-menu</div> -->
            <section id="section1" style="margin-top:100%;">
               <iframe height="500px" width="700px"src="https://www.javatpoint.com/html-tags"></iframe>
            </section>




            <section id="section2" style="margin-top:50%;">
               <iframe height="500px" width="700px" src="https://www.javatpoint.com/html-tags"></iframe>
            </section>
            <section id="section3" style="margin-top:50%;">
               <iframe height="500px" width="700px"src="https://www.javatpoint.com/html-tags"></iframe>
            </section>
            <section id="section4"style="margin-top:50%;">
               <iframe height="500px" width="700px"src="https://www.javatpoint.com/html-tags"></iframe>
            </section>
      <!-- </p> -->
      
    <!-- </div> -->

    <script>
    $('.btn').click(function(){
      $(this).toggleClass("click");
      $('.sidebar').toggleClass("show");
    });
      $('.feat-btn').click(function(){
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
      });
      $('.serv-btn').click(function(){
        $('nav ul .serv-show').toggleClass("show1");
        $('nav ul .second').toggleClass("rotate");
      });
      $('nav ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
      });
    </script>

    <!-- footer section starts  -->
    
<!-- <footer class="footer" style="margin-top:5%;">

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

</footer> -->
<!-- <script>
    $('.btn').click(function(){
      $(this).toggleClass("click");
      $('.sidebar').toggleClass("show");
    });
      $('.feat-btn').click(function(){
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
      });
      $('.serv-btn').click(function(){
        $('nav ul .serv-show').toggleClass("show1");
        $('nav ul .second').toggleClass("rotate");
      });
      $('nav ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
      });
    </script> -->
<!-- footer section ends -->
</body>
</html>