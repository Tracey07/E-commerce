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
    <title>Brands</title>
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
                    <th> Brand-ID</th>
                    <th> Brands</th>
                    <th> Update/Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php


                    $brand_list=getbrand_ctr();
                        foreach ($brand_list as $abrand) {
                        $brandid=$abrand['brand_id'];
                        $brandname=$abrand['brand_name'];

                        echo"
                            <tr>;
                            <form action = 'Update_brand_proc.php' method = 'post'>
                                <td><input type='' value= $brandid name='brand_id' readonly style='border: none;'></td>
                                <td><input type='' value= $brandname name='brand_name'readonly style='border: none;'></td>
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

<!-- <a class='btn btn-primary btn sm' href='Update_brand_proc.php' name= 'submit2' method = 'post'>Update</a>
                                    <a class='btn btn-primary btn sm' href=''>Delete</a> -->