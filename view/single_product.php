
<!DOCTYPE html>
<html lang="en">
<head>

   
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Chrisbel Accessories</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
</head>


  <div class="hero_area sub_pages">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="accessories.php">
            <img src="../images/logos.jpg" alt="" /><span>
              Chrisbel</br> Accessories
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="../view/all_product.php">Back <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="accessories.php"> Jewelry</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact us</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="../login/logout.php">Logout
                </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

  </div>

  <link rel="stylesheet" href="../css/single_product.css">
</head>
<body>

  <div style="min-height:400px; padding-top:20px; padding-left:200px; padding-right:200px; padding-bottom:20px; background-color:#f5f5f5;">
    <h4 class='text-dark' style='color:white;'></h4>  
            
  <?php
  // select single product
  include("../controllers/product_controller.php");
    $product_id= $_GET['product'];
    $product=get_one_product_ctr($product_id);
    $cat_names= implode(fetch_category_name($product['product_cat']));
    $brand_names= implode(fetch_brand_name($product['product_brand']));
    
    

    // echo "$product_id";
    //print_r($product['product_cat']);
    echo"<div class='column'>
                                              
      <h5 class='card-title'>Name: $product[product_title] </h5>
      <div class='card mb-3' style='width: 1000px; min-height: 500px;'>
      <div class='row g-0'>
      <div class='col-md-6'>
        <img src = '$product[product_image]' alt= 'card image1' style='width:500px; height:500px;  padding: 70px;
         '>
      </div>
      <div class='col-md-6' >
      <div class='card-body'></br></br></br>
                        
        <h5 class='card-title'>Item:$product[product_title] </h5>

        <p class='card-text'>Price:  $product[product_price]<br></p>
        <p class='card-text'>Description:  $product[product_desc]</p>
        <p class='card-text'>Keywords:  $product[product_keywords]</p> <br>
        <h5 class='card-text'>Category: $cat_names <br></h5>
        <p class='card-text'>Brand: $brand_names</p>
         <br><br>
        <a href= '../actions/add_to_cart.php?product=$product_id' class='btn btn-dark' style='width:250px;'>Add to Cart</a>               
      </div>
      </div>
      </div>
      </div>
      </br></br>;"
                
  ?>

</div>

</body>
</html>

