<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Eva Personal Profile - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Kelly
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="/login">Eva</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="/">Home</a></li>
          <li><a href="about">Tentang Saya</a></li>
          <li><a href="resume">Resume</a></li>
          <li><a href="portfolio">Portfolio</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://wa.me/qr/EM2UNBYDOPMKJ1" class="Whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.instagram.com/t4put/?igshid=MzNlNGNkZWQ4Mg%3D%3D" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/eva-novianti-malamtiga-5682b9247/recent-activity/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="background-image layer-1">
    </div>
    <div class="background-image layer-1">
      <img src="assets/img/eva/atas.png" alt="Background Image 1">
    </div>
    <div class="background-image layer-2">
      <img src="assets/img/eva/kiri.png" alt="Background Image 2">
    </div>
    <div class="background-image layer-2">
      <img src="assets/img/eva/kanan.png" alt="Background Image 3">
    </div>
    <div class="background-image layer-3">
      <img src="assets/img/eva/fobaw.png" alt="Background Image 4">
    </div>
    <div class="background-image layer-3">
      <img src="assets/img/eva/foto.png" alt="Background Image 5">
    </div>
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h2>Hello World</h2>
      <h1>Saya Eva Malamtiga</h1>
      <a href="about" class="btn-about">Tentang Saya</a>
    </div>
  </section>
  <!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Eva</span></strong>. Ditujukan Untuk Tugas Mandiri Mata Kuliah WEB PROGRAMMING 3
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        template di Ambil dari <a href="https://bootstrapmade.com/demo/Kelly/">BootstrapMade</a> kemudian dilakukan modifikasi
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Script JavaScript Anda -->
  <script>
    window.addEventListener('DOMContentLoaded', (event) => {
      let layer1Image = document.getElementsByClassName("layer-1")[0];
      let layer2KiriImage = document.getElementsByClassName("layer-2")[0];
      let layer2KananImage = document.getElementsByClassName("layer-2")[1];
      let layer3FobawImage = document.getElementsByClassName("layer-3")[0];
      let layer3FotoImage = document.getElementsByClassName("layer-3")[1];

      window.addEventListener('scroll', function() {
        let value = window.scrollY;

        layer1Image.style.top = value * 0.4 + 'px';
        layer2KiriImage.style.right = value * 3.2 + 'px';
        layer2KiriImage.style.top = value * 0.7 + 'px';
        layer2KananImage.style.left = value * 3.2 + 'px';
        layer2KananImage.style.top = value * 0.7 + 'px';
        layer3FobawImage.style.top = value * 0.1 + 'px';
        layer3FotoImage.style.left = value * 0.4 + 'px';
      });
    });
  </script>



</body>

</html>