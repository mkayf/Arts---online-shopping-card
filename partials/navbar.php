<header>
    <nav id="navbar">
        <div class="nav-links-div">
            <button class="collapse-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <img src="/arts-online-shopping-cart/assets/images/menu-icon.png" alt="menu button" class="collapse-img">
            </button>   
            <ul class="mb-0 nav-link-ul">
                <li><a href="/arts-online-shopping-cart/index.php" class="link">Home</a></li>
                <li><a href="/arts-online-shopping-cart/about.php" class="link">About</a></li>
                <li><a href="/arts-online-shopping-cart/products.php" class="link">Products</a></li>
                <li><a href="/arts-online-shopping-cart/contact-page.php" class="link">Contact us</a></li>
            </ul>
        </div>
        <div class="nav-logo-div">
            <a href="/arts-online-shopping-cart/index.php">
            <img src="/arts-online-shopping-cart/assets/images/Arts-logo-2.png" alt="Logo" id="logo">
            </a>
        </div>
        <div class="nav-icons-div">
            <!-- Search icon -->
            <img src="/arts-online-shopping-cart/assets/images/search-btn.png" alt="search icon" class="nav-icons">

            <!-- user icon -->

            <div class="dropdown user-actions">
            <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/arts-online-shopping-cart/assets/images/user-btn.png" alt="user icon" class="nav-icons">                
            </a>

            <ul class="dropdown-menu">
                <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</a></li>
                <li><a class="dropdown-item" href="#">User Dashboard</a></li>
            </ul>
            </div>

            <!-- cart-item-icon -->
            <img src="/arts-online-shopping-cart/assets/images/cart-item-btn.png" alt="cart items icon"
                class="nav-icons">
        </div>
    </nav>
    <!-- Offcanvas for responsive screens -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center">
            <div>
                <ul class="offcanvas-links">
                    <li><a href="/arts-online-shopping-cart/index.php">Home</a></li>
                    <li><a href="/arts-online-shopping-cart/about.php">About</a></li>
                    <li><a href="/arts-online-shopping-cart/products.php">Products</a></li>
                    <li><a href="/arts-online-shopping-cart/contact-page.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>