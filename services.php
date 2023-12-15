<?php
include_once "lib/DB.php";

use PO\Lib\DB;
$db = new DB("localhost", 3306, "root", "", "motor");

$services = $db->getCustomerService();
$serviceD = $db->getServiceDetails();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Motor Services</title>
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
      <body class="services-page">

    
        <?php
          include_once "parts/header.php";
        ?>

    <!--Main content-->
    <section class="container margin-bottom-50">
      <div class="services-container-1">
        <h2 class="services-title">Customer Services</h2>
        <div class="services-blocks-container">
          <div class="services-block">
            <div class="services-header">
              <i class="fa fa-plus services-icon"></i>
              <h3 class="services-title-2"><?php echo $services[0]['title']; ?></h3>  
            </div>          
            <p class="services-description"><?php echo $services[0]['description']; ?></p>
              <?php
              if(isset($_SESSION['login'])){
                echo '<form action="admin/editService.php" method="post">
                <input type="hidden" name="id" value="' . $services[0]['id'] . '">
                <button type="submit" name="delete">Edit</button>
              </form>';
            }
              ?>
          </div>
          <div class="services-block">
            <div class="services-header">
              <i class="fa fa-plus services-icon"></i>
              <h3 class="services-title-2"><?php echo $services[1]['title']; ?></h3>  
            </div>          
            <p class="services-description"><?php echo $services[1]['description']; ?>.</p>
              <?php
              if(isset($_SESSION['login'])){
                echo '<form action="admin/editService.php" method="post">
                <input type="hidden" name="id" value="' . $services[1]['id'] . '">
                <button type="submit" name="delete">Edit</button>
              </form>';
            }
              ?>
          </div>                    
        </div>
        <div class="services-blocks-container">
          <div class="services-block">
            <div class="services-header">
              <i class="fa fa-plus services-icon"></i>
              <h3 class="services-title-2"><?php echo $services[2]['title']; ?></h3>  
            </div>          
            <p class="services-description"><?php echo $services[2]['description']; ?></p>
               <?php
              if(isset($_SESSION['login'])){
                echo '<form action="admin/editService.php" method="post">
                <input type="hidden" name="id" value="' . $services[2]['id'] . '">
                <button type="submit" name="delete">Edit</button>
              </form>';
            }
              ?>
          </div>
          <div class="services-block">
            <div class="services-header">
              <i class="fa fa-plus services-icon"></i>
              <h3 class="services-title-2"><?php echo $services[3]['title']; ?></h3>  
            </div>          
            <p class="services-description"><?php echo $services[3]['description']; ?></p>
              <?php
              if(isset($_SESSION['login'])){
                echo '<form action="admin/editService.php" method="post">
                <input type="hidden" name="id" value="' . $services[3]['id'] . '">
                <button type="submit" name="delete">Edit</button>
              </form>';
            }
              ?>
          </div>                    
        </div>  
      </div>  
  <div class="about-container-2">
    <?php
          foreach ($serviceD as $details) {
          echo '<div class="services-container-inner">
          <h3 class="about-title-2">'.$details['title'].'</h3>
          <img src="img/services-1.jpg" alt="Image" class="img-responsive margin-bottom-15">          
          <p class="about-description">'.$details['description'].'</p>
          <a href="#" class="about-link about-link-2">Details</a>';
            if(isset($_SESSION['login'])){
                echo '<form action="admin/editServiceDetails.php" method="post">
                <input type="hidden" name="id" value="' . $details['id'] . '">
                <button type="submit" name="delete">Edit</button>
              </form></div>';
            }else{
              echo '</div>';
            }
    }
    ?>
  </div>

      <!--banner-->
      <div class="tm-banner">
        <h2 class="tm-banner-title">Maecenas</h2>
        <p class="tm-banner-description">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium</p>
        <a href="#" class="tm-banner-link"><i class="fa fa-play"></i></a>
      </div>
    </section> <!-- Main content -->
      <!--banner-->
      <div class="tm-banner">
        <h2 class="tm-banner-title">Maecenas</h2>
        <p class="tm-banner-description">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium</p>
        <a href="#" class="tm-banner-link"><i class="fa fa-play"></i></a>
      </div>
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
