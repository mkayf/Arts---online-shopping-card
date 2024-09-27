<?php
include './partials/db_connection.php';
include './partials/render_rating_stars.php';

// Select 4 products from each category and display them to the page

// Array of SQL queries to fetch 4 products of each category
$array_of_queries = [
    "SELECT * FROM `products` WHERE product_cat_ID = 11 LIMIT 4",
    "SELECT * FROM `products` WHERE product_cat_ID = 12 LIMIT 4",
    "SELECT * FROM `products` WHERE product_cat_ID = 13 LIMIT 4",
    "SELECT * FROM `products` WHERE product_cat_ID = 14 LIMIT 4",
    "SELECT * FROM `products` WHERE product_cat_ID = 15 LIMIT 4",
    "SELECT * FROM `products` WHERE product_cat_ID = 16 LIMIT 4",
    "SELECT * FROM `products` WHERE product_cat_ID = 17 LIMIT 4",
    "SELECT * FROM `products` WHERE product_cat_ID = 18 LIMIT 4",
];

// Array to contain all the fetch data
$product_array = [
    11 => [], // Gift articles
    12 => [], // Greeting cards
    13 => [], // Dolls
    14 => [], // Files
    15 => [], // Handbags
    16 => [], // Wallets
    17 => [], // Beauty products
    18 => [], // Other products
];



// Add products to their respective categories
        
for ($i = 0; $i < count($array_of_queries); $i++){
    $result = mysqli_query($conn, $array_of_queries[$i]);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){   
            $category_ID = $row['product_cat_ID']; 
            $product_array[$category_ID][] = $row;
        }
    } 
}


// Display 4 product cards of their respective categories

function displayProducts($products){
    if(empty($products)){
        echo '<h5 class="text-center my-4 more-products">More products are coming soon...</h5>';
    } else{
        foreach($products as $product){
            echo '
             <div class="card" style="width: 18rem;">
                        <img src=" '. $product['product_img_1'] .'"
                            class="card-img-top" alt="Product image">
                        <div class="card-body">
                            <div class="card-top-content">
                                <h5 class="trending-products-card-title">'. $product['product_name'] .'</h5>
                            </div>
                            <div class="card-middle-content">
                                <label for="">PKR <span> '. $product['product_price'] .'</span></label>
                                <div class="trending-cards-rating">
                                    '. renderRatingStars($product['product_rating']) .'
                                </div>
                            </div>
                            <div class="card-bottom-content">
                               <a href="/arts-online-shopping-cart/product-page.php?product_ID='. $product['product_ID'] .'">
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
}


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Explore Our Latest Collections - Arts</title>
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
        <div class="products-page-banner banner">
            <h1>Explore Products</h1>
        </div>

        <div class="all-products-container">

            <section class="gift-articles-section product-section my-5">
                <div class="cat-heading mx-5">
                    <h1>Gift Articles</h1>
                </div>
                <div class="gift-articles Trending-products-container">
                    <div class="row">
                        <?php displayProducts($product_array[11]); ?>
                    </div>
                </div>
                <div class="view-more-container mx-5">
                    <?php echo !empty($product_array[11]) ? '<a href="./all-products.php?product_cat_ID=11" class="view-more-btn">View more <i class="fa-solid fa-arrow-right"></i> </a>' : '' ?>
                </div>
            </section>

            <section class="greeting-cards-section product-section my-5">
                <div class="cat-heading mx-5">
                    <h1>Greeting Cards</h1>
                </div>
                <div class="greeting-cards Trending-products-container">
                    <div class="row">
                        <?php displayProducts($product_array[12]); ?>
                    </div>
                </div>
                <div class="view-more-container mx-5">
                    <?php echo !empty($product_array[12]) ? '<a href="./all-products.php?product_cat_ID=12" class="view-more-btn">View more <i class="fa-solid fa-arrow-right"></i> </a>' : '' ?>
                </div>
            </section>

            <section class="dolls-section product-section my-5">
                <div class="cat-heading mx-5">
                    <h1>Dolls</h1>
                </div>
                <div class="dolls Trending-products-container">
                    <div class="row">
                        <?php displayProducts($product_array[13]); ?>
                    </div>
                </div>
                <div class="view-more-container mx-5">
                    <?php echo !empty($product_array[13]) ? '<a href="./all-products.php?product_cat_ID=13" class="view-more-btn">View more <i class="fa-solid fa-arrow-right"></i> </a>' : '' ?>
                </div>
            </section>

            <section class="files-section product-section my-5">
                <div class="cat-heading mx-5">
                    <h1>Files</h1>
                </div>
                <div class="files Trending-products-container">
                    <div class="row">
                        <?php displayProducts($product_array[14]); ?>
                    </div>
                </div>
                <div class="view-more-container mx-5">
                    <?php echo !empty($product_array[14]) ? '<a href="./all-products.php?product_cat_ID=14" class="view-more-btn">View more <i class="fa-solid fa-arrow-right"></i> </a>' : '' ?>
                </div>
            </section>

            <section class="handbags-section product-section my-5">
                <div class="cat-heading mx-5">
                    <h1>Handbags</h1>
                </div>
                <div class="handbags Trending-products-container">
                    <div class="row">
                        <?php displayProducts($product_array[15]); ?>
                    </div>
                </div>
                <div class="view-more-container mx-5">
                    <?php echo !empty($product_array[15]) ? '<a href="./all-products.php?product_cat_ID=15" class="view-more-btn">View more <i class="fa-solid fa-arrow-right"></i> </a>' : '' ?>
                </div>
            </section>

            <section class="wallets-section product-section my-5">
                <div class="cat-heading mx-5">
                    <h1>Wallets</h1>
                </div>
                <div class="wallets Trending-products-container">
                    <div class="row">
                        <?php displayProducts($product_array[16]); ?>
                    </div>
                </div>
                <div class="view-more-container mx-5">
                    <?php echo !empty($product_array[16]) ? '<a href="./all-products.php?product_cat_ID=16" class="view-more-btn">View more <i class="fa-solid fa-arrow-right"></i> </a>' : '' ?>
                </div>
            </section>

            <section class="beauty-products-section product-section my-5">
                <div class="cat-heading mx-5">
                    <h1>Beauty Products</h1>
                </div>
                <div class="beauty-products Trending-products-container">
                    <div class="row">
                        <?php displayProducts($product_array[17]); ?>
                    </div>
                </div>
                <div class="view-more-container mx-5">
                    <?php echo !empty($product_array[17]) ? '<a href="./all-products.php?product_cat_ID=17" class="view-more-btn">View more <i class="fa-solid fa-arrow-right"></i> </a>' : '' ?>
                </div>
            </section>
            
            <section class="other-products-section product-section my-5">
                <div class="cat-heading mx-5">
                    <h1>Other Products</h1>
                </div>
                <div class="other-products Trending-products-container">
                    <div class="row">
                        <?php displayProducts($product_array[18]); ?>
                    </div>
                </div>
                <div class="view-more-container mx-5">
                    <?php echo !empty($product_array[18]) ? '<a href="./all-products.php?product_cat_ID=18" class="view-more-btn">View more <i class="fa-solid fa-arrow-right"></i> </a>' : '' ?>
                </div>
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

    <!-- AJAX scripting -->
    <script src="./scripts/fetchData.js"></script>

</body>
</html>