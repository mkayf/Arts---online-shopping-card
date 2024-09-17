<?php

include './partials/db_connection.php';
include './partials/render_rating_stars.php';

// Fetch products to populate trending products section.
// NOTE:
// We are assuming these products are in trending because of pre online sales according to owner.

$array_of_queries = [
    "SELECT * FROM `products` WHERE product_cat_ID = 11 LIMIT 2 offset 2",
    "SELECT * FROM `products` WHERE product_cat_ID = 14 LIMIT 2 offset 1",
    "SELECT * FROM `products` WHERE product_cat_ID = 16 LIMIT 2 offset 4",
    "SELECT * FROM `products` WHERE product_cat_ID = 13 LIMIT 2 offset 3",
];

$product_array = [];

for($i = 0; $i < count($array_of_queries); $i++){
    $result = mysqli_query($conn, $array_of_queries[$i]);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $product_array[] = $row; 
        }
    }
}



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arts - Your One-Stop Shop for Stationeries, Gifts, and More!</title>
    <!-- Fav icon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap Link CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./styles/home-style.css">
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
        <section class="hero-section">
            <!-- carousel -->
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-indicators" data-bs-pause="false" data-bs-ride="carousel">
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <div class="c-content-div">
                            <h1>Your One-Stop Shop for Stationery, Gifts, and More</h1>
                            <p>Explore our carefully curated collection of unique gifts, arts, and accessories. Shop
                                with ease and have your favorites delivered right to your door.</p>
                            <a href="#" class="purple-btn">Shop now</a>
                        </div>
                        <div class="c-img-div">
                            <img src="./assets/images/hero-img-1.png" alt="" width="500px">
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000"></div>
                </div>
            </div>
            <!-- carousel -->
        </section>

        <!-- Top trending products  -->
        <section class="Trending-products">
            <div class="trending-products-heading my-4">
                <h1>Top Trending products</h1>
            </div>
            <div class="Trending-products-container">
                <div class="row">
                    <?php
                        foreach($product_array as $product){
                            if(isset($product) && !empty($product)){
                                echo '
                                    <div class="card" style="width: 18rem;">
                        <img src=" '. $product['product_img_1'] .'"
                            class="card-img-top" alt="product image">
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
                    ?>
                    
                </div>
                <!--row-div-->
            </div> <!-- container-div -->
        </section>

        <!-- Free delivery section -->
        <section class="free-delivery-section container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="f-delivery-content col col-12 col-md-6 col-lg-6">
                    <h2>Free Delivery!</h2>
                    <h1>On Orders Over Rs.2,000</h1>
                    <p>Enjoy the convenience of free delivery on orders above Rs.2,000</p>
                    <a href="#" class="purple-btn">Shop now</a>
                </div>
                <div class="f-delivery-img col col-12 col-md-6 col-lg-6">
                    <img src="./assets/images/free-delivery-1.svg" alt="">
                </div>
            </div>
        </section>
        <!-- Free delivery section -->

        <!-- Shop by categories section -->
        <section class="product-categories-section">
            <h1 class="my-5 text-center">Shop by categories</h1>
            <div class="c-column-container">
                <div class="c-column-1 c-column">
                    <h5>Make Everyone Happy</h5>
                    <h2>Gift Articles</h2>
                    <a href="/arts-online-shopping-cart/all-products.php?product_cat_ID=11" class="purple-btn cat-btn">Shop now</a>
                </div>

                <div class="c-column-2 c-column">
                    <h5>Best Wishes Always</h5>
                    <h2>Greeting Cards</h2>
                    <a href="/arts-online-shopping-cart/all-products.php?product_cat_ID=12" class="purple-btn cat-btn">Shop now</a>
                </div>

                <div class="c-column-3 c-column">
                    <h5>Talking Toy Delight</h5>
                    <h2>Dolls</h2>
                    <a href="/arts-online-shopping-cart/all-products.php?product_cat_ID=13" class="purple-btn cat-btn">Shop now</a>
                </div>

                <div class="c-column-4 c-column">
                    <h5>Files Made Simple</h5>
                    <h2>Files</h2>
                    <a href="/arts-online-shopping-cart/all-products.php?product_cat_ID=14" class="purple-btn cat-btn">Shop now</a>
                </div>

                <div class="c-column-5 c-column">
                    <h5>Trendy & Durable</h5>
                    <h2>HandBags</h2>
                    <a href="/arts-online-shopping-cart/all-products.php?product_cat_ID=15" class="purple-btn cat-btn">Shop now</a>
                </div>

                <div class="c-column-6 c-column">
                    <h5>Stylish Wallet Choice</h5>
                    <h2>Wallets</h2>
                    <a href="/arts-online-shopping-cart/all-products.php?product_cat_ID=16" class="purple-btn cat-btn">Shop now</a>
                </div>
                
                <div class="c-column-7 c-column">
                    <h5>Glamour & Glow</h5>
                    <h2>Beauty products</h2>
                    <a href="/arts-online-shopping-cart/all-products.php?product_cat_ID=17" class="purple-btn cat-btn">Shop now</a>
                </div>
                
            </div>
        </section>
        <!-- Shop by categories section -->

        <!-- Feedback-form  -->
        <section class="feedback-form">
            <div class="feedback-container">
                <div class="feedback-img">
                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/feedback-form-illustration-download-in-svg-png-gif-file-formats--online-survey-checklist-questionnaire-pack-business-illustrations-5735134.png" alt="">
                </div>
                    <form>
                    <h4>We Value Your Insights Share Your Feedback to Help Us Improve .</h4>
                    <div class="mb-3 form-input" >
                        <label for="full-name" class="form-label">Full name</label>
                        <input type="text" class="form-control" id="full-name" aria-describedby="emailHelp" placeholder="Enter your name">
                      </div>
                    <div class="mb-3 form-input">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your Email address">
                    </div>
                    <div class="mb-4 form-input">
                        <label for="exampleInputEmail1" class="form-label">Share your thoughts</label>
                       <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                     </div>
                    <button type="submit" class="btn btn-primary form-input">Submit</button>
                  </form>
            </div>
         </section>
         <!-- Feedback form -->



    </main>



    <!-- footer  -->
    <?php include './partials/footer.php'?>
    <!-- footer  -->

    <!-- Popper JS before Bootstrap bundles -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- Boostrap Script CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    
    <!-- Vanilla JS -->
    <script src="./scripts/script.js"></script>
    
</body>

</html>