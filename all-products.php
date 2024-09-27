<?php
    include './partials/db_connection.php';
    include './partials/render_rating_stars.php';
    // Get category ID of one category and display all the related products

    // To prevent the code from breaking if user directly change the category ID from URL
    if(isset($_GET['product_cat_ID'])){
        if(!empty($_GET['product_cat_ID']) && $_GET['product_cat_ID'] > 10 && $_GET['product_cat_ID'] < 19){
            $product_cat_ID = $_GET['product_cat_ID'];
        } else{
            $product_cat_ID = '11';
        }
    } else{
        $product_cat_ID = '11';
    }

    // Fetch name of the category
    $fetch_cat_name = "SELECT category_name from `product_categories` WHERE category_ID = '$product_cat_ID'";
    $result = mysqli_query($conn, $fetch_cat_name);
    $cat_name = mysqli_fetch_assoc($result);

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

    <main>
        <div class="all-products-banner banner">
            <h1><?php echo $cat_name['category_name']; ?></h1>
        </div>

        <div class="all-products-container">
            <div class="Trending-products-container">
                <div class="row">
                    <?php
                    // Fetch and display all the products related to fetched category ID
                        $fetchAllProducts = "SELECT * FROM `products` WHERE product_cat_ID = '$product_cat_ID'";
                        $result = mysqli_query($conn, $fetchAllProducts);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo '
                                    <div class="card" style="width: 18rem;">
                        <img src=" '. $row['product_img_1'] .'"
                            class="card-img-top" alt="Product image">
                        <div class="card-body">
                            <div class="card-top-content">
                                <h5 class="trending-products-card-title">'. $row['product_name'] .'</h5>
                            </div>
                            <div class="card-middle-content">
                                <label for="">PKR <span> '. $row['product_price'] .'</span></label>
                                <div class="trending-cards-rating">
                                    '. renderRatingStars($row['product_rating']) .'
                                </div>
                            </div>
                            <div class="card-bottom-content">
                                <a href="/arts-online-shopping-cart/product-page.php?product_ID='. $row['product_ID'] .'">
                                    <button class="view-product-btn">
                                        View product 
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                                ';
                            }
                        }
                        else{
                            echo '<h5 class="text-center my-4 more-products">More products are coming soon</h5>';
                        }

                    ?>
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