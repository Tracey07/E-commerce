<?php
    // landing/index page
  include("../controllers/customer_controller.php");

//register process
  if (isset($_POST['submit'])) {
    $name= $_POST['customer_name'];
    $email= $_POST['customer_email'];
    $password= $_POST['customer_pass'];
    $country= $_POST['customer_country'];
    $city= $_POST['customer_city'];
    $contact=$_POST['customer_contact'];
    $user_role = 2;

//inserts into customer table
    $registering= insert_ctr($name, $email, $password, $country, $city, $contact, $user_role);
    if($registering){
    echo "You have sucessfully registered a new customer.";
    // now redirects to the login page
    header("Location: login.php");

  } else
  {
    echo "Your registration was unsuccessful";
  }

}
?>