<?php
include './partials/db_connection.php';

// Initially when product is not added
$product_added = false;

// Errors regarding product upload
$extension_error = false;
$image_error = false;
$upload_limit_error = false;
$upload_error = false;
$product_add_error = false;
$empty_fields = false;
$rating_error = false;


if (isset($_POST['upload-product'])) {
    
    $product_category = $_POST['category'];
    // Check if only two images are being uploaded
    if (count($_FILES['product-images']['name']) == 2) {
        // Array for storing image paths
        $img_path = [];

        for ($i = 0; $i < 2; $i++) {
            $product_image = basename($_FILES['product-images']['name'][$i]);
            $target_file_path = './assets/images/' . $product_category . '/' . $product_image;

            // Check if the uploaded files are actual images
            $file_type = pathinfo($target_file_path, PATHINFO_EXTENSION);
            $accepted_extensions = ['jpg', 'jpeg', 'avif', 'png', 'webp'];
            if (in_array($file_type, $accepted_extensions)) {
                // Move files to image directory
                if (move_uploaded_file($_FILES['product-images']['tmp_name'][$i], $target_file_path)) {
                    $img_path[] = mysqli_real_escape_string($conn, $target_file_path);
                } else {
                    $upload_error = 'Failed to upload image: ' . $_FILES['product-images']['name'][$i];
                }
            } else {
                $extension_error = 'You can only upload images of these extensions: JPG, JPEG, AVIF, PNG';
            }
        }

        // Insert image paths and product details to mysql database.
        $product_name = mysqli_real_escape_string($conn, $_POST['product-name']);
        $product_desc = mysqli_real_escape_string($conn, $_POST['product-desc']);
        $product_price = mysqli_real_escape_string($conn, $_POST['product-price']);
        $product_stock = mysqli_real_escape_string($conn, $_POST['product-stock']);
        $product_rating = mysqli_real_escape_string($conn, $_POST['product-rating']);

        if(isset($img_path[0]) && isset($img_path[1])){
            $product_img_1 = $img_path[0];
            $product_img_2 = $img_path[1];
        } else{
            $image_error = 'Please select correct image files';
        }
        
        // Fetch product category ID
        $fetchCategory = "SELECT category_ID FROM `product_categories` WHERE category_name = '$product_category'";
        $fetchCatResult = mysqli_query($conn, $fetchCategory);
        while($row = mysqli_fetch_assoc($fetchCatResult)){
            $category_ID = $row['category_ID'];
        }

        // Check if all the necessary data is not empty
        if(!empty($product_name) && !empty($product_desc) && !empty($product_price) && !empty($product_stock) && !empty($product_rating) && !empty($product_img_1) && !empty($product_img_2)){
            if($product_rating > 0 && $product_rating < 6){
                $SQL = "INSERT INTO `products` (product_name, product_desc, product_price, product_stock, product_rating, product_img_1, product_img_2, product_cat_ID) VALUES ('$product_name', '$product_desc', '$product_price', '$product_stock', '$product_rating', '$product_img_1', '$product_img_2', $category_ID)";

            $result = mysqli_query($conn, $SQL);
            if($result){
                $product_added = 'Product: ' . $product_name . ' successfully added to ' . $product_category . ' category';
            } else{
                $product_add_error = 'Failed to add product! Please try again.';
             }
            } else{
                $rating_error = 'Please enter rating greater than 0 and less than 6';
            }

        } else{
            $empty_fields = 'Please enter all the details';
     }
  } else {
        $upload_limit_error = 'Only 2 product images are allowed';
        
    }
}



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - Arts</title>
    <!-- Fav icon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap Link CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Home page css -->
    <link rel="stylesheet" href="./styles/home-style.css">
    <!-- Products page css -->
    <link rel="stylesheet" href="./styles/products.css">
    <!-- Admin panel css -->
    <link rel="stylesheet" href="./styles/admin-panel.css">
</head>

