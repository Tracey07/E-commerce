<?php


function getAllCustomers(){
    $all_customers = getAllCustomers_ctr();

    if($all_customers){

        foreach($all_customers as $customer){
            echo '<tr>
            <td>'.$customer['customer_name'].'</td>
            <td>'.$customer['customer_email'].'</td>
            <td>'.$customer['customer_contact'].'</td>
            <td>'.$customer['customer_city'].'</td>
            <td><i class="fa-solid fa-pen-to-square" style="color: green; padding-right: 20px;"></i><i class="fa-solid fa-trash-can" style="color: red;"></i></td>
        </tr>';
        }

    }else{
        echo "<tr></tr>";
    }

}

// function getAllBrands(){
//     $all_brands = get_all_brand_ctr();

//     if($all_brands){
//         foreach($all_brands as $brand){
//             echo '<tr>
//             <td>'.$brand['brand_id'].'</td>
//             <td>'.$brand['brand_name'].'</td>
//             <td><i class="fa-solid fa-pen-to-square" style="color: green; padding-right: 20px;"></i><i class="fa-solid fa-trash-can" style="color: red;"></i></td>
//         </tr>';
//         }
//     }else{
//         echo "<tr></tr>";
//     }
// }


// function getAllCategory(){
//     $all_categories = get_all_cat_ctr();

//     if($all_categories){
//         foreach($all_categories as $category){
//             echo '<tr>
//             <td>'.$category['cat_id'].'</td>
//             <td>'.$category['cat_name'].'</td>
//             <td><i class="fa-solid fa-pen-to-square" style="color: green; padding-right: 20px;"></i><i class="fa-solid fa-trash-can" style="color: red;"></i></td>
//         </tr>';
//         }
//     }else{
//         echo "<tr></tr>";
//     }
// }

// function getAllProduct(){
//     $all_products = get_all_product_ctr();

//     if($all_products){
//         foreach($all_products as $product){
//             echo '<tr>
//             <td><img src="'.$product['product_image'].'" width="60" height="60"/></td>
//             <td>'.$product['product_title'].'</td>
//             <td> ₵ '.$product['product_price'].'</td>
//             <td>'.$product['product_desc'].'</td>
//             <td><i class="fa-solid fa-pen-to-square" style="color: green; padding-right: 20px;"></i><i class="fa-solid fa-trash-can" style="color: red;"></i></td>
//         </tr>';
//         }
//     }else{
//         echo "<tr></tr>";
//     }
// }

function getBrandsDropDown(){
    $all_brands = get_all_brand_ctr();
    if($all_brands){
        echo '<fieldset class="form-group">
        <select class="form-select" id="basicSelect" name="prod_brand" required> <option>...</option>';
        foreach ($all_brands as $brand) {
            echo '<option value='.$brand['brand_id'].'>'.$brand['brand_name'].'</option>';
        }
        echo    '</select>
        </fieldset>';
    }
}


function getCategoriesDropDown(){
    $all_cats = get_all_cat_ctr();
    if($all_cats){
        echo '<fieldset class="form-group">
        <select class="form-select" id="basicSelect" name="prod_cat" required> <option>...</option>';
        foreach ($all_cats as $cat) {
            echo '<option value='.$cat['cat_id'].'>'.$cat['cat_name'].'</option>';
        }
        echo    '</select>
        </fieldset>';
    }
}

function setUserId(){
    if(isset($_SESSION['cid'])){
        $user_id = $_SESSION['cid'];
        echo "<input type='hidden' name='user_id' value='$user_id'  id='user_id'>";
    }
}


