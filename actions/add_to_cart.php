<?php

include('../controllers/cart_controller.php');


//getting the product id
$p_id= $_GET['product'];

//getting the ip address
$ip_add=$_SERVER['REMOTE_ADDR'];  

//getting the customer id
// session_start(); 

if (isset($_SESSION['cid'])) 
{
  $c_id=$_SESSION['cid'];
}
else
{
  header("location:../login/login.php");
} 

$add=add_to_cart_ctr($p_id, $ip_add, $c_id, 1);
  if($add)
  {
  echo "Successfully added";
//redirects you to the login page
  header("Location: ../view/all_product.php");
    

  }
  else
  {

//echos failed when unsuccessful
  echo "failed to add to cart";
  }


?>

