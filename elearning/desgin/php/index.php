<?php
   session_start();
    include "conn.php";
    echo "checking";
    if(isset($_POST['sin']))
    {
        
        $uname = $_POST['uname'];
        echo "<b>$uname</b>";
        $pass = $_POST['pass'];
        
        if($pass=='' or $uname == ''){
            echo "please enter the password or username";
        }
        else if($pass == 'admin' && $uname='admin')
        {
            $_SESSION['pass'] = $pass;
            $_SESSION['uname'] = $uname;
            header('Location: http://localhost/elearning/desgin/admin/index.php');
        }
        else{
            $qry ="SELECT username FROM users WHERE username='$uname' AND password='$pass'";
            $data = mysqli_query($con,$qry);
            if($data)
            {
                if($r = mysqli_fetch_array($data))
                {
                    // $uname = $r['uname'];
                    $_SESSION['pass'] = $pass;
                    $_SESSION['uname'] = $uname;
                    
                    header('Location:  http://localhost/elearning/desgin/login.php');
                }
                else{
                    
                    echo "no record found";
                }
            }
        }
    }
    else if(isset($_POST['sup']))
    {
        
     
        echo "checking.....<br/>";
        $pass = $_POST['passo'];
        $cpass = $_POST['cpass'];
        if($pass == $cpass)
        {
            echo "password is correct";
            $uname = $_POST['unamesup'];
            $email = $_POST['mail'];
            if($pass != '' and $uname != '' and $email !='')
            {
                $qry = "SELECT username,email FROM users WHERE username = '$uname' OR email= '$email'";
                $data = mysqli_query($con,$qry);
                $r=mysqli_fetch_array($data);
                // echo ""; 
                if($r)
                {
                    $demail = $r['email'];
                    $duname = $r['username'];
                    // echo "$demail";
                    
                    if($email == $demail or $uname == $duname)
                    {
                        echo "<br/>User already Registered";
                    }
                }
                else{
                    include "conn.php";
                    // echo "successfully Registered";
                    $qry = "INSERT INTO users VALUES('','$uname','$email','$pass','');";
                    $data = mysqli_query($con,$qry);
                    if($data)
                    {
                        // $_SESSION['pass'] = $pass;
                        // $_SESSION['uname'] = $uname;
                        header('Location:http://localhost/elearning/desgin/login.php');
                    }
                    else{
                        echo 'error';
                    }
                }
            }
            else
            {
                echo "some thing is empty";
            }
        }
        else
        {
            echo "just go back and check your passoword ";
        }
    }
?>  