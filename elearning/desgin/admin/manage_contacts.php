<?php
session_start();
// session_start();

if (!isset($_SESSION['uname'])) {
 header('location:http://localhost/elearning/desgin/index.php');
 # code...

}
?>
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
        <div class="text">Manage contact</div>
        <div class="col-md-8" style="padding-left:10%;padding-top:2%;color:white;display:flex;text-align:center;">
<!-- </section> -->
    <script src="script.js"></script>
<?php
    include "conn.php";
    $qry = "select * from contacts_list;";
    $data = mysqli_query($con,$qry);
    if($row = mysqli_num_rows($data))
    {
        ?>
            <table style="font-size: 15px;"color="white" style="overflow:scroll;">
                <tr >
                    <th style="padding:20px">ID</th>
                    <th style="padding:50px">Name</th>
                    <th style="padding:50px">Email</th>
                    <th style="padding:20px">Number</th>
                    <th style="padding:20px">Course</th>
                    <th style="padding:20px">Gender</th>
                </tr>
                <!-- <tr>
                    <button name = "update">update</button>
                </tr> -->
     
        <?php
        while($res = mysqli_fetch_array($data))
        {
            echo "
                <tr>
                    <td style='padding:1%;'>".$res['Id']."</td>
                    <td>".$res['Name']."</td>
                    <td>".$res['Email']."</td>
                    <td>".$res['Number']."</td>
                    <td>".$res['course']."</td>
                    <td>".$res['Gender']."</td>
                    
                </tr>
                
            ";
        }
    }
    else
    {
        echo "no contacts";
    }
?>

</table>

</body>
</html>