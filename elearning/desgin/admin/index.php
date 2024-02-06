
<?php

// session_start();
session_start();

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
                        <a href="add_user.php">
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
        <!-- <div class="col-md-8">    list of users starts -->
        <table style="color:white;padding-left:20%;height : 60%;overflow-y: scroll;display: inline-block; width: 100%;"> 
  
 <!-- table stsrts  -->  <!--  use table-responsive class -->
                <p class="ml-5" style="padding-left:45%;color:white;">List of users</p>
                <thead>
                <tr style="padding:20px;">

                    <th style="padding-left:40%"scope="col">id</th>
                    <th style="padding-left:50%;"scope="col">Username</th>
                    <th style="padding-left:60%;"scope="col">email</th>
                    <th style="padding-left:70%;"scope="col">Password</th>
                </tr>
                </thead>
                <tbody >

                <?php 
                        include "conn.php";
                            $qry ="select * from users";
                            $res = mysqli_query($con,$qry);

                        while($row = mysqli_fetch_array($res))
                        {
                            $names[] = $row;
                        }
                        foreach ($names as $name) {
                            
                        
                ?> 
                <tr>
                    <th style="padding-left:40%" scope="row"><?php echo $name['Id']; ?></th>
                    <td style="padding-left:50%;"><?php echo $name['username']; ?></td>
                    <td style="padding-left:60%;"><?php echo $name['email']; ?></td>
                    <td style="padding-left:70%;"><?php echo $name['password']; ?></td>
                </tr>
                
                <?php
             } 
             ?>
                </tbody>
                </table>

<!-- table ends  -->



</div>   <!-- list of users ends -->
    </section>
    

    <script src="script.js"></script>
   

</body>
</html>
