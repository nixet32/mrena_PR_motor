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
         <div class="templatemo-welcome">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                <img src="img/welcome-img.png" class="img-responsive welcome-img" alt="Welcome">
              </div>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <h2 class="text-uppercase">
                  <span class="welcome-title-1">We love your</span>
                  <span class="welcome-title-2">satisfaction</span>
                </h2>
                <p class="welcome-message">Motor is free Bootstrap v3.3.4 responsive web template provided 
                by <span class="blue">template</span><span class="green">mo</span>.com website. You can download, 
                modify and use this for your website projects.</p>
                <a href="#" class="welcome-read-more">Read More</a>
              </div>
            </div>    
          </div>
        </div>
      </section>