
<?php
session_start();
// session_start();

if (!isset($_SESSION['uname'])) {
 header('location:http://localhost/elearning/desgin/index.php');
 # code...

}
    include "conn.php"; //calling display_courses() method from manage_courses_class.php
    // include "add_user_class.php";
    // $names=new add_user;			// creating object of  manage_courses_class.php
    // $name=$names->user_list(); 
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
    <style type="text/css">
      body{
        overflow: hidden;
        
      }
     .hello   a {
  background-color: #3d3d3d;
  box-shadow: 0 5px 0 #00E77F;
  color: white;
  padding: 1em 1.5em;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
}

  .hello a:hover {
  background-color: #00E77F;
  cursor: pointer;

}

 .hello a:active {
  /* box-shadow: none; */
  background-color: #00E77F;
  top: 5px;
}
/* .hello a:visited{
    background-color: #00E77F;
} */

/* hide scrollbar but allow scrolling */


/* Non-Demo Styles */
/* body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
} */
        /* element {
} /* element {
} /* element {
} */
/* .card-body {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1.25rem;
}
@media (min-width: 768px){}
.col-md-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}
.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
*, ::after, ::before {
  box-sizing: border-box;
}
.card {
  word-wrap: break-word;
}
body {
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
}
:root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #007bff;
  --secondary: #6c757d;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #dc3545;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
}
.card {
    background-color: #ffffff;
    border: 1px solid rgba(0, 34, 51, 0.1);
    box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
    border-radius: 0.15rem;
}

/* Tabs Card */

/* .tab-card {
  border:1px solid #eee;
}

.tab-card-header {
  background:none;
}
/* Default mode */
/* .tab-card-header > .nav-tabs {
  border: none;
  margin: 0px;
}
.tab-card-header > .nav-tabs > li {
  margin-right: 2px;
}
.tab-card-header > .nav-tabs > li > a {
  border: 0;
  border-bottom:2px solid transparent;
  margin-right: 0;
  color: #737373;
  padding: 2px 15px;
}

.tab-card-header > .nav-tabs > li > a.show {
    border-bottom:2px solid #007bff;
    color: #007bff;
}
.tab-card-header > .nav-tabs > li > a:hover {
    color: #007bff;
}

.tab-card-header > .tab-content {
  padding-bottom: 0; */
/* } */

button{
    width:50%;
    background-color: #00E77F;
    border-radius: .4rem;
}
</style>
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


    <script src="script.js"></script>
    <section class="home">
        <div class="text">Dashboard Sidebar</div>
    <div class="tab-pane container fade" id="manage_course">
  	



      <center><div class="col-md-7">


