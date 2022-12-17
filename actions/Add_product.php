<?php
include("../controllers/product_controller.php");

//Add to products
	if(isset($_POST['submit']))
    {
    	$p_cat = $_POST['prod_cat'];
        $p_brand = $_POST['prod_brand'];
        $p_title = $_POST['prod_title'];
        $p_price = $_POST['prod_price'];
        $p_description= $_POST['description'];
        $p_keyword = $_POST['keyword'];	
        $filename = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $imageUpload = "../images/".$filename;

        move_uploaded_file($tempname,$imageUpload);
        
        echo($imageUpload);



    	$p_add=insert_product_ctr($p_cat,$p_brand,$p_title,$p_price,$p_description,$imageUpload,$p_keyword);
    	if($p_add)
        {
            echo "Successfully added";
        //redirects you to the login page
            header("Location: ../view/admin_products.php");
            
        }
        else
        {
          echo "failed to add product elements";
        }    
    }



// Delete from products
    if (isset($_GET['delete'])) 
    {
        $productid= $_GET['delete'];
        $check= delete_product_ctr($productid);
         
        if ($check) 
        {
            header("location:../view/admin_products.php");
        } else 
        {
            echo "fail";
        }
    }


 
?>

