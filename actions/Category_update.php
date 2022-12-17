<?php
include("../settings/core.php");
include("../controllers/product_controller.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<style>
table, th, td {
  border: 1px solid;

}

table {
  width: 40%;
}

/*input{
    border: none;

}*/
</style>
<body>

        <br>
        <table>
            <thead>
                <tr>
                    <th> Category-ID</th>
                    <th> Categories</th>
                    <th> Update/Delete</th>
                </tr>
            </thead>

            <tbody>                             

                <?php


                    $category_list=getcategory_ctr();
                        foreach ($category_list as $acategory) {
                        $categoryid=$acategory['cat_id'];
                        $categoryname=$acategory['cat_name'];

                        echo"
                            <tr>;
                            <form action = 'Update_cat_proc.php' method = 'post'>
                                <td><input type='' value= $categoryid name='cat_id' readonly style='border: none;'></td>
                                <td><input type='' value= $categoryname name='cat_name' readonly style='border: none;'></td>
                                <td>
                                    
                                    <input type='submit' value='Update'name='submit'>
                                    <input type='submit' value='Delete' name='submit2'>




                                    </form>
                                     
                                </td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
</body>
</html>

