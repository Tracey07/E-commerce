<?php
//connect to the user account class
include("../classes/customer_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}


//--INSERT--//
//insert into customer table
function insert_ctr ($name, $email, $password, $country, $city, $contact,$user_role){
  //creating an instance of the class
  $newclass = new customer_class();

//returning a method of the cass
  return $newclass->insert_clas($name, $email, $password, $country, $city, $contact, $user_role);
}

//function for login
function login_ctr($email, $password){
  $new_class = new customer_class();
   return $new_class->login_cls( $email, $password);
}


//function to get all customers
function getAllCustomers_ctr(){
   //create an instance of the class
   $newClass = new customer_class();

   return $newClass->getAllCustomers_cls();
}


?>