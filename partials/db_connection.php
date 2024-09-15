<?php
    $conn = mysqli_connect('localhost', 'root', '', 'arts-db');
    if(!$conn){
        die('Connection error ' . mysqli_connect_error());
    }
?>