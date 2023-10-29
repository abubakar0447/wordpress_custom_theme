<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Infinite Loop</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/2117_infinite_loop/css/tooplate-infinite-loop.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/2117_infinite_loop/fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/2117_infinite_loop/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/2117_infinite_loop/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/2117_infinite_loop/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/2117_infinite_loop/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/2117_infinite_loop/css/list-style.css" />
<!--
Tooplate 2117 Infinite Loop
https://www.tooplate.com/view/2117-infinite-loop
-->

  </head>
  <body>    
    <!-- Hero section -->
    <section id="infinite" class="text-white tm-font-big tm-parallax">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">              
        <div class="container">   
          <div class="tm-next">
              <a href="#infinite" class="navbar-brand">Infinite Loop</a>
          </div>             
            
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php wp_nav_menu( array( 'theme_location'=>'custom-menu', 'menu_class'=>'menu-list') ); ?>
          </div>        
        </div>
      </nav>
      
      <div class="text-center tm-hero-text-container">
        <div class="tm-hero-text-container-inner">
            <h2 class="tm-hero-title">Infinite Loop</h2>
            <p class="tm-hero-subtitle">
              HTML Template by Abubakar
            </p>
        </div>        
      </div>

      <div class="tm-next tm-intro-next">
        <a href="#whatwedo" class="text-center tm-down-arrow-link">
          <i class="fas fa-2x fa-arrow-down tm-down-arrow"></i>
        </a>
      </div>      
    </section>