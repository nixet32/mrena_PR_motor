<?php
include_once "lib/DB.php";

use PO\Lib\DB;
$db = new DB("localhost", 3306, "root", "", "motor");

session_start();

$slider = $db->getRandomSliderItem();
$nextSlider = $db->getNextSliderItem($slider);
?>     
        <section class="templatemo-top-section">
          <div class="templatemo-header">
            <img class="templatemo-header-img" src="img/header.png" alt="Header">
            <h1 class="templatemo-site-name">Motor</h1>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <div class="templatemo-nav-container">
              <nav class="templatemo-nav">
                <ul>
            <?php
            $menu = $db->getMenuItems();
            foreach ($menu as $menuName => $menuUrl) {
                echo '<li><a href="'.$menuUrl.'">'.$menuName.'</a></li>';
            }
            if(!(isset($_SESSION['login']))){
            echo '<li><a href="admin/login.php">Login</a></li>';
            }

            if(isset($_SESSION['login'])){
              echo '<li><a href="admin/adminMenu.php">Pridat</a></li>
              <li><a href="admin/logout.php">Logout</a></li>';
            }
            ?>
               </ul>
             </nav> 
           </div>
         </div>
         <div class="templatemo-welcome welcome-slider">
          <div class="container">
            <div class="row">
              <div class="flexslider">
                <ul class="slides">
                  <li>
                    <div class="about-slider">
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                        <h2 class="text-uppercase welcome-title">
                         <?php    
                          echo '<span class="welcome-title-1">' . $slider['title'] . '</span>
                                <span class="welcome-title-2">' . $slider['subtitle'] . '</span>
                            </h2>
                            <p class="welcome-message">' . $slider['description'] . '</p>';
                   ?>
                      </div>              
                    </div>  
                  </li>
                  <li>
                    <div class="about-slider">
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                        <h2 class="text-uppercase welcome-title">
                         <?php
                        echo '<span class="welcome-title-1">' . $nextSlider['title'] . '</span>
                                <span class="welcome-title-2">' . $nextSlider['subtitle'] . '</span>
                            </h2>
                            <p class="welcome-message">' . $nextSlider['description'] . '</p>';
                       ?>
                      </div>              
                    </div>  
                  </li>
                </ul>
              </div>                          
            </div>    
          </div>
        </div>
      </section>