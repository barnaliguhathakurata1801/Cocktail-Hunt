<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cocktail Hunt</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon1.jpg" rel="icon">
  <link href="assets/img/favicon1.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Cocktail Hunt</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#searchsection">Search</a></li>
          <li><a class="nav-link scrollto" href="#developer">Developer</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Welcome to Cocktail Hunt</h1>
      <h2>This website can help you to get the recipe of any kind of alcoholic or non alcoholic drink.</h2>
      <a href="#searchsection" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Cocktail Hunt</h3>
            <p>
              Get the recipe of your faviorite drink with just one click.
            </p>
            
              
            </div>
          </div>
        </div>

      </div>

    <!-- ======= Search Section ======= -->
    <section id="searchsection" class="searchsection">
    
      <div class="container">
      
        <div class="section-title">
        
          <h2>Search</h2>
          <p>Enter the name of the cocktail below</p>
        </div>

        <div class="d-flex justify-content-center">

        <form action="innerpage.php" method="get">
          <input type="name" id="roundedsearchbar" name="cocktailname" placeholder="Search the cocktail you are looking for" required><button type="submit" class="btn btn-dark" id="search">Go!</button>
        </form>

        </div>

      </div>
    </section>
    <!-- End Search Section -->

    


    <!-- ======= Developer Section ======= -->
    <section id="developer" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Developer</h2>
          <p>Aspiring Full Stack Developer</p>
        </div>

        <div class="row">

          

          <div class="d-flex justify-content-center">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/MyImage.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Barnali Guha Thakurata</h4>
                <span>Full Stack Developer,Software Engineer</span>
              </div>
            </div>
          </div>

          

          
        </div>

      </div>
    </section><!-- End Developer Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Feel free to connect with me through the details given below.</p>
        </div>

        <div class="row">

          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>My Address</h3>
                  <p>Kolkata, West Bengal, India</p>
                </div>
              </div>
              <div class="col-md-12">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Me</h3>
                  <p>barnaliguhathakurata@gmail.com</p>
                  <p>guhathakuratabarnali@gmail.com</p>
                </div>
              </div>
              
            </div>

          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Barnali Guha Thakurata</span></strong>. All Rights Reserved
        </div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>