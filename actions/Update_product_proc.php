<?php
include("../controllers/product_controller.php");

//product process to update product 
if(isset($_POST['submit']))
{
    $product_id = $_POST['product_id'];
    $p_cat = $_POST['product_category'];
    $p_brand = $_POST['product_brand'];
    $p_title = $_POST['product_title'];
    $p_price = $_POST['product_price'];
    $p_description= $_POST['product_desc'];
    $p_keyword = $_POST['product_keywords'];
    $filename = $_FILES['img']['name'];
    $tempname = $_FILES['img']['tmp_name'];
    $imageUpload = "../images/".$filename;

        move_uploaded_file($tempname,$imageUpload);
        
        echo($imageUpload);	

//gets the old product details and updates it with the new products
    $p_update=update_product_ctr($product_id,$p_cat,$p_brand,$p_title,$p_price,$p_description,$imageUpload,$p_keyword);
    if($p_update)
    {
    echo "Successfully added";
    //redirects you to the admin products
     header("Location: ../view/admin_products.php");

    }
    else
    {
      echo "failed to update product";
    }
}

  
?>