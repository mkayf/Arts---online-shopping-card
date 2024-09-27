<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title  -->
    <title>How we started this ARTS - Stationery Shop</title>

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

    <!-- About page css -->
     <link rel="stylesheet" href="./styles/about.css">

</head>
<body>
    <!-- navbar -->
     <?php include './partials/navbar.php'; ?>
      
    <!-- login modal -->
    <?php include './partials/login-modal.php'; ?>

    <!-- signup modal -->
    <?php include './partials/signup-modal.php'; ?>


      <!-- about section banner -->
      <div class="banner" id="about-banner">
        <h1 class="sleep" >About Us</h1> 
      </div>

      <!-- about section goes here -->
      <div class="container about-section">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 about-img-div">
              <img src="./assets/images/about-img.png" alt="about-img" class="img-fluid">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 about-text-div">
                <h1 >How was ARTS stationery shop started</h1><br>
                <p >
                    Arts began with a simple yet profound vision: to celebrate and elevate the art of writing and stationery. Our journey started with a deep-seated passion for the tools that fuel creativity and productivity, leading us to create a space where exceptional stationery meets impeccable design.</p>
                    <p>The founders of Arts were driven by the belief that every written word, every doodle, and every note deserves the perfect medium. What began as a small, heartfelt endeavor has grown into a haven for stationery enthusiasts, professionals, and creatives alike. From the very beginning, our focus has been on curating a collection that reflects the beauty and functionality of high-quality stationery.</p>
                <p>
                    We meticulously select each product in our inventory, working with renowned brands and artisans who share our dedication to excellence.</p>

                <a  href='/arts-online-shopping-cart/products.php'><button class="purple-btn">Shop Products <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
        </div>
      </div>

      
      <!-- testimonial-section starts here -->

      <section class="testimonial-section mx-5">
        <div id="carouselExample" class="carousel slide caroosal" data-bs-pause="false" data-bs-ride="carousel">
            <div class="carousel-inner tama">
            <h1 class="testi-head text-center">Testimonials</h1>
              <div class="carousel-item active tm" data-bs-interval="4000">
                <div class="testimonial testi-1">
                  <div class="name-box mx-3">
                    <img src="assets/images/person-1.png" alt="">
                    <h4>Michael Clarke</h4>
                  </div>
                  <div class="content-box mx-3 text-justify"><span class="quote">"</span>Shopping at ARTS is a pleasure! Their user-friendly website made finding what I needed a breeze, and the variety of products is outstanding. I couldn't be happier with my purchase.<span class="quote">"</span></div>
                </div>
              </div>
              <div class="carousel-item tm" data-bs-interval="4000">
                <div class="testimonial testi-2">
                  <div class="name-box mx-3">
                    <img src="assets/images/person-2.png" alt="">
                    <h4>David Ramirez</h4>
                  </div>
                  <div class="content-box mx-3 text-justify">
                    <span class="quote">"</span>I've been a loyal customer of ARTS for a while now. The selection of products is vast, the prices are competitive, and the shipping is always on time. It's a one-stop shop for all my needs!<span class="quote">"</span>
                  </div>
                </div>
              </div>
              <div class="carousel-item tm " data-bs-interval="4000">
                <div class="testimonial testi-3">
                  <div class="name-box mx-3">
                    <img src="assets/images/person-3.png" alt="">
                    <h4>Sarah Anderson</h4>
                  </div>
                  <div class="content-box mx-3 text-justify">
                    <span class="quote">"</span>I've shopped online extensively, and ARTS stands out as one of the best. Their customer service is top-notch, and the products are of the highest quality. I highly recommend them to anyone looking for great deals and a seamless shopping experience.<span class="quote">"</span>
                  </div>
                </div>
              </div>
              <div class="carousel-item tm" data-bs-interval="4000">
                <div class="testimonial testi-4">
                  <div class="name-box mx-3">
                    <img src="assets/images/person-4.png" alt="">
                    <h4>Mark Daniel</h4>
                  </div>
                  <div class="content-box mx-3 text-justify">
                    <span class="quote">"</span>I recently ordered from ARTS and was impressed with the product's quality and the quick delivery. The website is well-organized, making it easy to find what I was looking for. This is my new go-to for online shopping.<span class="quote">"</span>
                  </div>
                </div>
              </div>
              <div class="carousel-item tm" data-bs-interval="4000">
                <div class="testimonial testi-5">
                  <div class="name-box mx-3">
                    <img src="assets/images/person-5.png" alt="">
                    <h4>Laura John</h4>
                  </div>
                  <div class="content-box mx-3 text-justify">
                    <span class="quote">"</span>I am beyond thrilled with my recent purchase from ARTS. The product quality exceeded my expectations, and the speedy delivery made my shopping experience truly exceptional. I'll definitely be back for more!<span class="quote">"</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>

    
  <!-- footer -->
  <?php include './partials/footer.php'; ?>

  <!-- Popper JS before Bootstrap bundles -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

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