<?php
   include("../controllers/product_controller.php");
   

//brand process to update product brand
   if(isset($_POST['submit']))
   {
      $Brand_id = $_POST['brand_id']; 
      $Brand_name = $_POST['brand_name'];
      

//gets the old brandname and updates it with the new brandname
      session_start();
      $_SESSION['$Brand_id']= $_POST['brand_id']; 
      $_SESSION['$Brand_name']= $_POST['brand_name'];

      header("Location: ../admin/Editbrand.php");
   }

   
    if(isset($_POST['submit2']))
   {
//updates brandname with the new brandname
      session_start();
      updatebrand_ctr($_SESSION['$Brand_id'], $_POST['brand_name']);

      header('Location: ../view/admin_brands.php');
   }
 
  ?>

