<?php
    include './partials/db_connection.php';
    include './partials/render_rating_stars.php';

    // Get product ID of product to display

    // To prevent the code from breaking if user directly change the product ID from URL
    if(isset($_GET['product_ID'])){
        if(!empty($_GET['product_ID']) && $_GET['product_ID'] > 10000){
            $product_ID = $_GET['product_ID'];
        } else{
            $product_ID = '10001';
        }
    } else{
        $product_ID = '10001';
    }

    // Fetch the product respective of its product ID

    $fetchProduct = "SELECT * FROM `products` WHERE product_ID = '$product_ID'";
    $result = mysqli_query($conn, $fetchProduct);
    $product = mysqli_fetch_assoc($result);
    $product_cat_ID = $product['product_cat_ID'];

    // Fetch category name of the product

    $fetch_cat = "SELECT category_name from `product_categories` WHERE category_ID = '$product_cat_ID'";
    $result = mysqli_query($conn, $fetch_cat);
    $product_cat_name = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Explore Our Latest Collections - Arts</title>
    <!-- Fav icon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap Link CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Home page css -->
    <link rel="stylesheet" href="./styles/home-style.css" />
    <!-- Products page css -->
    <link rel="stylesheet" href="./styles/products.css" />
</head>

<body>
    <!-- Login form here -->
    <?php include './partials/login-modal.php' ?>

    <!-- Signup form here -->
    <?php include './partials/signup-modal.php' ?>

    <!-- Navbar -->
    <?php include './partials/navbar.php'; ?>
    <!-- Navbar -->



    <main class="container product-page-main">
        <div class="row my-5 d-flex align-items-center justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 product-img-div">
              <div class="other-img-div">
                <img src="<?php echo $product['product_img_1']; ?>" alt="product-img-1" id="product-img-1">
                <img src="<?php echo $product['product_img_2']; ?>" alt="product-img-2" id="product-img-2">
              </div>
              <div class="main-img-div">
                <img src="<?php echo $product['product_img_1']; ?>" alt="product-img" id="product-main-img">
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 product-details-div">
              <p style="letter-spacing: 1px; text-transform: uppercase; font-size: 0.9rem; font-family: var(--sen-regualar);">Category: <span class="product-category"> <?php echo $product_cat_name['category_name']; ?> </span></p>
              <p style="letter-spacing: 1px; text-transform: uppercase; font-size: 0.9rem; font-family: var(--sen-regualar);">Product Code: <span class="product-category"> <?php echo $product_cat_ID . $product_ID ?> </span></p>
              <h1 class="product-name"> <?php echo $product['product_name']; ?> </h1>
              <div class="stars-div">
                <?php echo renderRatingStars($product['product_rating']); ?>
              </div>
              <h4 class="currency">PKR <span class="product-price"> <?php echo $product['product_price']; ?> </span></h4>
              <div class="description-div">
              <h5 style="font-size: 0.9rem; letter-spacing: 1px; font-weight: 600;">Product Description:</h5>
              <p class="product-description"> <?php echo $product['product_desc']; ?> </p>
            </div>
            <hr>
            <div class="quantity-and-cart">
              <label for="quantity-input" class="me-2">Quantity:</label>
              <input type="number" id="quantity-input" class="me-4" max="<?php echo $product['product_stock']; ?>" value="1">
              <button id="add-to-cart-btn">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            </div>
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

<!-- AJAX scripting -->
<script src="./scripts/fetchData.js"></script>
</body>
</html>