<?php

// connect db
require_once './sqlcon.php';

// get data from form
extract($_POST);

if(empty($user_name) || empty($password))
{
    echo "<script>";
    echo 'alert("Required parameters are not set!\nPlease fill the registration form carefully!"),';
    echo "location.href='/'";
    echo "</script>";
    
}
else
{
    $check = "SELECT username from users where username='$user_name' and password='$password'";

    $run_check =  mysqli_query($conn,$check);

    if($run_check)
    {
        if(mysqli_num_rows($run_check)>0)
        {
            $row = mysqli_fetch_assoc($run_check);
            $user_name = $row['username'];
            session_start();
            $_SESSION['username'] = $user_name;
            header("location:./welcome.php");
        }
        else
        {
            echo "<script>";
            echo 'alert("Alert: Wrong Username or Password"),';
            echo "location.href='/'";
            echo "</script>";
        }
    }
    else
    {
        echo mysqli_error($conn);
    }
}


?>