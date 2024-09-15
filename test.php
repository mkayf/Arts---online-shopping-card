<?php

  include './partials/db_connection.php';

  $SQL = "SELECT * FROM `products` WHERE product_cat_ID IN(11,12,13,14,15,16,17,18) LIMIT 4 OFFSET 5";
  $result = mysqli_query($conn,$SQL);

  while($row = mysqli_fetch_assoc($result)){
    echo $row['product_name'];
  }

?>