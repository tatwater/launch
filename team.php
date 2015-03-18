<?php
/**
 * Template Name: Team
 * @package Launch
 * @since Launch 0.2
 */
get_header(); ?>

<header class="page-head">
  <div class="background" data-bg-img="team-bg.jpg" data-bg-mask="linear-gradient(rgba(18, 41, 56, .54), rgba(21, 29, 35, .54))">
    <div class="content">
      <div class="callout">
        <h1>Get to know <span>the crew.</span></h1>
        <p>Here's a paragraph introducing the team if we <span>want one.</span></p>
      </div>
    </div>
  </div>
</header>
<section class="admin" id="admin">
  <div class="content">
    <h2><img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icons-white-screen-admin.png" />Admin</h2>
    <h3>Sound cool? Join us and help determine the future of entrepreneurship at Connecticut College.</h3>
    <p>We wouldn't be able to do the things we do if it were not for our dedicated team. We create together, have fun together, and work on ventures together. No experience required.</p>
    <p class="sans"><strong>We meet Sundays at 9pm in New London Hall 400. Everyone is welcome!</strong></p>
    <div class="launchx">
      <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icons-white-screen-launchx.png" />
      <p><strong>Launch X</strong> - A big part of entrepreneurship is experimentation. It's pretty exciting.</p>
      <a class="button solid white thin right" href="">Learn more</a>
    </div>
  </div>

  <?php get_footer(); ?>