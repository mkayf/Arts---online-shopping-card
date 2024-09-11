<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arts - Your One-Stop Shop for Stationeries, Gifts, and More!</title>
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
                <h1>Top Trending Products</h1>
            </div>
            <div class="Trending-products-container">
                <div class="row">
                    <!-- card-1  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-top-content">
                                <h5 class="trending-products-card-title">Gift set for birthdays</h5>
                            </div>
                            <div class="card-middle-content">
                                <label for="">PKR <span>2000</span></label>
                                <div class="trending-cards-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="card-bottom-content">
                                <button class="product-cart-btn">
                                    <i class="fa-solid fa-cart-shopping     trending-cards-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- card-1  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-top-content">
                                <h5 class="trending-products-card-title">Gift set for birthdays</h5>
                            </div>
                            <div class="card-middle-content">
                                <label for="">PKR <span>2000</span></label>
                                <div class="trending-cards-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="card-bottom-content">
                                <button class="product-cart-btn">
                                    <i class="fa-solid fa-cart-shopping     trending-cards-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- card-1  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-top-content">
                                <h5 class="trending-products-card-title">Gift set for birthdays</h5>
                            </div>
                            <div class="card-middle-content">
                                <label for="">PKR <span>2000</span></label>
                                <div class="trending-cards-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="card-bottom-content">
                                <button class="product-cart-btn">
                                    <i class="fa-solid fa-cart-shopping     trending-cards-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- card-1  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-top-content">
                                <h5 class="trending-products-card-title">Gift set for birthdays</h5>
                            </div>
                            <div class="card-middle-content">
                                <label for="">PKR <span>2000</span></label>
                                <div class="trending-cards-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="card-bottom-content">
                                <button class="product-cart-btn">
                                    <i class="fa-solid fa-cart-shopping     trending-cards-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- card-1  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-top-content">
                                <h5 class="trending-products-card-title">Gift set for birthdays</h5>
                            </div>
                            <div class="card-middle-content">
                                <label for="">PKR <span>2000</span></label>
                                <div class="trending-cards-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="card-bottom-content">
                                <button class="product-cart-btn">
                                    <i class="fa-solid fa-cart-shopping     trending-cards-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- card-1  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-top-content">
                                <h5 class="trending-products-card-title">Gift set for birthdays</h5>
                            </div>
                            <div class="card-middle-content">
                                <label for="">PKR <span>2000</span></label>
                                <div class="trending-cards-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="card-bottom-content">
                                <button class="product-cart-btn">
                                    <i class="fa-solid fa-cart-shopping     trending-cards-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- card-1  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-top-content">
                                <h5 class="trending-products-card-title">Gift set for birthdays</h5>
                            </div>
                            <div class="card-middle-content">
                                <label for="">PKR <span>2000</span></label>
                                <div class="trending-cards-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="card-bottom-content">
                                <button class="product-cart-btn">
                                    <i class="fa-solid fa-cart-shopping     trending-cards-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- card-1  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-top-content">
                                <h5 class="trending-products-card-title">Gift set for birthdays</h5>
                            </div>
                            <div class="card-middle-content">
                                <label for="">PKR <span>2000</span></label>
                                <div class="trending-cards-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="card-bottom-content">
                                <button class="product-cart-btn">
                                    <i class="fa-solid fa-cart-shopping     trending-cards-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
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
                </div>
                <div class="c-column-2 c-column">
                    <h5>Best Wishes Always</h5>
                    <h2>Greeting Cards</h2>
                </div>
                <div class="c-column-3 c-column">
                    <h5>Talking Toy Delight</h5>
                    <h2>Dolls</h2>
                </div>
                <div class="c-column-4 c-column">
                    <h5>Files Made Simple</h5>
                    <h2>Files</h2>
                </div>
                <div class="c-column-5 c-column">
                    <h5>Trendy & Durable</h5>
                    <h2>HandBags</h2>
                </div>
                <div class="c-column-6 c-column">
                    <h5>Stylish Wallet Choice</h5>
                    <h2>Wallets</h2>
                </div>
                <div class="c-column-7 c-column">
                    <h5>Glamour & Glow</h5>
                    <h2>Beauty Products</h2>
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
                        <label for="exampleInputEmail1" class="form-label">Full name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
                      </div>
                    <div class="mb-3 form-input">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Email address">
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

    <!-- Popover for login, signup and user dashboard links -->
    <script>
    


    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

    // const popover = new bootstrap.Popover('.popover-dismiss', {
    //  trigger: 'focus',
    //  html : true,
    // })
    </script>
</body>

</html>