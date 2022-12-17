<?php
include("../controllers/product_controller.php");

//search product from
	if(isset($_POST['submit']))
    {
        $find = $_POST['search'];

	   $finding=search_product_ctr($find);
	       if($finding)
           {
                echo"<div class='column'>
                                   
                            <h2 style='text-align:left'>$producttitle</h2>

                            <div class='card'>

                                <img src = '$finding[product_image]' alt='card image' style='width:100%'>
                                <p>Item: '$product[product_title]' </p>
                                <p>GHC '$product[product_price]' </p>
                                <p><button>Add to Cart</button></p>
                            </div>
                            </br></br>";

            }else
            {
              echo "not found";
            }


    }
        
?>

