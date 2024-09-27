<?php

header('Content-Type: Application/json');
include './db_connection.php';

if(isset($_POST)){
        $updateData = file_get_contents('php://input');
        $decodeData = json_decode($updateData); 
        $productID = $decodeData;
        $SQL = "SELECT product_name, product_desc, product_price, product_stock FROM `products` WHERE product_ID = $productID";
        $result = mysqli_query($conn, $SQL);
        $product = mysqli_fetch_assoc($result);
        echo json_encode($product);
        
}

