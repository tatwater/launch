<?php
/**
 * @package Launch
 * @since Launch 0.1
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="Launch WebDev Team" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/font-awesome-4.1.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/slick/slick.css"/>
    <script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <?php wp_head(); ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
  </head>
  <body>
    <nav class="main-nav">
      <div class="nav-bar">
        <div class="content">
          <ul class="main">
            <li class="logo">
              <a href=""><img class="default" src="<?php bloginfo('template_directory'); ?>/img/launch-screen-wordmark_logo-white.png" /><img class="fixed" src="<?php bloginfo('template_directory'); ?>/img/launch-screen-wordmark_logo-gray.png" /></a>
            </li>
            <li><a href="">Events</a></li>
            <li><a href="">Workshops</a></li>
            <li><a href="">Launch X</a></li>
            <li><a href="">Team</a></li>
            <li class="search">
              <button class="nobg" data-toggle="search" type="button"><i class="fa fa-search"></i></button>
              <form>
                <input type="search" placeholder="What are you looking for?" />
                <input class="button nobg" type="submit" value="〉" />
              </form>
            </li>
            <li class="right"><a href="https://instagram.com/teamlaunchcc" target="instagram"><i class="fa fa-instagram"></i></a></li>
            <li class="right"><a href="https://www.twitter.com/teamlaunchcc" target="twitter"><i class="fa fa-twitter"></i></a></li>
            <li class="right"><a href="https://www.facebook.com/launchconncoll" target="facebok"><i class="fa fa-facebook"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>