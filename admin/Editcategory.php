<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Category</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Category Update</h3></div>
                                    <div class="card-body">
                                        <form action="../actions/Update_cat_proc.php" method="post">
                                           
                                            <div class="form-floating mb-3">
                                               <!--  start session to get customer name -->
                                                <input class="form-control" id="cat_name" name= "cat_name" type="name" placeholder="category name" value= "<?php session_start(); 
                                                $Category=$_SESSION['$Category_name'];
                                                echo $Category; ?>" required />
                                                <label for="cat_name"> Category name</label>
                                            </div>

                                            <div>
                                            <input type ="submit" name = "submit2" value ="Update">
                                       
                                            <button><a href=../view/admin_categories.php>Cancel</a></button>

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




