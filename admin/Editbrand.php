<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Brand</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

  

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Brand Update</h3></div>
                                    <div class="card-body">
                                        <!-- form to update product brand  -->
                                        <form action="../actions/Update_brand_proc.php" method="post">
                                           
                                            <div class="form-floating mb-3">
                                                <!-- starts session to get brandname -->
                                                <input class="form-control" id="brand_name" name= "brand_name" type="name" placeholder="brand_name" value= "<?php session_start(); 
                                                $brand=$_SESSION['$Brand_name'];
                                                echo $brand; ?>" required />
                                                <label for="brand_name"> Brand name</label>
                                            </div>

                                            <div>
                                            <input type ="submit" name = "submit2" value ="Update">
                                            <button><a href=../view/admin_brands.php>Cancel</a></button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
    </body>
</html>




