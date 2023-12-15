<?php
include_once "lib/DB.php";

use PO\Lib\DB;
$db = new DB("localhost", 3306, "root", "", "motor");

$categories = $db->getCategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Motor Products</title>
  <meta name="description" content="">
<!-- 
Motor Template
http://www.templatemo.com/tm-463-motor
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

      </head>
      <body>
          <body class="products-page">
        <?php
          include_once "parts/header2.php";
        ?>

    <!--Main content-->
    <section class="container margin-bottom-50">
      <div class="tm-overflow-hidden row">
        <div class="tm-gallery col-lg-9 col-md-9 col-sm-8 col-xs-12">
          <h3 class="tm-gallery-title">Toyota (53)</h3>          
          <div class="tm-item-container">
            <img src="img/2.jpg" alt="Image">
            <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
            <div class="tm-item-price-container">
              <span class="tm-item-price">$ 50,000</span>
              <a href="#" class="tm-item-link">
                <span class="tm-item-action">Add to Cart</span>
                <img src="img/plus.png" class="tm-item-add-icon" alt="Image">
              </a>
            </div>
          </div>
          <div class="tm-item-container">
            <img src="img/2.jpg" alt="Image">
            <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
            <div class="tm-item-price-container">
              <span class="tm-item-price">$ 34,000</span>
              <a href="#" class="tm-item-link">
                <span class="tm-item-action">Add to Cart</span>
                <img src="img/plus.png" class="tm-item-add-icon" alt="Image">
              </a>
            </div>   
          </div>
          <div class="tm-item-container">
            <img src="img/2.jpg" alt="Image">
            <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
            <div class="tm-item-price-container">
              <span class="tm-item-price">$ 65,000</span>
              <a href="#" class="tm-item-link">
                <span class="tm-item-action">Add to Cart</span>
                <img src="img/plus.png" class="tm-item-add-icon" alt="Image">
              </a>
            </div>         
          </div>
          <div class="tm-item-container">
            <img src="img/2.jpg" alt="Image">
            <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
            <div class="tm-item-price-container">
              <span class="tm-item-price">$ 20,000</span>
              <a href="#" class="tm-item-link">
                <span class="tm-item-action">Add to Cart</span>
                <img src="img/plus.png" class="tm-item-add-icon" alt="Image">
              </a>
            </div>            
          </div>
          <div class="tm-item-container">
            <img src="img/2.jpg" alt="Image">
            <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
            <div class="tm-item-price-container">
              <span class="tm-item-price">$ 134,000</span>
              <a href="#" class="tm-item-link">
                <span class="tm-item-action">Add to Cart</span>
                <img src="img/plus.png" class="tm-item-add-icon" alt="Image">
              </a>
            </div>            
          </div>
          <div class="tm-item-container">
            <img src="img/2.jpg" alt="Image">
            <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
            <div class="tm-item-price-container">
              <span class="tm-item-price">$ 55,000</span>
              <a href="#" class="tm-item-link">
                <span class="tm-item-action">Add to Cart</span>
                <img src="img/plus.png" class="tm-item-add-icon" alt="Image">
              </a>
            </div>            
          </div>
          <div class="tm-item-container">
            <img src="img/2.jpg" alt="Image">
            <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
            <div class="tm-item-price-container">
              <span class="tm-item-price">$ 20,000</span>
              <a href="#" class="tm-item-link">
                <span class="tm-item-action">Add to Cart</span>
                <img src="img/plus.png" class="tm-item-add-icon" alt="Image">
              </a>
            </div>            
          </div>
          <div class="tm-item-container">
            <img src="img/2.jpg" alt="Image">
            <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
            <div class="tm-item-price-container">
              <span class="tm-item-price">$ 134,000</span>
              <a href="#" class="tm-item-link">
                <span class="tm-item-action">Add to Cart</span>
                <img src="img/plus.png" class="tm-item-add-icon" alt="Image">
              </a>
            </div>            
          </div>
          <div class="tm-item-container">
            <img src="img/2.jpg" alt="Image">
            <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
            <div class="tm-item-price-container">
              <span class="tm-item-price">$ 55,000</span>
              <a href="#" class="tm-item-link">
                <span class="tm-item-action">Add to Cart</span>
                <img src="img/plus.png" class="tm-item-add-icon" alt="Image">
              </a>
            </div>            
          </div>
        </div>
        <aside class="tm-gallery-aside col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <nav class="tm-gallery-nav">
            <h2 class="tm-gallery-nav-title">Category <i class="fa fa-caret-up"></i></h2>
            <ul>
              <li>

                <?php
                foreach ($categories as $catName) {
                echo '<a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">'.$catName['name'].
                  '<i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>';
              }
              if(isset($_SESSION['login'])){
                    echo '<a href="admin/editCategories.php">Upraviť kategorie
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>';
                }
                ?>
              </li>
          </nav>
          <div class="tm-call-us">
            <h3 class="text-uppercase tm-call-us-title">Call us</h3>
            <a href="tel:" class="tm-call-us-link">+11 565 789 57</a>
          </div>    
        </aside>
      </div>

      <!--banner-->
      <?php
        include_once "parts/banner.php"
      ?>
    </section> <!-- Main content -->
    <!--Footer content-->
      <?php
      include_once "parts/footer.php"
      ?>  
     <!-- Footer content-->
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script defer src="js/jquery.flexslider-min.js"></script><!-- FlexSlider -->
    <script>
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          slideshow: false,
          prevText: "&#xf104;",
          nextText: "&#xf105;"
        });

        // Remove preloader
        // https://ihatetomatoes.net/create-custom-preloading-screen/
        $('body').addClass('loaded');
      });
    </script>

  </body>
  </html>