<?php
require("../settings/core.php");
require("../controllers/product_controller.php");
require('../functions/myFunctions.php')

?>
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="admin/assets/css/main/app.css">
    <link rel="stylesheet" href="admin/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="admin/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="admin/assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="admin/assets/css/pages/simple-datatables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.html"><img src="../images/logos.jpg" alt="Logo" srcset=""></a>
                            <h6><a href ="../view/homepage.php">Home</a></h6>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item ">
                            <a href="admin_dashboard.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="admin_products.php" class='sidebar-link'>
                                <i class="bi bi-life-preserver"></i>
                                <span>Products</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="admin_brands.php" class='sidebar-link'>
                                <i class="bi bi-puzzle"></i>
                                <span>Brands</span>
                            </a>
                        </li>

                        <li class="sidebar-item   active">
                            <a href="admin_categories.php" class='sidebar-link'>
                                <i class="bi bi-table"></i>
                                <span>Categories</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-cash"></i>
                                <span>Orders</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Categories</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#inlineForm">Add Category</button>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Categories
                        </div>
                        <div class="card-body">
                           <!--  <table class="table table-striped" id="table1"> -->
                            <table>
                                <thead>
                                    <tr>
                                        <th>Category #</th>
                                        <th>Category Name</th>
                                        <th>Update/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- get all product category -->
                                    <?php                            
                                      $all_categories = get_all_cat_ctr();                  
                                        foreach($all_categories as $one_item)
                                        {
                                            $categoryID = $one_item['cat_id'];
                                            $categoryName = $one_item['cat_name'];

                                            // form action to get category id and category name
                                             echo"
                                            <tr>
                                            <form action = '../actions/Add_Category.php' method = 'post'>
                                                <td><input type='' value= $categoryID name='cat_id' readonly style='border: none;'></td>
                                                <td><input type='' value= $categoryName name='cat_name'readonly style='border: none;'></td>
                                                <td>
                                                    
                                                    <td>
                                                <input type='submit' value='Update'name='update'>
                                                    <input type='submit' value='Delete' name='delete'>

                                            </form>                                      
                                                </td>
                                            </tr>";
                                        }
                                     ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
                <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel33">Add Category </h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <form action="../actions/Add_Category.php" method="post">
                                <div class="modal-body">
                                    <label>Category name: </label>
                                    <div class="form-group">
                                        <input type="text" placeholder="Category name" class="form-control" name="cat_name">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Close</span>
                                    </button>
                                    <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal" name="submit">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Add category</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
    </div>
    <script src="admin/assets/js/app.js"></script>

    <script src="admin/assets/js/extensions/simple-datatables.js"></script>

</body>

</html>