<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Motor Website Template
    </title>
    <meta name="description" content="">
    <!-- Motor Template http://www.templatemo.com/tm-463-motor -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700'
    rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
    queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://
    -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
      </script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js">
      </script>
    <![endif]-->
  </head>
  
  <body class="about-page">
    <!-- Preloader -->
    <!-- End Preloader -->
    <?php include_once "parts/header.php"; ?>
      <!--Main content-->
      <section class="container margin-bottom-50">
        <div class="about-container">
          <div class="about-container-left">
            <img src="img/about/2.jpg" alt="Image" class="img-responsive">
          </div>
          <div class="about-container-right">
            <h2 class="about-title">
              One Column
            </h2>
            <p class="about-description">
              Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
              quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh
              id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
              Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare
              odio.
            </p>
            <p class="about-description">
              Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
              nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
              a sit amet mauris. Morbi accumsan ipsum velit.
            </p>
            <a href="#" class="about-link">
              Duised sitDamet
            </a>
          </div>
        </div>
        <div class="about-container-2 margin-bottom-50">
          <div class="about-container-inner">
            <h3 class="about-title-2">
              Two Columns
            </h3>
            <img src="img/about/3.jpg" alt="Image" class="img-responsive margin-bottom-15">
            <p class="about-description">
              Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
              quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh
              id elit.
            </p>
            <a href="#" class="about-link about-link-2">
              Details
            </a>
          </div>
          <div class="about-container-inner">
            <h3 class="about-title-2">
              Two Columns
            </h3>
            <img src="img/about/4.jpg" alt="Image" class="img-responsive margin-bottom-15">
            <p class="about-description">
              Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
              quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh
              id elit.
            </p>
            <a href="#" class="about-link about-link-2">
              Details
            </a>
          </div>
        </div>
        <div class="about-container-2">
          <div class="services-container-inner">
            <h3 class="about-title-2">
              Three Columns
            </h3>
            <img src="img/services-1.jpg" alt="Image" class="img-responsive margin-bottom-15">
            <p class="about-description">
              Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
              quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh
              id elit.
            </p>
            <a href="#" class="about-link about-link-2">
              Details
            </a>
          </div>
          <div class="services-container-inner">
            <h3 class="about-title-2">
              Three Columns
            </h3>
            <img src="img/services-1.jpg" alt="Image" class="img-responsive margin-bottom-15">
            <p class="about-description">
              Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
              quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh
              id elit.
            </p>
            <a href="#" class="about-link about-link-2">
              Details
            </a>
          </div>
          <div class="services-container-inner">
            <h3 class="about-title-2">
              Three Columns
            </h3>
            <img src="img/services-1.jpg" alt="Image" class="img-responsive margin-bottom-15">
            <p class="about-description">
              Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
              quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh
              id elit.
            </p>
            <a href="#" class="about-link about-link-2">
              Details
            </a>
          </div>
        </div>
        <!--banner-->
        <?php include_once "parts/banner.php" ?>
      </section>
      <!-- Main content -->
      <!--Footer content-->
      <?php include_once "parts/footer.php" ?>
        <!-- Footer content-->
        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js">
        </script>
        <!-- jQuery -->
        <script type="text/javascript" src="js/templatemo-script.js">
        </script>
        <!-- Templatemo Script -->
        <script defer src="js/jquery.flexslider-min.js">
        </script>
        <!-- FlexSlider -->
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