<?php

require('../controllers/cart_controller.php');

//remove from cart 
if (!isset($_SESSION))
{
    session_start();
}

$ip_add = $_SESSION["ip_add"];
if (isset($_GET['id'])) 
{
    $p_id = $_GET['id'];
    if (isset($_SESSION["cid"])) 
    {
        $session = $_SESSION["cid"];
        $result = remove_carts_controller($p_id, $session);

        
//echos message when item is removed or not removed when the user is logged in
        if ($result) 
        {
            echo ("<script>alert('Product Successfully removed!'); window.location.href = '../view/cart.php';</script>");
        } else 
        {
            echo ("<script>alert('Product Not removed'); window.location.href = '../view/cart.php';</script>");
        }
    } 


//echos message when item is removed or not removed using user ip address
    else 
    {
        $result = remove_cart_controller($p_id, $ip_add);
        echo "signed out";
        // echo $result;

        if ($result) 
        {
            echo ("<script>alert('Product Successfully removed!'); window.location.href = '../view/cart.php';</script>");
        } else 
        {
            echo ("<script>alert('Product Not removed'); window.location.href = '../view/cart.php';</script>");
        }
    }
}