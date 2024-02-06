<?php
session_start();
?>
<?php
    // echo $_GET['Id'];
    include "conn.php";
    $id = $_GET['Id'];
    $qry = "DELETE FROM reviews WHERE Id='$id'";
    $data = mysqli_query($con,$qry);
    if($data)
    {
        echo "<script>alert('deleted');</script>";
        header('location:manage_reviews.php');
    }
    else
    {
        echo "error";
    }
?>
