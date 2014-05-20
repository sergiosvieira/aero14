<!doctype html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<html class="no-js" lang="">
  <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">        
      <!-- stylesheets - begin -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/bootstrap.css'; ?>" type="text/css" media="screen" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style.css'; ?>" type="text/css" media="screen" />
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />
      <!-- stylesheets - end -->

      <!-- javascript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-1.2-utf8.js"></script>
      <!-- javascript - end -->

  </head>
  <body>
    <!-- NavBar - Begin -->
    <nav class="container navbar-wrapper navbar navbar-inverse" role="navigation">
        <div class="navbar-inner">
            <ul class="nav">
              <li class="active">
                <a href="<?php echo home_url( '/' ); ?>" id="site-title" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                  <?php bloginfo( 'name' ); ?>
                </a>
              </li>
              <?php list_pages(); ?>
            </ul>            
        </div>
    </nav>
    <!-- NavBar - End -->

    <!-- Carousel - Begin -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/slide-01.jpg'; ?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Aerofortal 2014</h1>
              <p class="lead">8ª Edição do Festival de Aeromodelismo de Fortaleza <br>de 19 a 22 de junho de 2014.</p>
              </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/slide-02.jpg'; ?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/slide-03.jpg'; ?>" alt="">
          <div class="container">
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    <!-- Carousel - End -->