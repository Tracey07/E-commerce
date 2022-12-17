<?php
include("../controllers/product_controller.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/brandtable.css"> -->
    <title>Product Update</title>
</head>
<body>
    <h1> Updating products <br>
        <?php
        $product_id= $_GET['product'];
        $product=get_one_product_ctr($product_id);
        
        ?>
    </h1>
   <!--  <div style= "border: double; background-color:white; padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px; text-align:center">
 -->    <form action="../actions/Update_product_proc.php" method= "POST" enctype="multipart/form-data">
            <label for="product_id"> <b>Product ID</b></label>
            <br>
            <br>
            <input type="text"name="product_id" value="<?php echo $product['product_id'];?>" >
            <br>
            <br>
            <label for="pr_category"> <b>Product Category</b></label>
            <br>
            <br>        
            <input type="text"name="product_category" value="<?php echo $product['product_cat'];?>" required>
            <br>
            <br>
            <label for="p_brand"> <b>Product Brand</b></label>
            <br>
            <br>
            <input type="text"name="product_brand" value="<?php echo $product['product_brand'];?>"  required>
            <br>
            <br>
            <label for="p_title"> <b>Product Title</b></label>
            <br>
            <br>
            <input type="text"name="product_title" value="<?php echo $product['product_title'];?>"  required>
            <br>
            <br>
            <label for="p_price"> <b>Product Price</b></label>
            <br>
            <br>
            <input type="text"name="product_price" value="<?php echo $product['product_price'];?>"  required>
            <br>
            <br>
            <label for="p_desc"> <b>Product Description</b></label>
            <br>
            <br>
            <input type="text"name="product_desc" value="<?php echo $product['product_desc'];?>"  required>
            <br>
            <br>
            <label for="p_image"> <b>Product Image</b></label>
            <br>
            <br>
            <input type="file"name="img" value="<?php echo $product['product_image'];?>" accept="image/*" >
            
            <br>
            <br>
            <label for="p_keywords"> <b>Product Keywords</b></label>
            <br>
            <br>
            <input type="text"name="product_keywords" value="<?php echo $product['product_keywords'];?>" >
            <br>
            <br>
            
            <input type="submit" name="submit" value="update" >
        </form>
    <!-- </div> -->
</body>
</html>