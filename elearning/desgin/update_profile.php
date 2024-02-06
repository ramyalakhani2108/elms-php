<?php
session_start();
if (!isset($_SESSION['uname']) ){
	header('location:index.php');
	# code...

}
?>

<!DOCTYPE html>
<html lang="en" overflow="scroll" id>
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
   <link rel="stylesheet" href="loginpage/css/style.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body >
   
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
<div class="update-profile" >

<?php
    include "admin/conn.php";
    $user = $_SESSION['uname'];
    $pass = $_SESSION['pass'];
   $select = mysqli_query($con, "SELECT * FROM users WHERE username='$user'") or die('query failed');
//    if(mysqli_num_rows($select) > 0){
      $fetch = mysqli_fetch_array($select);
        $id = $fetch['Id'];
        $pass1 = $fetch['password'];
      //   echo $pass;
        // echo "$id";
//    }
?>

<form action="" method="post" enctype="multipart/form-data">
   <?php
      if($fetch['image'] == ''){
         echo '<img src="loginpage/images/default-avatar.png">';
      }else{
         echo '<img src="  '.$fetch['image'].'">';
      }
    //   if(isset($message)){
    //      foreach($message as $message){
    //         echo '<div class="message">'.$message.'</div>';
    //      }
    //   }
   ?>
   <div class="flex" >
      <div class="inputBox">
         <span>username :</span>
         <input type="text" name="update_name" value="<?php echo $fetch['username']; ?>" class="box">
         <span>your email :</span>
         <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
         <span>update your pic :</span>
         <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
      </div>
      <div class="inputBox">
         <input type="hidden" name="old_passsss" >
         <span>old password :</span>
         <input type="text" name="old_pass" readonly="readonly" value="<?php echo $fetch['password'];?>" class="box">
         <span>new password :</span>
         <input type="password" name="new_pass" placeholder="enter new password" class="box">
         <span>confirm password :</span>
         <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
      </div>
   </div>
   <!-- < style="overflow:scroll;"> -->
   <input type="submit" value="update profile" name="update_profile" class="btn">
   <a href="login.php" class="delete-btn">go back</a>
   <a href="logout.php" class="delete-btn">Log Out</a>
    
</form>

</div>
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

<?php

//Updating the profile
if(isset($_POST['update_profile'])){
        $unamee = $_POST['update_name'];
        $uemail = $_POST['update_email'];
        $opass = $_POST['old_pass'];
        $uimage = $_FILES['update_image'];
        $uimage_name = $uimage['name'];
        echo $uimage_name;
        $uimage_error = $uimage['error'];
        $uimage_tmp = $uimage['tmp_name'];
        $fileext=explode('.', $uimage_name);
        $filecheck=strtolower(end($fileext));
      //   $destinationfile='uploadimg/'.$uimage_name;
        
   // $fileextstored= array('png','jpg','jpeg' );


   // if (in_array($filecheck,$fileextstored)) {
   	$destinationfile='profiles/'.$uimage_name;
   	move_uploaded_file($uimage_tmp,'profiles/'.$uimage_name);
   	   // move_uploade
      // echo "<script>alert('$pass');</script>";
         //   if($opass == $pass1)
         //   {
               // echo"$pass";
               $newpass = $_POST['new_pass'];
               $cnewpass = $_POST['confirm_pass'];
               if($newpass = $cnewpass)
               {
                       $qry = "update users set username='$unamee',email='$uemail',password='$cnewpass',image='$destinationfile' where Id='$id'";
                       $data = mysqli_query($con,$qry);
                       if($data)
                       {
                           echo "<script>alert('Updated profile successfully');</script>";
                           header('Location:update_profile.php');
                       }
                       else
                       {
                           echo "<script>alert('Can't updated');</script>";
                       }
               }
               else{
                   echo "<script>alert('please check you confirm password');</script>";
               }
           }
         //   else
         //   {
         //       echo"<script>alert('Please enter right old password');</script>";
         //   }
      // }
// }
?>