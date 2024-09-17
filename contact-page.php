<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>Contact page</title>

    <!-- Fav icon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap-link-cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font-awesome-cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Contact page css-link -->
    <link rel="stylesheet" href="./styles/contact-page.css">

    <!-- Home page css link -->
     <link rel="stylesheet" href="./styles/home-style.css">


     <!-- contact-form-php-start  -->
     <?php
     
    if(isset($_POST['contact-submit'])){
      $to = "sammadaltaf43@gmail.com";
      $subject = $_POST['fullname'];
      $message = $_POST['message'];
      $from = $_POST['email'];
      $headers = 'From : $from';

      // mail($to,$subject,$message,$from);

      if(mail($to,$subject,$message,$from)){
        ?>
        <script>
          alert("mail has been send successfully");
        </script>
        <?php
      }
      else{
        ?>
        <script>
          alert("mail send error");
        </script>
        <?php
      }
    }
     ?>

</head>
<body>

  <!-- Login form here -->
  <?php include './partials/login-modal.php' ?>

  <!-- Navbar -->
    <?php include './partials/navbar.php'; ?> 
  <!-- Navbar -->

    <!-- contact-page-banner  -->
    <section class="contact-page-banner banner">
        <div class="contact-page-container">
            <div class="contact-page-content">
                <div class="contact-page-banner-img">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- contact-page-content  -->
     
    <section class="contact-content container-fluid">
        <div class="row contact-content-0">
          <div class="col-3 contact-content-1">
            <i class="fa-solid fa-envelope"></i>
            <p class="p-1">Email Us</p>
            <p class="p-2">sammadaltaf43@gmail.com</p>
          </div>
          <div class="col-3 contact-content-2">
          <i class="fa-solid fa-phone"></i>
          <p class="p-1">Call Us</p>
          <p class="p-2">03373169656</p>
          </div>
          <div class="col-3 contact-content-3">
          <i class="fa-solid fa-location-dot"></i>
          <p class="p-1">Location</p> 
          <p class="p-2-extra">Karachi, lyari, khaddamarket, near Abdullah haroon hall</p>
          </div>
          </div>
          <span class="line"></span>
      </section>

      <!-- have any Question  -->
      <section class="contact-form container-fluid">
        <form action="contact-page.php" method="POST" class="contact-form-heading">
          <h4>Contact Us</h4>
          <h5>Have Any Questions?</h5>
        </div>
        <div class="contact-form-content">
          <div class="row">
          <div class="bug col-12">
          <h5 class="heading-1" >Write comment</h5>
          <Textarea name="message" placeholder="Type your comment"></Textarea>
          <span id="textarea_error"></span>
        </div>
      </div>
      <div class="row">
          <div class="bug col-12 col-sm-12 col-md-4 col-lg-4">
          <h5 class="heading-2">Full Name</h5>
          <input type="text" name="fullname" placeholder="Enter your name" class="input-1">
          <span id="name_error"></span>
        </div>
          <div class="bug col-12 col-sm-12 col-md-4 col-lg-4">
          <h5 class="heading-3">Email</h5>
          <input type="email" name="email" id="" placeholder="Enter your email Address" class="input-2">
          <span id="email_error"></span>
        </div>
          <div class="bug col-12 col-sm-12 col-md-4 col-lg-4">
          <h5 class="heading-4">Phone Number</h5>
          <input type="tel" name="phone-no" id="" placeholder=" phone number" class="input-3">
          <span id="phone_error"></span>
        </div>
      </div>
          <a href=""><button name="contact-submit">Submit</button></a>
          <span id="submit_error"></span>
      </form>
      </section>

      <!-- map  -->

      <div class="map-heading">
        <h5>Location</h5>
      </div>
      
      <section class="map container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.206655429755!2d66.98906417444556!3d24.85679054540611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb315f0c35175ad%3A0x8b42321c6f7d094c!2sHaji%20Abdullah%20Haroon%20Goverment%20College!5e0!3m2!1sen!2s!4v1707752362165!5m2!1sen!2s" width="1000" height="500" style="border: 2px solid grey;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </section>


        <!-- Footer -->
         <?php include './partials/footer.php'; ?>
        <!-- Footer -->





    <!-- Popper JS before Bootstrap bundles -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>



    <!-- Boostrap-js-cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- vanilla js -->
     <script src="./scripts/script.js"></script>
</body>
</html>