<?php

include("../classes/cart_class.php");
if (!isset($_SESSION)) {
  session_start();
}


//INSERT INTO CART
//Add to cart when user is logged in
function add_to_cart_ctr($p_id, $ip_add, $c_id, $qty)
{
  $cart_instance = new Cart_class();
  return $cart_instance->add_to_cart($p_id, $ip_add, $c_id, $qty);
}

//Add to cart when user is not logged in
function add_to_cart_notLogin_controller($p_id, $ip_add, $qty)
{
  $cart_instance = new Cart_class();
  return $cart_instance->add_to_cart_notLogin($p_id, $ip_add, $qty);
}


//selects all products from cart when user is not logged in
function select_all_products_cart_controller($ip_add)
{
  $cart_instance = new Cart_class();
  return $cart_instance->select_all_products_cart($ip_add);
}

//get items from cart
function get_CartItems()
{
  $product_array = array();

  //create an instance of the product class
  $cart_instance = new Cart_class();

  $ip_add = getenv("REMOTE_ADDR");

  if (isset($_SESSION["cid"])) {
    $user_id = $_SESSION['cid'];
    $product_records = $cart_instance->select_all_products_carts_loggedIn($user_id);
  } else {
    $product_records = $cart_instance->select_all_products_cart($ip_add);
  }

  // $product_records = $cart_instance->select_all_products_cart($ip_add);

  if ($product_records) {

    //loop to see if there is more than one result
    //fetch one at a time
    while ($rec = $cart_instance->db_fetch()) {
      $product_array[] = $rec;
    }
  }
  return $product_array;
}

/*Removing Items from Cart when user  is not logged in*/
function remove_cart_controller($prod_id, $ip_add)
{
  $cart_instance = new Cart_class();
  return $cart_instance->remove_cart_cls($prod_id, $ip_add);
}

//Removing items from Cart when user is logged in
function remove_carts_controller($prod_id, $session)
{
  $cart_instance = new Cart_class();
  return $cart_instance->remove_carts_user_id_cls($prod_id, $session);
}


//update cart item when user is not logged in
function updateCartQty($qty, $prod_id, $ip_add)
{ //not logged In
  $cart_instance = new Cart_class();
  return $cart_instance->updateCartQty_notLogin($qty, $prod_id, $ip_add);
}


//update cart item when user is logged in
function updateCartQty_Logged($qty, $prod_id, $session)
{ // logged In
  $cart_instance = new Cart_class();
  return $cart_instance->updateCartQty_Login($qty, $prod_id, $session);
}


//
function updateCart_CID($session){
  $cart_instance = new Cart_class();
  return $cart_instance->updateCart_CID($session);
}



//--INSERT INTO PAYMENT--//
//insert into payment table
function insert_payment_ctr($amount, $c_id, $order_id, $cc, $pdate)
{
  //create an instance of the class
  $newclass = new Cart_class();
  
  //returning the method 
  return $newclass->insert_payment_cls($amount, $c_id, $order_id, $cc, $pdate);
}


//insert into order table
function insert_order_ctr($c_id, $invoice, $date, $status){
     $newclass = new Cart_class();
     return $newclass->insert_order($c_id, $invoice, $date, $status);
}


//insert into order details table 
function insert_orderDetails_ctr($order_id, $product_id, $qty){
     $newclass = new Cart_class();
     return $newclass->insert_orderDetails($order_id, $product_id, $qty);
}


//recent order from order table
function recent_order_ctr(){
     $newclass = new Cart_class();
     return $newclass->recentOrder();
}


?>


