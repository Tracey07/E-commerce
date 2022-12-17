<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class product_class extends db_connection
{
	//BRANDS
	 //--INSERT into brand--//
	public function addbrand_cls($Brand_name){
		$sql = "INSERT INTO `brands` (`brand_name`) values ('$Brand_name')";
		return $this->db_query($sql);
	}


	//--SELECT--//
	//select all brands from brands
	public function get_all_brand_cls(){
		$sql = "SELECT * FROM brands"; 
		return $this->db_fetch_all($sql);
	}

	 //--UPDATE--//
	//update brand class
    public function updatebrand_cls($brandid,$brand_name,){
		$sql = "UPDATE brands set brand_id = '$brandid', brand_name = '$brand_name' where brand_id = '$brandid'"; 
		return $this->db_query($sql);
	}

	  //delete brand
    public function delete_brand_cls($brandid)
    {
        $query = "delete from brands where brand_id=$brandid";
        return $this->db_query($query);
    }


     //get brand name
    public function get_brand_name($brand_id){
    	return $this->db_fetch_one("select brand_name from brands where brand_id=$brand_id");
    }



    //CATEGORIES
	//--INSERT into cateogry--//
	public function addcategory_cls($Category_name){
		$sql = "INSERT INTO `categories` (`cat_name`) values ('$Category_name')";
		return $this->db_query($sql);
	}


	//--SELECT all category--//
	public function get_all_cat_cls(){
		$sql = "SELECT * FROM categories"; 
		return $this->db_fetch_all($sql);
	}

	//--UPDATE category--//
    public function updatecat_cls($categoryid,$category_name,){
		$sql = "UPDATE categories set cat_id = '$categoryid', cat_name = '$category_name' where cat_id = '$categoryid'"; 
		return $this->db_query($sql);

	}

	  //delete category
    public function delete_category_cls($Category_id) 
    {
        $query= "delete from categories where cat_id=$Category_id" ;
        return $this->db_query($query);
    }

      //get category name
    public function get_category_name($Category_id){
    	return $this->db_fetch_one("select cat_name from categories where cat_id=$Category_id");
    }


	//insert into PRODUCT 
	public function insert_product_class($p_cat,$p_brand,$p_title,$p_price,$p_description,$imageUpload,$p_keyword){

		$sql = "INSERT INTO `products`(`product_cat`,`product_brand`,`product_title`,`product_price`,`product_desc`,`product_image`,`product_keywords`)
			VALUES ('$p_cat','$p_brand','$p_title','$p_price','$p_description','$imageUpload','$p_keyword')";
		return $this->db_query($sql);

	}


	// select all PRODUCT
	public function get_all_product_cls(){
		$sql = "SELECT * FROM products"; 
		return $this->db_fetch_all($sql);
	}


	//get one product
	public function get_one_product_cls($product_id){
		$sql = "SELECT * FROM products where product_id='$product_id'"; 
		return $this->db_fetch_one($sql);
	}


	// Update PRODUCT
	public function update_product_cls($product_id,$p_cat,$p_brand,$p_title,$p_price,$p_description,$imageUpload, $p_keyword){
		$sql = "UPDATE products set product_id = '$product_id', product_cat = '$p_cat' , product_brand = '$p_brand' , product_title = '$p_title' , product_price = '$p_price' , product_desc = '$p_description' , product_image= '$imageUpload', product_keywords = '$p_keyword' where product_id = '$product_id'"; 
	
		return $this->db_query($sql);
	}


	//search product
	public function search_products_cls($find){
		$sql = "SELECT * FROM products where product_title like '%$find%'"; 
		return $this->db_fetch_all($sql);
	}


	//delete product
    public function delete_product_cls($productid)
     {
         $query= "delete from products where product_id=$productid" ;
         return $this->db_query($query);
     }
  
    
    //update cart count
    // public function cart_quantity_cls($c_id)
    // {

    //     $query= "SELECT SUM(qty) FROM cart WHERE c_id=$c_id";
        
    //     return $this-> db_fetch_all($query);
    // }

     public function  CART_QUANTITY_CLS($C_ID)
     {
         $query= "select sum(qty) from cart where c_id=$C_ID" ;
         return $this->db_fetch_all($query);
     }

    

}


?>

