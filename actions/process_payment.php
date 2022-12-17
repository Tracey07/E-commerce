<?php

include("../controllers/cart_controller.php");

//initialize a client url which we will use to send the reference to the paystack server for verification
$curl = curl_init();

//set options for the curl session insluding the url, headers, timeout, etc
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/{$_GET['reference']}",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
    "Cache-Control: no-cache",
  ),
));

//Sampah - sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088


//get the response and store
$response = curl_exec($curl);
// if there are any errors
$err = curl_error($curl);
// close the session
curl_close($curl);

//convert the response to PHP object
$decodedResponse = json_decode($response);


//check if the object has a status property and if its equal to 'success' ie. if verification was successful
if (isset($decodedResponse->data->status) && $decodedResponse->data->status === 'success') {
  // get form data
    $email = $_GET['email'];
    $amount = $_GET['amount'];
    $cid = $_GET['customerid'];
    $invoice = mt_rand(1000, 10000);
    $pdate = $_GET['pdate'];
    $reference = $_GET['reference'];
    $status = "Not fulfil";
     
   
    //insert into order table
    $order = insert_order_ctr($cid, $invoice, $pdate, $status);
    
    if ($order ==true)
    {
      
      $recent_order = recent_order_ctr();
      $cart_items = get_CartItems();

      foreach($cart_items as $cart)
      {
        
      $insert_orderDetails = insert_orderDetails_ctr($recent_order['current'], $cart['p_id'], $cart['qty']);
      }
    
    }


    //insert into payment table
   $add_pay = insert_payment_ctr($amount, $cid, $recent_order['current'], "GHS",$pdate);
    if ($add_pay)
    {
    //redirects you to the payment success page
      header("Location: ../view/payment_success.php");
    
    }else
    {
        //redirects you to the payment failed page
      header("Location: ../view/payment_failed.php");
    
    }
}


?>