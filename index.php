<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arts - Your One-Stop Shop for Arts, Gifts, and More!</title>
    <!-- Bootstrap Link CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./styles/style.css">
    <!-- Hero section css -->
     <link rel="stylesheet" href="./styles/hero-section.css">
  </head>
  <body>
    <!-- Navbar -->
     <?php include './partials/navbar.php'; ?>
    <!-- Navbar -->

    <!-- Hero section -->
     <section class="hero-section">
      <!-- carousel -->
      <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-indicators" data-bs-pause="false" data-bs-ride="carousel">
    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <div class="c-content-div">
        <h1>Your One-Stop Shop for Arts, Gifts, and More</h1>
        <p>Explore our carefully curated collection of unique gifts, arts, and accessories. Shop with ease and have your favorites delivered right to your door.</p>
        <a href="#" class="gold-btn">Shop now</a>
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
    <!-- Hero section -->

  <main style="height: 100vh;">

  </main>



    <!-- footer  -->
      <?php include './partials/footer.php'?>
    <!-- footer  -->



    <!-- Boostrap Script CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Vanilla JS -->
    <script src="./scripts/script.js"></script>
  </body>
</html>