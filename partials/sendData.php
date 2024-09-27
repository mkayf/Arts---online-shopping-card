<?php
header('Content-Type: application/json');
// Read data once
$data = file_get_contents('php://input');

$decodeData = json_decode($data);

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

else if($type == 'newsletter_sub'){
    $SQL = "INSERT INTO `newsletter_subscription` (email) VALUES ('$decodeData')";
    $result = mysqli_query($conn, $SQL);

    if($result){
        echo json_encode('Subscribed to news letter');
    }
}


else if($type == 'feedback'){
    $full_name = $decodeData->fullName;
    $email = $decodeData->email;
    $comment = $decodeData->comment;

    $SQL = "INSERT INTO `feedbacks` (f_name, f_email, f_comment) VALUES ('$full_name', '$email', '$comment')";
    $result = mysqli_query($conn, $SQL);

    if($result){
        echo json_encode('Feedback submitted');
    }
}

else if($type == 'contact'){
    $name = $decodeData->name;
    $email = $decodeData->email;
    $subject = $decodeData->subject;
    $message = $decodeData->message;

    $SQL = "INSERT INTO `customer_contact` (contact_name, contact_email, contact_subject, contact_message) VALUES ('$name', '$email', '$subject', '$message')";
    $result = mysqli_query($conn, $SQL);

    if($result){
        echo json_encode('Thanks for contacting us');
    }
}