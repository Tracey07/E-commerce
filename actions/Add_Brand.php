<?php
	include("../controllers/product_controller.php");


//Add to brand
	if(isset($_POST['submit']))
  {
    $Brand_name = $_POST['brand_name'];		

    $add=addbrand_ctr($Brand_name);
    if($add)
    {
		  echo "Successfully added";
    //redirects you to the brand page
		  header("Location: ../view/admin_brands.php");
    }
    else
    {
      echo "failed to add brand";
    }
  }



//update to brand
  if(isset($_POST['update']))
  {
    $Brand_id = $_POST['brand_id']; 
    $Brand_name = $_POST['brand_name'];
      
    session_start();
    $_SESSION['$Brand_id']= $_POST['brand_id']; 
    $_SESSION['$Brand_name']= $_POST['brand_name'];

    header("Location: ../admin/Editbrand.php");

  }
   
  if(isset($_POST['submit2']))
  {
    session_start();
    updatebrand_ctr($_SESSION['$Brand_id'], $_POST['brand_name']);
    header('Location: ../view/admin_brands.php');
  }
 

//delete from brand
if (isset($_POST['delete'])) 
{
  $brandid= $_POST['brand_id'];
  $check= delete_brand_ctr($brandid);
  if ($check) 
  {
    header("location:../view/admin_brands.php");
  } else 
  {
    echo "fail";
  }

}
  
	
?>
