<?php
//connect to database class
require("../settings/db_class.php");

if (!isset($_SESSION)) {
    session_start();
}

class Cart_class extends db_connection
{
    //--INSERT TO CART--//
    
    //methods for adding cart(if user is logged in)
    public function add_to_cart($p_id, $ip_add, $c_id, $qty)
    {
        //retrun true or false
        return $this->db_query("insert into cart(p_id,ip_add,c_id,qty) values('$p_id','$ip_add','$c_id','$qty')");
    }

    //methods for adding cart(if user is not logged in)
    public function add_to_cart_notLogin($p_id, $ip_add, $qty)
    {
        //retrun true or false
        return $this->db_query("insert into cart(p_id,ip_add,qty) values('$p_id','$ip_add','$qty')");
    }

    //select all products in cart when user is not logged in
    public function select_all_products_cart_cls($ip_add)
    {
        $sql = "SELECT  p.product_id, p.product_cat, p.product_brand, p.product_price, p.product_title, 
        p.product_desc, p.product_image, p.product_keywords, c.p_id, c.ip_add, c.qty 
        from products AS p JOIN cart AS c ON p.product_id = c.p_id AND c.ip_add = '$ip_add' where c.c_id = null";

        return $this->db_query($sql);
    }

    //select all products in cart when user is logged in
    public function select_all_products_carts_cls($session)
    { $new_sql = "SELECT * from products AS p JOIN cart AS c ON p.product_id = c.p_id where c.c_id = 29";
        $sql = "SELECT p.product_id, p.product_cat, p.product_brand, p.product_price, p.product_title, 
        p.product_desc, p.product_image, p.product_keywords, c.p_id, c.ip_add, c.qty 
        from products AS p JOIN cart AS c ON p.product_id = c.p_id AND c.c_id = '$session'";
        echo $new_sql;
        return $this->db_query($new_sql);
    }

    //remove products from cart when user is not logged in
    public function remove_cart_cls($prod_id, $ip_add)
    {
        return $this->db_query("Delete from cart where p_id = '$prod_id' and ip_add ='$ip_add'");
    }


    //remove products from cart when user is logged in
    public function remove_carts_user_id_cls($prod_id, $session)
    {
        // return "Delete from cart where p_id = '$prod_id' and c_id ='$session'";
        return $this->db_query("Delete from cart where p_id = '$prod_id' and c_id ='$session'");
    }


    //selects all products from cart when user is not logged in
    public function select_all_products_cart($ip_add)
    {
        return $this->db_query("SELECT p.product_id, p.product_cat, p.product_brand, p.product_price, p.product_title, 
        p.product_desc, p.product_image, p.product_keywords, c.p_id, c.ip_add, c.qty 
        from products AS p JOIN cart AS c ON p.product_id = c.p_id AND c.ip_add = '$ip_add'");
    }

    //selects all products from cart when user is logged in
    public function select_all_products_carts_loggedIn($session)
    {
        return $this->db_query("SELECT p.product_id, p.product_cat, p.product_brand, p.product_price, p.product_title, 
        p.product_desc, p.product_image, p.product_keywords, c.p_id, c.ip_add, c.qty 
        from products AS p JOIN cart AS c ON p.product_id = c.p_id AND c.c_id = '$session'");
    }

    //updates cart when user is not logged in
    function updateCartQty_notLogin($qty, $prod_id, $ip_add)
    {
        return $this->db_query("update cart set qty='$qty' where ip_add='$ip_add' and p_id='$prod_id'");
    }


    //updates cart when user is logged in
    function updateCartQty_Login($qty, $prod_id, $session)
    {
        return $this->db_query("update cart set qty='$qty' where c_id='$session' and p_id='$prod_id'");
    }


    //insert into payment table//
    public function insert_payment_cls( $amount, $cid, $orderid, $cc, $pdate)
    {
        
        $sql = "INSERT INTO `payment`(`amt`, `customer_id`,`order_id`,`currency`, `payment_date`) 
        VALUES ('$amount','$cid', '$orderid','$cc','$pdate')";
        return $this->db_query($sql);
        
        
    }


//insert into order table
    function insert_order($c_id, $invoice, $date, $status)
    {
        return $this->db_query("insert into orders (customer_id, invoice_no, order_date, order_status) values('$c_id', '$invoice', '$date', '$status')");
    }

//insert into orderdetails table
    function insert_orderDetails($order_id, $product_id, $qty)
    {
        return $this->db_query("insert into orderdetails(order_id, product_id, qty) values ('$order_id', '$product_id', '$qty')");
    }
     

//fetch recent order from order table
    function recentOrder()
    {
        return $this->db_fetch_one("select MAX(order_id) as current from orders");
    }


}
 