<body>

    <!-- Login form here -->
    <?php include './partials/login-modal.php' ?>

    <!-- Signup form here -->
    <?php include './partials/signup-modal.php' ?>


    <!-- Navbar -->
    <?php include './partials/navbar.php'; ?>
    <!-- Navbar -->


    <main>
        <div class="admin-banner banner">
            <h1>Admin Panel</h1>
        </div>


    <!-- Errors and messages to be displayed here -->
    <?php
        if($product_added){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>Success!</strong> '. $product_added .'
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }

        if($product_add_error){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Error!</strong> '. $product_add_error .'
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }

        if($extension_error){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Error!</strong> '. $extension_error .'
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }

        if($image_error){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Error!</strong> '. $image_error .'
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }

        if($upload_error){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Error!</strong> '. $upload_error .'
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }

        if($upload_limit_error){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Error!</strong> '. $upload_limit_error .'
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }

        if($empty_fields){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Error!</strong> '. $empty_fields .'
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }

        if($rating_error){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Error!</strong> '. $rating_error .'
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }

     ?>

        <!-- Tabs for navigation     -->
        <div class="tabs-container my-5 container">
            <h2 class="my-4">Browse Sections</h2>
            <button class="tab-btn active" onclick="switchTabs(event, 'upload-products-section')">Upload products</button>
            <button class="tab-btn" onclick="switchTabs(event, 'panel-products-section')">Show products</button>
        </div>


        <!-- Content sections -->
    <div class="content-div container">
        
    <!-- Upload products section -->
    <section class="upload-products-section tab-content active" id="upload-products-section">
            <h1 class="mb-5 mt-3">Upload products</h1>
            <div>
                <form method="POST" enctype="multipart/form-data">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="mb-3 col col-12 col-md-6 col-lg-6">
                        <label for="product-images" class="form-label d-block">Select 2 product images</label>
                        <input type="file" id="product-images" name="product-images[]" multiple accept="image/*" required>
                        </div>

                        <div class="mb-3 col col-12 col-md-6 col-lg-6">
                        <label for="category-select">Select category</label>
                        <select class="form-select" aria-label="Default select example" name="category">
                            <option value="Gift Articles">Gift Articles</option>
                            <option value="Greeting Cards">Greeting Cards</option>
                            <option value="Dolls">Dolls</option>
                            <option value="Files">Files</option>
                            <option value="Handbags">Handbags</option>
                            <option value="Wallets">Wallets</option>
                            <option value="Beauty Products">Beauty Products</option>
                            <option value="Other Products">Other Products</option>
                        </select>
                        </div>

                        <div class="mb-3 col col-12">
                        <label for="product-name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="product-name" name="product-name">
                        </div>

                        <div class="mb-3 col col-12">
                        <label for="product-desc" class="form-label">Product Description</label>
                        <textarea name="product-desc" id="product-desc" class="form-control"></textarea>
                        </div>

                        <div class="mb-3 col col-12 col-md-4 col-lg-4">
                        <label for="product-price" class="form-label">Product Price</label>
                        <input type="number" class="form-control" id="product-price" name="product-price">
                        </div>
                        
                        <div class="mb-3 col col-12 col-md-4 col-lg-4">
                        <label for="product-stock" class="form-label">Product stock</label>
                        <input type="number" class="form-control" id="product-stock" name="product-stock">
                        </div>

                        <div class="mb-3 col col-12 col-md-4 col-lg-4">
                        <label for="product-rating" class="form-label">Product Rating</label>
                        <input type="number" class="form-control" id="product-rating" name="product-rating" max="5" min="1" step=".1">
                        </div>

                        <input type="submit" class="btn purple-btn mb-0 mt-3" name="upload-product" value="Upload product" />

                    </div>
                </form>
            </div>
        </section>

        <!-- All products section -->
        <section class="panel-products tab-content" id="panel-products-section">
            <h1 class="mb-5 mt-3">Panel products</h1>
        </section>

    </div>  

</main>



    <!-- footer  -->
    <?php include './partials/footer.php' ?>
    <!-- footer  -->

    <!-- Popper JS before Bootstrap bundles -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <!-- Boostrap Script CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Vanilla JS -->
    <script src="./scripts/script.js"></script>

</body>

</html>