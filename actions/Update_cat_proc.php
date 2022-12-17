<?php
   include("../controllers/product_controller.php");

//category process to update product category
   if(isset($_POST['submit']))
   {
      $Category_id = $_POST['cat_id']; 
      $Category_name = $_POST['cat_name'];
    
//gets the old categoryname and updates it with the new categoryname
      session_start();
      $_SESSION['$Category_id']= $_POST['cat_id']; 
      $_SESSION['$Category_name']= $_POST['cat_name'];

      header('Location: ../Admin/Editcategory.php');

   }

   
   if(isset($_POST['submit2']))
   {
//updates categoryname with the new category name
      session_start();
      updatecat_ctr($_SESSION['$Category_id'], $_POST['cat_name']);

      header('Location: ../view/admin_categories.php');
   }
     
 
  ?>



    
   
    
     



 