<div class="card mt-3 tab-card" style="padding-top:1%;" >
    
    <div class="card-header tab-card-header"style="position:fixed;padding-left:40%;">
      <!-- <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist"> -->
        <!-- <li class="nav-item"> -->
            <table class="hello" >
                <tr>
                    <td style="padding:30px;">
            
                        <!-- <a class="nav-link" id="one-tab"data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">ADD</a> -->
                        <a  id="one-tab"data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">ADD</a>
                <!-- </li> -->
                    <!-- </td> -->
                <!-- <li class="nav-item"> -->
                    <!-- <td style="padding:20px;"> -->
                     <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">UPDATE</a>
                    <!-- <td style="padding:20px;"> <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">UPDATE</a> -->
                    <!-- </td> -->
                    <!-- </li> -->
                    <!-- <td style="padding:20px;"> -->
                    <!-- <td style="padding:20px;"> -->
                    <!-- <li class="nav-item"> -->
                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">DELETE</a>
                        <!-- </li> -->
                    </td>
      <!-- </ul> -->
      </tr>
        </table>
    </div>

    <div class="tab-content" id="myTabContent">   <!-- tab content starts -->


        <!-- ======================================================================================================= -->
                    <!-- add new course tab starts -->

      <div class="tab-pane fade show active p-3" style="padding:6%;"id="one" role="tabpanel" aria-labelledby="one-tab" >

        <div class="card-body col-md-12">
            



                <div class="card" style="color:var(--text-color);box-shadow: 2px 2px 2px 2px  #00E77F;margin:10%;padding:5%;background-color:var(--sidebar-color);">
              <div class="card-header bg-danger text-light p-2 cardh2"style="padding-bottom:4%;"><h3>ADD NEW USER</h3></div>
              
              <div class="card-body small" >

              <form action="" method="post" style="font-weight:bold;" enctype="multipart/form-data" onsubmit="return validation()" >
              <!-- <form action="course_add.php" method="post" style="font-weight:bold;" enctype="multipart/form-data" onsubmit="return validation()" > -->
                    <div class="form-group" style="padding:2%;">
                      <label for="email" style="padding-right:5%;">User Name :</label>
                      <input type="text" class="form-control" id="c_name" placeholder="Enter User Name" name="username">
                      <span id="name_error" class="text-danger font-weight-bold"></span>
                    </div>
                    <div class="form-group"style="padding:2%;">
                      <label for="pwd"style="padding-right:5%;">Email :</label>
                      <input type="email" class="form-control" id="c_email" placeholder="Enter Course Description" name="email">
                      <span id="desc_error" class="text-danger font-weight-bold"></span>
                    </div>

                     <div class="form-group"style="padding:2%;">
                      <label for="pwd"style="padding-right:5%;">Password</label>
                      <input type="password" class="form-control" id="c_pass" placeholder="Enter Password" name="pass"">
                      <span id="pass_error" class="text-danger font-weight-bold"></span>
                    </div>

                     <div class="form-group"style="padding:2%;">
                      <label for="pwd"style="padding-right:5%;">User Image</label>
                      <input type="file" class="form-control" id="c_img" placeholder="Enter Course Image" name="userimage">
                      <span id="image_error" class="text-danger font-weight-bold"></span>
                    </div>
                    
                    <div class="">
                    <button type="submit" class="btn btn-danger"  name="btn_add">Submit</button>
                    </div>
              </form>

            </div>
        </div>
        </div>
      </div>
                                      <!-- add new course tab ends -->
            <!-- ======================================================================================================= -->




            <!-- ======================================================================================================= -->
                                    <!-- update course tab starts -->		


      <div class="tab-pane fade p-3" style="padding:5%;" id="two" role="tabpanel" aria-labelledby="two-tab">
       
        <div class="card-body col-md-12">
            

                <div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;margin:10%;margin:10%;padding:5%;background-color:var(--sidebar-color);">
              <div class="card-header bg-primary text-light p-2 cardh2 "style="color:var(--text-color);"><h3>UPDATE USER</h3></div>
              
              <!-- <div class="card-body small" > -->
                    
             

             <form action="" method="post" enctype="multipart/form-data" onsubmit="" style="color:var(--text-color);font-weight:bold;">


                  <div class="form-group"style="padding:2%;">

                    <label for="exampleFormControlSelect1"style="padding-right:5%;">Select User Name :</label>
                    <select style="padding-left:5%;"class="form-control" id="exampleFormControlSelect1" name="selected-name-to-update">
                          <?php
                            include "conn.php";
                            
                              $qry = "select * from users";
                              $res = mysqli_query($con,$qry);
                              while($row = mysqli_fetch_array($res))
                              {
                                $user_list[] = $row;
                              }
                          foreach ($user_list as $name)
                         {

                                    ?> 
                      <option><?php echo  $name['username']; ?></option>
                      <?php } ?>

                    </select>
                  </div>
                   
                    
                    <div class="form-group" style="padding:2%;">
                      <label for="pwd"style="padding-right:5%;">Email :</label>
                      <input type="email" class="form-control" id="c_email" placeholder="Enter Email" name="email">
                      <span id="email_error" class="text-danger font-weight-bold"></span>
                    </div>
                   
                    
                    <div class="form-group" style="padding:2%;">
                      <label for="pwd"style="padding-right:5%;">Password :</label>
                      <input type="password" class="form-control" id="c_pass" placeholder="Enter Password" name="pass">
                      <span id="pass_error" class="text-danger font-weight-bold"></span>
                    </div>

                     <div class="form-group" style="padding:2%;">
                      <label for="pwd" style="padding-right:5%;">Course Image</label>
                      <input type="file" class="form-control" id="c_img" placeholder="Enter User Image" name="userimage">
                      <span id="image_error" class="text-danger font-weight-bold"></span>
                    </div>
                    
                    <div class="">
                    <button type="submit" class="btn btn-danger" name="btn_update">Submit</button>
                    </div>
              </form>

            </div>
        </div>


        </div>           
      </div>


                                      <!-- update course tab ends -->
            <!-- ======================================================================================================= -->



            <!-- ======================================================================================================= -->
                                    <!-- delete course tab starts -->		


      <div class="tab-pane fade p-3" style="padding:5%;" id="three" role="tabpanel" aria-labelledby="three-tab">
       
        <div class="card-body col-md-12">
            



                <div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf; margin:10%;background-color:var(--sidebar-color);color:var(--text-color);">
              <div class="card-header bg-primary text-light p-2 cardh2"style="padding:2%;"><h3>DELETE USER</h3></div>
              
              <div class="card-body small" >

              <!-- <form action="course_add.php" method="post" enctype="multipart/form-data"style="background-color:var(--sidebar-color);"> -->
              <form action="" method="post" enctype="multipart/form-data"style="background-color:var(--sidebar-color);">
                   <div class="form-group"style="padding:5%;">
                    <label for="exampleFormControlSelect1">Select User :  </label>
                    <select class="form-control" id="exampleFormControlSelect1" name="selected_user">
                      <?php  foreach ($user_list as $name)
                         {
                                    ?> 
                      <option><?php echo  $name['username']; ?></option>
                      <?php } ?>
                    </select>
                    <!-- <label>Changed username</label> -->
                  </div>
                      
                    <div class="float-left"style="padding-bottom:6%;">
                    <button type="submit" class="btn btn-danger" name="btn-delete-course">Submit</button>
                    </div>
              </form>

            </div>
        </div>


        </div>          
      </div>



                                          <!-- delete course tab ends -->
            <!-- ======================================================================================================= -->

    </div>			<!-- tab content  -->
  







              
          </div></center>


