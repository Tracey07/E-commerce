<?php

if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cart</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/cart.css">
       
</head>


<body>
    <div class="CartContainer">
        <div class="Header">
            <h3 class="Heading">Shopping Cart</h3>
        </div>


      <!--   //redirects user to login page when user is not logged in -->
        <?php

        require('../controllers/cart_controller.php');

        $cart = get_CartItems();
      
        if (!isset($_SESSION['cid'])) {
          header("location:../login/login.php");
        } 


        ?>

        <?php
        if (empty($cart)) {
            echo '<div class="Cart-Items"><h5>No product added to cart<h5></div>';
        }

        $total = 0;

        foreach ($cart as $item) {
            $total += $item['product_price'] * $item['qty'];
            echo '<div class="Cart-Items">
            <div class="image-box">
                <img src="' . $item['product_image'] . '" height="120px" />
            </div>
            <div class="about">
                <h1 class="title">' . $item['product_title'] . '</h1>
            </div>
            <div class="counter">
            <form method="post" action="../actions/manage_quantity_cart.php">
                    <input type="number" name="qty" style="width: 20%" value="' . $item['qty'] . '">
                    <input type="hidden" name="p_id" value="' . $item['product_id'] . '">
                    <button type="submit" class="btn-success" name="update_cart"><i class="fas fa-check"></i></button>
                </form>
            
            </div>
            <div class="prices">
                <div class="amount">GHC ' . $item['product_price'] . '</div>
                <div class="row">
                <div class="d-flex"><a href="../actions/remove_from_cart.php?id=' . $item['product_id'] . '"  data-id="' . $item['product_id'] . '" id="del_btn">Remove<i class="fa fa-trash mb-1 text-danger"></i></a></div>
                </div>
                
            </div>
           
        </div>';


            $_SESSION['ip_add'] = $item['ip_add'];
            // $session = $_SESSION['ip_add'];
        }


        echo '<hr>
        <div class="checkout">
            <div class="total">
                <div>
                    <div class="Subtotal">Sub-Total</div>
                    <div class="items">' . count($cart) . ' items</div>
                </div>
                <div class="total-amount">GHC ' . $total . '</div>
            </div>
            <button class="button"><a href="../view/payment.php">Proceed to CheckOut</a></button>
            <button class="button"><a href="../view/all_product.php">Continue Shopping</a></button>
        </div>';

        ?>
    </div>

    <script>
        $("#del_btn").on("click", function(e) {
            e.preventDefault();

            var cart = JSON.parse(localStorage.getItem("cart") || "[]");


            var id = $(this).data("id");

            console.log(id);

            const filteredCart = cart.filter((item) => item.product_id !== id);


            localStorage.setItem("cart", JSON.stringify(filteredCart));

            console.log(filteredCart);

            window.location.href = `../actions/remove_from_cart.php?id=${id}`;

        })
    </script>
</body>

</html>