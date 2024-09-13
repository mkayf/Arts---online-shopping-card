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

            <!-- Gift articles section -->
            <section class="gift-articles-section product-section">
                <h2>Gift Articles</h2>
                <div class="gift-articles"></div>
            </section>

             <!-- Greeting cards section -->
             <section class="greeting-cards-section product-section">
                <h2>Greeting Cards</h2>
                <div class="greeting-cards"></div>
            </section>

             <!-- Dolls section -->
             <section class="dolls-section product-section">
                <h2>Dolls</h2>
                <div class="dolls"></div>
            </section>

             <!-- Files section -->
             <section class="files-section product-section">
                <h2>Files</h2>
                <div class="files"></div>
            </section>

             <!-- Handbags section -->
             <section class="handbags-section product-section">
                <h2>Handbags</h2>
                <div class="handbags"></div>
            </section>

            <!-- Wallets section -->
            <section class="wallets-section product-section">
                <h2>Wallets</h2>
                <div class="wallets"></div>
            </section>

             <!-- Beauty products section -->
             <section class="beauty-products-section product-section">
                <h2>Beauty Products</h2>
                <div class="beauty-products"></div>
            </section>

        </div>

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