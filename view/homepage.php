<?php
include("../settings/core.php");
 //include("../actions/Add_product.php");

check_login_index();
include("../controllers/product_controller.php");
   IF (LOGGED_IN()==TRUE) {
    FUNCTION CART_COUNT(){
        $C_ID= $_SESSION['cid'];
        $TOTAL= CART_QUANTITY_CTR($C_ID);
        $TOTAL=$TOTAL[0];
        $TOTAL1=$TOTAL['sum(qty)'];
        RETURN $TOTAL1;
    }
     $new=cart_count();
}

// include("../actions/Add_product.php");

?>

<!DOCTYPE html>
<html>

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="../images/logos.jpg" alt=""/><span>
              Chrisbel
            </br>Accesories
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
              <!-- <div class="row">
 -->                <?php               

                if (check_user_role() == 1) 
                {
                  
                    echo '<li class="nav-item">
                   <a class="nav-link" id="adding_brand" href="admin_dashboard.php"> Admin
                  </li>';

                    }

                     ?>

              
                  <a class="nav-link" href=""> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Contact us</a>
                </li>
              </ul>

              <div class="search-container">
              <form action="../view/product_search_result.php" method="GET">
                <input type="text" placeholder="Search.." name="find">
              <!-- <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0"> -->
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit" name ="send" ></button>
              </form>
            </div>

            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="../view/cart.php">
               <!-- cart($new) -->
               cart(<?php echo $new; ?>)
              </a>
              </div>

            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="../index.php">
                Logout
              </a>
              </div>
            
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Welcome to <br />
                            Our Jewelry Shop
                          </h1>
                          <p>
                            There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or
                            randomised words which don't look even slightly
                            believable.
                          </p>
                          <div class="d-flex">
                            <a href="view/all_product.php" class="text-uppercase custom_orange-btn mr-3">
                              Shop Now
                            </a>
                            <a href="" class="text-uppercase custom_dark-btn">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="../images/mainpage.jpg" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Welcome to <br />
                            Our Jewelry Shop
                          </h1>
                          <p>
                            There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or
                            randomised words which don't look even slightly
                            believable.
                          </p>
                          <div class="d-flex">
                            <a href="view/all_product.php" class="text-uppercase custom_orange-btn mr-3">
                              Shop Now
                            </a>
                            <a href="" class="text-uppercase custom_dark-btn">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="../images/mainpage.jpg" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Welcome to <br />
                            Our Jewelry Shop
                          </h1>
                          <p>
                          Look and feel elegant anywhere with our beautiful 
                          and affordable sets. Look stunning because you can.
                          You deserve it; So spoil youself.
                           Buy yourself some jewelry.
                          </p>
                          <div class="d-flex">
                            <a href="view/all_product.php" class="text-uppercase custom_orange-btn mr-3">
                              Shop Now
                            </a>
                            <a href="" class="text-uppercase custom_dark-btn">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="../images/mainpage.jpg" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>

  <!-- service section -->
  <section class="service_section layout_padding ">
    <div class="container">
      <h2 class="custom_heading">Our Services</h2>
      <p class="custom_heading-text">
        There are many variations of passages of Lorem Ipsum available, but
        the majority have
          </p>
          <div class='row row-cols-1 row-cols-md-3 g-4' >
                <?php

                  $product_list=get_all_product_ctr();
                    foreach ($product_list as $aproduct)
                    {
                        $productid=$aproduct['product_id'];
                        $productcat=$aproduct['product_cat'];
                        $producttitle=$aproduct['product_title'];
                        $productprice=$aproduct['product_price'];
                        $productimage=$aproduct['product_image'];
                        

                        echo"
                            

                  <div class='card-columns'>
                  
                      <div class='card ' style='box-shadow: 5px 10px 8px #888888; width: 300px; margin-top: 40px;margin-left: 30px;'>
                      <a href='../view/single_product.php?product=$productid'>
                      <img src=' ../images/$productimage' class='card-img-top' style='height: 200px; ' >
                       </a>

                      <div class='card-body style='font-size:20px;' >
                      Name: $producttitle <br>
                      Price:  GHS $productprice <br> <br> 
                      
                      <a href=  '../actions/add_to_cart.php?product=$productid'>Add to Cart</a>
                      </div>
                      </div>
                  </div>
                           
                           ";
                    }
                ?>

</div>
</div>
      
</body>

</html>

