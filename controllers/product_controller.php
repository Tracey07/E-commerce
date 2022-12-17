
<?php
//connect to the user account class
include("../classes/product_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}


//--INSERT--//

//Add Brand
function addbrand_ctr($Brand_name)
{
  //creating an instance of the class
  $new_class = new product_class();
//returning a method of the class
   return $new_class->addbrand_cls($Brand_name);
 
}


//--UPDATE brand--//
function updatebrand_ctr($brandid,$Brand_name)
{
  //creating an instance of the class
  $new_class = new product_class();
  //returning a method of the class
  return $new_class->updatebrand_cls($brandid,$Brand_name);
 
}



//--SELECT all brands--//
 
 // function select all brands
  function get_all_brand_ctr()
  {
  $brand_list = new product_class();
  return $brand_list->get_all_brand_cls();
  }


//Add Category  
function addcategory_ctr($Category_name){
  //creating an instance of the class
  $new_class = new product_class();
  //returning a method of the class
  return $new_class->addcategory_cls($Category_name);
  }


//--SELECT cateogry--//
  // function getcategory_ctr(){
  //   $Category_list= new product_class();
  //   return $Category_list->getcategory_ctr();
  // }

  //CATEGORY
function get_all_cat_ctr()
{
  $cat_list = new product_class();
  return $cat_list->get_all_cat_cls();
}

//--UPDATE category--//
function updatecat_ctr($categoryid,$Category_name)
{
  //creating an instance of the class
  $new_class = new product_class();
  //returning a method of the class
   return $new_class->updatecat_cls($categoryid,$Category_name);
}



//PRODUCT insert
function insert_product_ctr($p_cat,$p_brand,$p_title,$p_price,$p_description,$imageUpload,$p_keyword)
{
  $insert_prod = new product_class();
  return $insert_prod->insert_product_class($p_cat,$p_brand,$p_title,$p_price,$p_description,$imageUpload,$p_keyword);
}


//get all PRODUCT 
function get_all_product_ctr()
{
  $product_list= new product_class();
  return $product_list->get_all_product_cls();
}


//get one PRODUCT
function get_one_product_ctr($product_id)
{
  $one_product= new product_class();
  return $one_product->get_one_product_cls($product_id);
}


//update PRODUCT
function update_product_ctr($product_id,$p_cat,$p_brand,$p_title,$p_price,$p_description,$imageUpload,$p_keyword)
{
    $product_update= new product_class();
    return $product_update->update_product_cls($product_id,$p_cat,$p_brand,$p_title,$p_price,$p_description,$imageUpload,$p_keyword);
}


//search PRODUCT  
function search_products_ctr($find)
{
  $product= new product_class();
  return $product->search_products_cls($find);
}


//--DELETE--//
//brand
function delete_brand_ctr($brandid)
{
  $log = new product_class;
  return $log->delete_brand_cls($brandid);
}

// for category
function delete_category_ctr($Category_id)
{
  $log= new product_class;
  return $log->delete_category_cls($Category_id);
}


//for product
function delete_product_ctr($productid)
{
  $log= new product_class;
  return $log -> delete_product_cls($productid);
}


//category name
function fetch_category_name($Category_id)
{
  $log= new product_class;
  return $log->get_category_name($Category_id);
}


//brand name
function fetch_brand_name($brand_id)
{
  $log= new product_class;
  return $log->get_brand_name($brand_id);
}


function CART_QUANTITY_CTR($C_ID){
    $quantity= new product_class();
    return $quantity->CART_QUANTITY_CLS($C_ID);
  }

?>






