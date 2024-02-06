
<?php
    session_start();
    // session_start();
    
    if (!isset($_SESSION['uname'])) {
     header('location:http://localhost/elearning/desgin/index.php');
     # code...
    
    }
    // include "admin-main.php";
    // $admin=new admin;
    // $userd=$admin->show_users();
?>

<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Dashboard Sidebar Menu</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">AdminLab</span>
                    <span class="profession">Web developer</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text" >Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="http://localhost/elearning/desgin/admin/add_user.php">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Add User</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="managecourse.php">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Manage Course</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="manage_contacts.php">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Manage Contacts</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="manage_reviews.php">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Manage Reviews</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="http://localhost/elearning/desgin/admin/edit_course_details.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Edit Courses</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="http://localhost/elearning/desgin/logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Dashboard Sidebar</div>
        <div class="col-md-8">
        
    <div style="margin-left:15%;margin-top:5%;color:black;background-color:white;">
        <?php
     include "conn.php";
    $qry = "select * from reviews";
    $data = mysqli_query($con,$qry);
    while($row = mysqli_fetch_array($data))
    {
?>
        <hr style="height:20px;background-color:black;">
        <div class=" slide"style="text-align:center;padding:20px;flex-shrink: 0;width: 100%;height: 40%;position: relative;transition-property: transform;">
            <p style="font-size:20px"><?php echo $row['review'];?></p>
            
            <div class="user">
            <?php 
            if($row['image'] == ''){
                // echo '<img src="loginpage/images/default-avatar.png">';
            }else{
                // echo '<img src="  '.$row['image'].'">';
            }
            ?>
               <div class="user-info">
               <h3 style="font-size:30px"><?php echo $row['name']?></h3>
               <p ><?php 
                echo "<a style='color:red;font-size:40px;' href='delete_reviews.php?Id=$row[Id]'>Delete</a>";
            ?></p>
                  <!-- <h3><a href="delete_reviews.php?name=$row[Id]"></a></h3> -->
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
<div class="swiper-pagination"></div>

</div>
<!-- <a href="http://localhost/elearning/desgin/add_review.php"  style="margin-bottom:10%;font-size:25px;"class="btn">add a review</a> -->
<!-- </section> -->
     <!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="http://localhost/elearning/desgin/js/script.js"></script>
<!-- footer section starts  -->    
        <!-- list of users starts -->

<!-- <table class="table ml-5 bg-white shodow pl-5 table-responsive" style=" height : 355px;overflow-y: scroll;display: inline-block; width: 640px;">  -->
  
 <!-- table stsrts  -->  <!--  use table-responsive class -->
<!-- <p class="ml-5">List of users</p> -->
<!-- <thead> -->
  <!-- <tr>

    <th scope="col">id</th>
    <th scope="col">Username</th>
    <th scope="col">email</th>
    <th scope="col">Password</th>
  </tr> -->
<!-- </thead> -->
<!-- <tbody > -->

   <!-- <//?php 
      //    foreach ($userd as $userdata) {
            
          
   ?> 
  <tr >
    <th scope="row"><//?php echo $userdata['Id']; ?></th>
    <td ><//?php echo $userdata['username']; ?></td>
    <td><//?php echo $userdata['email']; ?></td>
    <td><//?php echo $userdata['password']; ?></td>
  </tr>
  <//?php } ?>  -->
<!-- </tbody> -->
<!-- </table> -->

<!-- table ends  -->



<!-- </div>   list of users ends -->
    <!-- </section> --> 
    

    <script src="script.js"></script>
   

</body>
</html>
