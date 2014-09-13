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
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.1.min.js"></script>
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <?php wp_head(); ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
  </head>
  <body>