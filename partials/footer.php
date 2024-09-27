<?php
    include './partials/db_connection.php';

    // if(isset($_POST['news-btn'])){
    //     $news_mail = mysqli_real_escape_string($conn, $_POST['news_email']);
    //     $SQL = "INSERT INTO `newsletter_subscription` (email) VALUES ('$news_mail')";
    //     $result = mysqli_query($conn, $SQL);

    //     if($result){
    //         echo "<script>
    //         window.onload = () => {
    //             let newsModal = new bootstrap.Modal(document.getElementById('news-modal'));
    //             newsModal.show();
    //         }
    //         </script>";
    //     }
    // }

?>

    <!-- News letter modal -->
    <div class="modal" tabindex="1" id="news-modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">News letter subscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Thanks for subscribing to our news letter. You will be notified with latest updates about our shop.</p>
      </div>
    </div>
  </div>
</div>

        <!-- footer  -->
        <section class="footer-section">
            <div class="footer-container">
                <div class="footer-content-1">
                    <div class="footer-heading-1">
                    <a href="/arts-online-shopping-cart/index.php">
                        <img src="/arts-online-shopping-cart/assets/images/Arts-logo-2.png" alt="Logo">
                    </a>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-location-dot"></i><span>Beverlee Squares, Arnoldberg</span></li>
                        <li><a href="tel:999-888-777" class="a-tag"><i class="fa-solid fa-phone"></i><span class="link text-white">999-888-777</span></a></li>
                        <li><a href="mailto:arts.stationerystore@gmail.com" class="a-tag"><i class="fa-solid fa-envelope"></i><span class="link text-white">arts.stationerystore@gmail.com</span></a></li>
                    </ul>
                    <div class="footer-socialmedia-icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-content-2">
                    <h6>Information</h6>
                    <ul>
                        <li><a href="/arts-online-shopping-cart/index.php">Home</a></li>
                        <li><a href="/arts-online-shopping-cart/contact-page.php">Contact</a></li>
                        <li><a href="/arts-online-shopping-cart/about.php">About Us</a></li>
                        <li><a href="/arts-online-shopping-cart/products.php">Products</a></li>
                    </ul>
                </div>
                <div class="footer-content-3">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <div class="footer-input">
                        <form id="news-form">
                            <input type="email" class="footer-mail" placeholder="Enter Your Mail" name="news_email">
                            <input type="submit" class="footer-btn" value="SUBSCRIBE" name="news-btn">
                        </form>
                    </div>
                </div>
                </div> <!--footer-container -->
                <div class="copyrightline">
                    <div class="footer-line"></div>
                    <div class="footer-copyright-content">
                    <div class="copyright-para">
                    <p>Copyright &copy; All right reserved | This website is made by <i class="fa-regular fa-heart"></i> KAIF/A.SAMAD/KHANZADA/ABEER</p>
                    </div>
                    <div class="footer-payment-methods">
                       <img src="/arts-online-shopping-cart/assets/images/footercredit-card.png" alt="" class="footer-img-1">
                       <img src="/arts-online-shopping-cart/assets/images/footer-cheque.png" alt="" class="footer-img-2">
                       <img src="/arts-online-shopping-cart/assets/images/footer-demand-draft.jpg" alt="" class="footer-img-3">
                       <img src="/arts-online-shopping-cart/assets/images/footer-cash-on-delivary.png" alt="" class="footer-img-4">
                    </div>
                </div>
                </div>
        </section>
  </body>
</html>