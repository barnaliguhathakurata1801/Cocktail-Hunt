<?php
  error_reporting(0);
  
    
    $cocktailwithoutsp="";
    if($_GET['cocktailname'])
    {
      $urlContents=file_get_contents("https://www.thecocktaildb.com/api/json/v1/1/search.php?s=".urlencode($_GET['cocktailname']));

          $contentArray=json_decode($urlContents,true);
      
        if(empty($contentArray['drinks']))
        {
        // $error="That could not be found";
         //echo "That could not be found";
         $contentArray['drinks'][0]['strIngredient0']=null;
         $value2 = $contentArray['drinks'][0]['strMeasure0']=null;
         $insArray[$x]=$contentArray['drinks'][0]['strInstructions']=null;
         $contentArray['drinks'][0]['strDrinkThumb']="https://www.google.com/url?sa=i&url=https%3A%2F%2Fanxietypanichealth.com%2Fsorry-page-not-found%2F&psig=AOvVaw3uWsGMqPB91-YRxmtSboE7&ust=1624369963744000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCPDa_efvqPECFQAAAAAdAAAAABAL";
        //alert("notfound");
      }
        else
        {
          $imgUrl=$contentArray['drinks'][0]['strDrinkThumb'];
          //echo $imgUrl;
          
          $image = $imgUrl;
          $imageData = base64_encode(file_get_contents($imgUrl));
          
          $strDrink=$contentArray['drinks'][0]['strDrink'];
            

          for ($x = 1; $x <= 15; $x++) 
            {
              $value = $contentArray['drinks'][0]['strIngredient'.$x];
              if (empty($value))
                break;
              else
                $ingrArray[$x]=$value;
            }
            
            for ($x = 1; $x <= 15; $x++) 
            {
              $value2 = $contentArray['drinks'][0]['strMeasure'.$x];
              if (empty($value2))
                break;
              else
                $measArray[$x]=$value2;
            }

            $len=sizeof($contentArray['drinks']);

            for ($x = 0; $x < $len; $x++) 
            {
              $insArray[$x]=$contentArray['drinks'][$x]['strInstructions'];
            }
        }
      }

?>

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
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Cocktail Hunt</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Showing results for :</h2>
          <div class="section-title">
            <h2><?php echo$_GET['cocktailname']?></h2>
          </div>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Inner Page</li>
          
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">

      <div class="container">
      <div class="section-title">
        <h4><?php echo $strDrink ?></h4>
    </div> 
    

        <div class="container">
        <p><?php echo '<img src="data:imgUrl/jpg;base64,'.$imageData.'" height=400px width=400px class="rounded mx-auto d-block">'?></p>
          <div class="row">

              <div class="col-sm-4">
              <div class="section-title">
                <h4 >Ingredients and Measurements</h4>
                  <?php
                    for ($x = 1; $x <=sizeof($ingrArray); $x++) 
                      { ?>
                      <p ><?php echo $x.") ".$ingrArray[$x] ."  ". $measArray[$x]  . "<br/>"?></p>
                  <?php } ?>
                  </div>
              </div>

              <div class="col-sm-8">
              <div class="section-title">
                <h4>Procedure</h4>
                  <?php
                    for ($x = 0; $x < $len; $x++) 
                      { $b=$x+1;
                        ?>
                      <p><?php echo $b.") ".$insArray[$x] . "<br/>"?></p>
                  <?php } ?>
                      </div>
              </div>
              
          </div>
          <p><strong>Note:</strong>If you are unable to find the drink make sure there is no typos and you are entering a valid name.</p>
        </div>
        
      </div>
      
    </section>

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
