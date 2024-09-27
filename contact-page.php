<?php
// Save customer contact inqueries to db
  include './partials/db_connection.php';

  $message_sent = false;
  $fields_empty = false;

  if(isset($_POST['send-message'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    if(!empty($name) && !empty($email) && !empty($message)){
      $SQL = "INSERT INTO `customer_contact` (contact_name, contact_email, contact_subject, contact_message) VALUES ('$name', '$email', '$subject', '$message')";
      $result = mysqli_query($conn, $SQL);

      if($result){
        $message_sent = "Thanks for contacting us, we will reply you soon!";
      }
    }
    else{
      $fields_empty = "Please fill all the required fields";
    }

  }  

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>Get in touch with us - Arts</title>

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
</head>
<body>

  <!-- Login form here -->
  <?php include './partials/login-modal.php'; ?>

  <!-- Signup form here -->
  <?php include './partials/signup-modal.php'; ?>

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

    <!-- Contact modal -->
    <div class="modal" tabindex="1" id="contact-modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Thanks for reaching out!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Our team will review your message and contact you soon.
        </p>
      </div>
    </div>
  </div>
</div>

    <section class="contact-content container-fluid">
        <div class="row contact-content-0">
          <div class="col col-12 col-md-12 col-lg-4 contact-content-1 contact-content">
            <i class="fa-solid fa-envelope"></i>
            <p class="p-1">Email Us</p>
            <p class="p-2 mail"><a href="mailto:arts.stationerystore@gmail.com" class="text-decoration-none text-white">arts.stationerystore@gmail.com</a></p>
          </div>
          <div class="col col-12 col-md-12 col-lg-4 contact-content-2 contact-content">
          <i class="fa-solid fa-phone"></i>
          <p class="p-1">Call Us</p>
          <p class="p-2"><a href="tel:999-888-777" class="text-decoration-none text-white">999-888-777</a></p>
          </div>
          <div class="col col-12 col-md-12 col-lg-4 contact-content-3 contact-content">
          <i class="fa-solid fa-location-dot"></i>
          <p class="p-1">Location</p> 
          <p class="p-2">86669 Beverlee Squares, Arnoldberg</p>
          </div>
          </div>
          <span class="line"></span>
      </section>

      <!-- have any Question  -->

      <section class="contact-form-section container">
        <h1 class="c-h">Get in touch with us</h1>
        <div class="row d-flex justify-content-center align-items-center">
          <div class="contact-form-content col col-12 col-md-12 col-lg-6">
            <form class="contact-form">
            <div class="mb-3">
              <label for="name">Name</label><span>*</span>
              <input type="text" name="name" id="name">
            </div>
            <div class="mb-3">
              <label for="email">Email</label><span>*</span>
              <input type="email" name="email" id="email">
            </div>
            <div class="mb-3">
              <label for="subject">Subject</label>
              <input type="num" name="subject" id="subject">
            </div>
            <div class="mb-3">
              <label for="message">Message</label><span>*</span>
              <textarea name="message" id="message"></textarea>
            </div>
            <div class="mb-2">
              <span class="text-white" id="contact-error"></span>
            </div>
            <button type="submit" name="send-message" class="purple-btn">Send message <i class="fa-regular fa-paper-plane"></i></button>
            </form>
          </div>
          <div class="contact-form-img col col-12 col-md-12 col-lg-6">
            <img src="./assets/images/contact-img.png" alt="contact us image">
          </div>
        </div>
      </section>

      <!-- map  -->

      <div class="map-heading">
        <h5>Location</h5>
      </div>
      
      <section class="map-section container-fluid">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24879.17236643985!2d-81.16452232664876!3d38.78900594735848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88496d0ef96d7a1b%3A0x4d07a506a5b575b2!2sArnoldsburg%2C%20WV%2025234%2C%20USA!5e0!3m2!1sen!2s!4v1727014227368!5m2!1sen!2s" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

     <!-- AJAX scripting -->
    <script src="./scripts/fetchData.js"></script>
</body>
</html>