</div>

<script type="text/javascript">
    function validation()
	{
		var name=document.getElementById('c_name').value;
		var email=document.getElementById('c_email').value;
		var desc=document.getElementById('c_pass').value;
		var img=document.getElementById('c_img').value;
		if (name=="")
		{ 
			document.getElementById('name_error').innerHTML="** please enter the User name";
			return false;

		}

		if (desc=="")
		{ 
			document.getElementById('pass_error').innerHTML="** please enter the password";
			return false;

		}

		if (email=="")
		{ 
			document.getElementById('desc_error').innerHTML="** please enter the email";
			return false;

		}
		if (img=="")
		{ 
			document.getElementById('image_error').innerHTML="** please choose an image";
			return false;

		}
	}
</script>
</body>
</html>
<?php
//php code starts from here


				// in this file --> code for add a new course ,update a course and delete a course by admin from manage_courses.php

//  session_start();

   $con=mysqli_connect('localhost','root');

mysqli_select_db($con,'elearning');

// ==========================================================================================

					// code to add a new user by admin from manage_courses.php

if (isset($_POST['btn_add'])) {
	$username=$_POST['username'];
    $password=$_POST['pass'];
    $email=$_POST['email'];
    $userimg=$_FILES['userimage'];
// $languagedesc=$_POST['course_desc'];

$filename=$userimg['name'];
print_r($userimg);		
$fileerror=$userimg['error'];   
$filetmp=$userimg['tmp_name'];


$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));

$fileextstored= array('png','jpg','jpeg' );


if (in_array($filecheck,$fileextstored)) {
	$destinationfile='uploadimg/'.$filename;
	move_uploaded_file($filetmp,'../../uploadimg/'.$filename);

	$q="INSERT into users values('','$username','$email','$password','$destinationfile')";
	// $q="INSERT into users(username,email,password,image) values('$username','$email','$password','$destinationfile')";
	$r=mysqli_query($con,$q);

 if ($r==true) {
//  header("location:https://www.youtube.com");
 header("location:add_user.php?status=added");
    }
	
 }
}


// ============================================================================================

				// code to add a new course by admin from manage_courses.php

if (isset($_POST['btn-delete-course'])) {
	
	$username=$_POST['selected_user'];
	$q="DELETE FROM users WHERE username='$username'";
	$r=mysqli_query($con,$q);
	if ($r) 
	{
		header("location:add_user.php?status=deleted");
	}

}


// ==============================================================================
					// code to update course by admin from manage_courses.php


if (isset($_POST['btn_update'])) {
  
	$uname=$_POST['selected-name-to-update'];
  $pass = $_POST['pass'];
  $userimg=$_FILES['userimage'];
  $email = $_POST['email'];
// $languagedesc=$_POST['course_desc'];

  $filename=$languageimg['name'];
  print_r($languageimg);		
  $fileerror=$languageimg['error'];   
  $filetmp=$languageimg['tmp_name'];


  $fileext=explode('.', $filename);
  $filecheck=strtolower(end($fileext));

  $fileextstored= array('png','jpg','jpeg' );

  if (in_array($filecheck,$fileextstored)) {
  	$destinationfile='uploadimg/'.$filename;
  	move_uploaded_file($filetmp,$destinationfile);

  	$q="UPDATE users SET email='$email',image='$destinationfile',password='$pass' WHERE username='$uname'";
  	$r=mysqli_query($con,$q);

   if ($r==true) {
   header("location:youtube.com");
      }
    
   }
}



// =====================================================================================================================================
// ========================================================================================================================
     // in this section add videos ,update videos and delete videos is going on from manage_videos.php


// if (isset($_POST['btn_add'])) {
// 	$username=$_POST['username'];
//     $email=$_POST['email'];
//     $courseimg=$_FILES['course_image'];
// // $coursedesc=$_POST['course_desc'];

// $filename=$courseimg['name'];
// print_r($courseimg);		
// $fileerror=$courseimg['error'];   
// $filetmp=$courseimg['tmp_name'];


// $fileext=explode('.', $filename);
// $filecheck=strtolower(end($fileext));

// $fileextstored= array('png','jpg','jpeg' );

// if (in_array($filecheck,$fileextstored)) {
// 	$destinationfile='uploadimg/'.$filename;
// 	move_uploaded_file($filetmp,$destinationfile);

// 	$q="insert into users(image,description,course_name) values('$destinationfile','$coursedesc','$coursename')";
// 	$r=mysqli_query($con,$q);

//  if ($r==true) {
//  header("location:manage_courses.php?status=added");
//     }
	
//  }
// }


?>