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
    <header class="page-head">
      <div class="hero-slider" data-description="We're Launch, Connecticut College's entrepreneurship club, and we help turn the liberal arts into action by empowering students to tackle big problems like these <span>through entrepreneurship.</span>">
        <div class="slide" data-bg-img="traffic.jpg" data-bg-mask="linear-gradient(rgba(18, 41, 56, .54), rgba(21, 29, 35, .54))">
          <div class="content">
            <div class="callout">
              <h1>What if traffic became a thing of <span>the past?</span></h1>
            </div>
          </div>
        </div>
        <div class="slide" data-bg-img="shopping.jpg" data-bg-mask="linear-gradient(rgba(18, 41, 56, .54), rgba(21, 29, 35, .54))">
          <div class="content">
            <div class="callout">
              <h1>What if we could find just what <span>we need?</span></h1>
            </div>
          </div>
        </div>
        <div class="slide" data-bg-img="transportation.jpg" data-bg-mask="linear-gradient(rgba(18, 41, 56, .54), rgba(21, 29, 35, .54))">
          <div class="content">
            <div class="callout">
              <h1>What if we could invent more <span>efficient transport?</span></h1>
            </div>
          </div>
        </div>
        <div class="slide" data-bg-img="energy.jpg" data-bg-mask="linear-gradient(rgba(18, 41, 56, .54), rgba(21, 29, 35, .54))">
          <div class="content">
            <div class="callout">
              <h1>What if we could power our cities <span>more efficiently?</span></h1>
            </div>
          </div>
        </div>
        <div class="slide" data-bg-img="income.jpg" data-bg-mask="linear-gradient(rgba(18, 41, 56, .54), rgba(21, 29, 35, .54))">
          <div class="content">
            <div class="callout">
              <h1>What if we could make investing <span>more accessible?</span></h1>
            </div>
          </div>
        </div>
        <div class="slide" data-bg-img="literacy.jpg" data-bg-mask="linear-gradient(rgba(18, 41, 56, .54), rgba(21, 29, 35, .54))">
          <div class="content">
            <div class="callout">
              <h1>What if we could improve literacy around <span>the world?</span></h1>
            </div>
          </div>
        </div>
        <div class="slide" data-bg-img="conflict.jpg" data-bg-mask="linear-gradient(rgba(18, 41, 56, .54), rgba(21, 29, 35, .54))">
          <div class="content">
            <div class="callout">
              <h1>What could we do to make the <span>world safer?</span></h1>
            </div>
          </div>
        </div>
        <div class="slide" data-bg-img="cars.jpg" data-bg-mask="linear-gradient(rgba(18, 41, 56, .54), rgba(21, 29, 35, .54))">
          <div class="content">
            <div class="callout">
              <h1>What if we could make our fuels — and <span>the earth — cleaner?</span></h1>
            </div>
          </div>
        </div>
        <div class="slide" data-bg-img="band.jpg" data-bg-mask="linear-gradient(rgba(18, 41, 56, .54), rgba(21, 29, 35, .54))">
          <div class="content">
            <div class="callout">
              <h1>How can we more effectively bring <span>talent together?</span></h1>
            </div>
          </div>
        </div>
        <div class="slide" data-bg-img="library.jpg" data-bg-mask="linear-gradient(rgba(18, 41, 56, .54), rgba(21, 29, 35, .54))">
          <div class="content">
            <div class="callout">
              <h1>How can we make infomation <span>more accessible?</span></h1>
            </div>
          </div>
        </div>
        <div class="slide" data-bg-img="cultures.jpg" data-bg-mask="linear-gradient(rgba(18, 41, 56, .54), rgba(21, 29, 35, .54))">
          <div class="content">
            <div class="callout">
              <h1>How can we maximize  <span>microfinance?</span></h1>
            </div>
          </div>
        </div>
      </div>
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
              <li class="right"><a href=""><i class="fa fa-instagram"></i></a></li>
              <li class="right"><a href=""><i class="fa fa-twitter"></i></a></li>
              <li class="right"><a href=""><i class="fa fa-facebook"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>