<?php 

				// in this file --> code for add a new course ,update a course and delete a course by admin from manage_courses.php
    
                session_start();
                // session_start();
                
                if (!isset($_SESSION['uname'])) {
                 header('location:http://localhost/elearning/desgin/index.php');
                 # code...
                
                }
 include "conn.php";   
// ==========================================================================================

					// code to add a new course by admin from manage_courses.php

if (isset($_POST['btn_add'])) {
$course_name=$_POST['course_name'];
$languageimg=$_FILES['course_image'];
$course_desc=$_POST['course_desc'];

$filename=$languageimg['name'];
print_r($languageimg);		
$fileerror=$languageimg['error'];   
$filetmp=$languageimg['tmp_name'];


$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));

$fileextstored= array('png','jpg','jpeg' );


if (in_array($filecheck,$fileextstored)) {
	$destinationfile='uploadimg/'.$filename;
	move_uploaded_file($filetmp,'../../uploadimg/'.$filename);

	$q="insert into courses(course_name,description,image) values('$course_name','$course_desc','$destinationfile')";
	$r=mysqli_query($con,$q);

 if ($r==true) {
 header("location:managecourse.php?status=added");
    }
	
 }
}


// ============================================================================================

				// code to add a new course by admin from manage_courses.php

if (isset($_POST['btn-delete-course'])) {
	
	$course_name=$_POST['selected_course'];
	$q="DELETE FROM courses WHERE course_name='$course_name'";
	$r=mysqli_query($con,$q);
	if ($r) 
	{
		header("location:managecourse.php?status=deleted");
	}

}


// ==============================================================================
					// code to update course by admin from manage_courses.php


if (isset($_POST['btn_update'])) {
	$languagename=$_POST['selected-course-to-update'];
$languageimg=$_FILES['course_image'];
$languagedesc=$_POST['course_desc'];

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

	$q=" UPDATE courses SET image='$destinationfile',description='$languagedesc' WHERE course_name='$languagename'";
	$r=mysqli_query($con,$q);

 if ($r==true) {
 header("location:managecourse.php?status=updated");
    }
	
 }
}



// =====================================================================================================================================
// ========================================================================================================================
     // in this section add videos ,update videos and delete videos is going on from manage_videos.php


if (isset($_POST['btn_add'])) {
$coursename=$_POST['course_name'];
$courseimg=$_FILES['course_image'];
$coursedesc=$_POST['course_desc'];

$filename=$courseimg['name'];
print_r($courseimg);		
$fileerror=$courseimg['error'];   
$filetmp=$courseimg['tmp_name'];


$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));

$fileextstored= array('png','jpg','jpeg' );

if (in_array($filecheck,$fileextstored)) {
	$destinationfile='uploadimg/'.$filename;
	move_uploaded_file($filetmp,$destinationfile);

	$q="insert into programming_languages(image,description,course_name) values('$destinationfile','$coursedesc','$coursename')";
	$r=mysqli_query($con,$q);

 if ($r==true) {
 header("location:manage_courses.php?status=added");
    }
	
 }
}



