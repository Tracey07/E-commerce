<?php

require('../controllers/cart_controller.php');

//manage cart quantity
session_start();
$ip_add = getenv("REMOTE_ADDR");

//update cart quantity 
if (isset($_POST['update_cart'])){
    $prod_id = $_POST['p_id'];
    $qty = $_POST['qty'];

    //updates cart quantity when user is logged in
    if (isset($_SESSION['cid'])){
        $session = $_SESSION['cid'];
        $result = updateCartQty_Logged($qty, $prod_id, $session);

        //echos message if cart is successfully updated 
        if($result){
            echo ("<script>alert('Cart Successfully updated!'); window.location.href = '../view/cart.php';</script>");
        }else{
            echo ("<script>alert('Cart Successfully removed!'); window.location.href = '../view/cart.php';</script>");
        }
    }else
    {
        //updates cart quantity using ip address 
        $result = updateCartQty($qty, $prod_id, $ip_add);

        if($result)
        {
            echo ("<script>alert('Cart Successfully updated!'); window.location.href = '../view/cart.php';</script>");
        }else
        {
            echo ("<script>alert('Cart Successfully removed!'); window.location.href = '../actions/manage_quantity_cart.php';</script>");
        }
    }
   
}
