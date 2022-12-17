<?php
//start session
session_start(); 

//for header redirection
ob_start();

function check_login_index(){
	if(!isset($_SESSION['cid'])){
		header('location: ../login/logout.php');
		//echo $_SESSION['cid'];

	}
}



//function to check for role (admin, customer, etc)
function check_user_role(){
	return $_SESSION['userRole'];
	//echo $_SESSION['userRole'];
			//header('location:../homepage.php);
	
}
function LOGGED_IN(){
	if(isset($_SESSION['cid'])){
		return true;
		//echo $_SESSION['cid'];

	}else{
		return false;
	}
	
}


//function to get user ID


//function to check for role (admin, customer, etc)



?>