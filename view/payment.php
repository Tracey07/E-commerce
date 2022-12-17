<?php

if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Payment</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/payment.css">
       
</head>


<body>
    <div class="CartContainer">
        <div class="Header">
            <h3 class="Heading">Make Payment</h3>
        </div>
        <?php
        require('../controllers/cart_controller.php');
        $cart = get_CartItems();
        
        if (empty($cart)) {
            echo '<div class="Cart-Items"><h5>No product added to cart<h5></div>';
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['product_price'] * $item['qty'];
            echo '
                <div class="Cart-Items">
                    <div class="image-box">
                        <img src="' . $item['product_image'] . '" height="120px" />
                </div>
                <div class="about">
                    <h1 class="title">' . $item['product_title'] . '</h1>
                </div>
                <div class="counter">
                <form method="post" action="../actions/manage_quantity_cart.php">
                    Quantity:  <input type="text" name="qty" style="width: 20%" value=" ' . $item['qty'] . '" readonly>
                    <input type="hidden" name="p_id" value="' . $item['product_id'] . '">
                        
                </form>
            
                </div>

                <div class="prices">
                    <div class="amount">GHC ' . $item['product_price'] . '</div>
                </div>
                    
                </div>
            
                </div>';


                $_SESSION['ip_add'] = $item['ip_add'];
                // $session = $_SESSION['ip_add'];
        }

                //getting the customer id
                //session_start(); 
                $c_id=$_SESSION['cid'];
            ?>

        <hr>
  

        <div class="checkout" >
            <div class="total">
                <div>
                    <div class="Subtotal">Sub-Total</div>
                    <div class="items"><?php echo count($cart). "items" ?></div>
                </div>
                <div class="total-amount"><?php echo "GHC" . $total  ?></div>
            </div>

            <form id="paymentForm" class = "payform">
                <div class="form-group">
                <label for="email">Email Address</label><br><br>
                <input type="email" name="email" id="email-address" required />
                </div>
                <br>
                <br>
                <div class="form-group">
                <label for="amount">Amount</label><br><br>
                <input type="tel" name="amount" id="amount" value= <?php echo $total ?> disabled/>
                </div>
                <br>
                <br>
                <div class="form-group">
                <label for="currency">Currency</label><br><br>
                <input type="text" name="currency" id="currencys" value= "GHS" disabled />
                </div>
                <br>
                <br>
                <div class="form-group">
                <label for="pdate">Payment date</label><br><br>
                <input type="text" name="pdate" id="pdate" value=<?php echo date("Y/m/d") ?> disabled/>
                </div>
                <br>
                <br>
                <div class="form-sub">
                <button type="submit" class="form-submit" onclick="payWithPaystack()"> Pay </button>
                </div>
            </form>
        </div>        
    </div>
           
        


    <script type = "text/javascript" src="https://js.paystack.co/v1/inline.js"></script>

    <script type="text/javascript">
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);

    function payWithPaystack(e) {
    e.preventDefault();
    let handler = PaystackPop.setup({
    key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key 

    //sampah - pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd
      email: document.getElementById("email-address").value,
      amount: document.getElementById("amount").value * 100,
      customerid: document.getElementById("customerid").value,
      orderid: document.getElementById("orderid").value,
      ref: '' + Math.floor((Math.random() * 1000000000) + 1),
      currency: 'GHS',
      pdate: document.getElementById("pdate").value,
      // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      // label: "Optional string that replaces customer email"
      onClose: function() {
        alert('Window closed.');
      },
      callback: function(response) {
      let message = 'Payment complete! Reference: ' + response.reference;

      // alert (message);

        window.location = `../actions/process_payment.php?email=${document.getElementById("email-address").value}&amount=${document.getElementById("amount").value}&reference=${response.reference}&customerid=${document.getElementById("customerid").value}&pdate=${document.getElementById("pdate").value}&submit=true`;

      }
      });
    handler.openIframe();
    }
    </script>
</body>

</html>