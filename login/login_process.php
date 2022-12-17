<?php

 include("../controllers/customer_controller.php");
 include("../settings/core.php");
 

  if (isset($_POST['submit'])) {
    $email= $_POST['customer_email'];
    $password= $_POST['customer_pass'];
  
//calling the ctr
    $check= login_ctr($email,$password);

//method for checking the email and password to retrive the information for the touser logins
    if($check) {
  // print_r ($check);
  //set session for customer_id and user role
  // session_start();
    $_SESSION['cid'] = $check['customer_id'];
    $_SESSION['userRole'] = $check['user_role'];
//checking if the person logging in is an admin or customer
    $adminchecking= check_user_role();

    echo $_SESSION['cid'];

// now redirects to the index page
    header("Location: ../view/homepage.php");
    } else
    {
    echo "Log in failed";
    }
  }
