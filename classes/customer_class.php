
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

class customer_class extends db_connection

{
	//--INSERT--//
	//insert into customer class
	public function insert_clas($name, $email, $password, $country, $city, $contact, $user_role){
		$passhas = md5($password);
		$sql = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `user_role`) 
			VALUES ('$name','$email','$passhas','$country','$city','$contact','$user_role')";
		return $this->db_query($sql);
	}

	//--SELECT--//
	//verify user email
	public function verify_email($email){
		$sql = "select * from 'customer' where 'customer_email' = $email";
		return $this->db_fetch_one($sql);
	}

	//login 
	public function login_cls($email,$password){
		$passhas = md5($password);
		$sql="SELECT `customer_id`,`user_role` FROM `customer` WHERE `customer_email` = '$email' and `customer_pass` = '$passhas'";
			return $this->db_fetch_one($sql);
	}


	//get all customers frm customer tables
	public function getAllCustomers_cls(){
		$sql= "SELECT * FROM customer";
		return $this->db_fetch_all($sql);
	}
		

}

?>