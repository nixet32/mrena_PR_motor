<?php
include_once "lib/DB.php";

use PO\Lib\DB;
$db = new DB("localhost", 3306, "root", "", "motor");

$gallery = $db->getGallery();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Motor Gallery</title>
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
      <body class="gallery-page">
        <?php
          include_once "parts/header2.php";
        ?>

    <!--Main content-->
    <section class="container margin-bottom-50">
      <div class="row">
        <div class="tm-gallery col-lg-12">
          <?php
          foreach ($gallery as $image) {
          echo '<div class="tm-item-container">
              <img src="admin/uploads/' . $image['imgName'] . '" width="211" height="211" alt="Image">
          <div class="tm-item-price-container tm-gallery-item-info">
              <span class="tm-item-price">' . $image['fileTitle'] . '</span>
              <a href="#" class="tm-item-link">
                  <span class="tm-item-action">View More</span>
              </a>';
              if(isset($_SESSION['login'])){
                echo '<form action="admin/deleteGallery.php" method="post">
                <input type="hidden" name="id" value="' . $image['id'] . '">
                <button type="submit" name="delete">Delete</button>
                </form>';
              }
          echo '</div>
          </div>';
}
?>
<?php
      if(isset($_SESSION['login'])){
        echo '<form action="admin/galleryUpload.php" method="post" enctype="multipart/form-data">
            <input type="text" name="filetitle" placeholder="Image title...">
            <input type="file" name="my_image"><br>
            <button type="submit" name="submit">UPLOAD</button>
        </form>';
      }
      ?>
        
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
