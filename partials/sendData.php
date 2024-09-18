<?php
header('Content-Type: application/json');

include './db_connection.php';

$type = $_GET['type'];

// Fetch data from mysql based on type

if($type == 'products'){
    $SQL = "SELECT * FROM `products` ORDER BY product_ID DESC";
    $result = mysqli_query($conn, $SQL);

    $products = [];

    while($row = mysqli_fetch_assoc($result)){
        $products[] = $row;
    }

    echo json_encode($products);
}

