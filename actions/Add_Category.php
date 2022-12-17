<?php
	include("../controllers/product_controller.php");

//Add to Category 
	if(isset($_POST['submit']))
  {
    $Category_name = $_POST['cat_name'];		
    $add=addcategory_ctr($Category_name);
	  if($add)
    {
      echo "Successfully added";
      //redirects you to the category page
      header("Location:  ../view/admin_categories.php");
    }
    else
    {
      echo "failed to add Category";
    }

  }



//update Category
  else
  {
    $Category_id = $_POST['cat_id']; 
    $Category_name = $_POST['cat_name'];
    
    session_start();
    $_SESSION['$Category_id']= $_POST['cat_id']; 
    $_SESSION['$Category_name']= $_POST['cat_name'];
    header('Location: ../admin/Editcategory.php');

  }

   
  // if(isset($_POST['submit2']))
  // {
  //   session_start();
  //   updatecat_ctr($_SESSION['$Category_id'], $_POST['cat_name']);
  //   header('Location: ../view/admin_categories.php');
  // }



  
// delete from Category
	if (isset($_POST['delete'])) 
  {
		$Category_id= $_POST['cat_id'];
		$check= delete_category_ctr($Category_id);
		  if ($check)
      {
		    header("location:../view/admin_categories.php");
		  } else 
      {
		    echo "fail";
		  }

  }
	
?>
