<?php
/*
./app/vues/template/index.php
TEMPLATE PRINCIPALE
*/

 ?>

 <!doctype html>
 <html class="no-js" lang="zxx">
 <head>
    <?php include '../app/vues/template/partials/_head.php'; ?>
 </head>
 <body>
 <!-- Preloader Start -->
 <div id="preloader-active">
     <?php include '../app/vues/template/partials/_loader.php'; ?>
 </div>
 <!-- Preloader Start-->
 <header>
     <!-- Header Start -->
     <div class="header-area">
             <?php include '../app/vues/template/partials/_menu.php'; ?>
     </div>
     <!-- Header End -->
 </header>
 <main>
     <!--================Blog Area =================-->
     <section class="blog_area section-padding">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8 mb-5 mb-lg-0">
                    <?php echo $content; ?>

                 </div>
                 <div class="col-lg-4">
                     <div class="blog_right_sidebar">
                         <?php include '../app/vues/template/partials/_aside.php'; ?>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--================Blog Area =================-->
 </main>
 <footer>
     <!-- Footer Start-->
     <div class="footer-main" data-background="assets/img/gallery/section_bg4.png">
         <?php require '../app/vues/template/partials/_footer.php'; ?>
     </div>
     <!-- Footer End-->
 </footer>

 <!-- JS here -->

     <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
     <!-- Jquery, Popper, Bootstrap -->
     <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
     <script src="./assets/js/popper.min.js"></script>
     <script src="./assets/js/bootstrap.min.js"></script>
     <!-- Jquery Mobile Menu -->
     <script src="./assets/js/jquery.slicknav.min.js"></script>

     <!-- Jquery Slick , Owl-Carousel Plugins -->
     <script src="./assets/js/owl.carousel.min.js"></script>
     <script src="./assets/js/slick.min.js"></script>

     <!-- One Page, Animated-HeadLin -->
     <script src="./assets/js/wow.min.js"></script>
     <script src="./assets/js/animated.headline.js"></script>

     <!-- Scrollup, nice-select, sticky -->
     <script src="./assets/js/jquery.scrollUp.min.js"></script>
     <script src="./assets/js/jquery.nice-select.min.js"></script>
     <script src="./assets/js/jquery.sticky.js"></script>
     <script src="./assets/js/jquery.magnific-popup.js"></script>

     <!-- contact js -->
     <script src="./assets/js/contact.js"></script>
     <script src="./assets/js/jquery.form.js"></script>
     <script src="./assets/js/jquery.validate.min.js"></script>
     <script src="./assets/js/mail-script.js"></script>
     <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

     <!-- Jquery Plugins, main Jquery -->
     <script src="./assets/js/plugins.js"></script>
     <script src="./assets/js/main.js"></script>

 </body>
 </html>
