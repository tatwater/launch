<?php
/**
 * Template Name: Home
 * @package Launch
 * @since Launch 0.1
 */
get_header(); ?>

<section class="signup">
  <div class="content">
    <div class="row two">
      <div class="col">
        <h3>Sound cool? Sign up for updates.</h3>
        <p class="sans">We promise we'll never send you spam.</p>
      </div>
      <div class="col right">
        <form>
          <input type="email" placeholder="Email Address" />
          <button data-toggle="signup-modal" type="button">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="intro">
  <div class="content">
    <p class="sans" style="font-size: 1.15em;">So why entrepreneurship?</p>
    <p class="large sans" style="color: #666;">Simple. Entrepreneurship is everywhere.<br /> It's the way the world creates value.</p>
  </div>
</section>
<section class="events" id="events">
  <div class="row two">
    <div class="col">
      <div class="content">
        <h2><img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icons-white-screen-events.png" /> Events</h2>
        <h3>Learn from the best.<br />Experience entrepreneurship.</h3>
        <p>Events are the bread and butter of our programming. From hackathons to symposiums, we're creating events that are accessible for beginniners while being advanced enough even for seasoned entrepreneurs.</p>
        <a class="button solid white" href="">Learn more</a>
      </div>
    </div>
    <div class="col to-edge">
      <button class="toggle-drawer" data-toggle="events-drawer" type="button"><span class="left">〈</span><span class="right">〉</span></button>
      <span class="title">Upcoming:</span>
      <div class="event">
        <div class="box">
          <a href="">
            <span class="date">04</span>
            <span class="month">OCT
              <span class="rsvp">RSVP &raquo;</span>
            </span>
            <p>Very short description about this event, mentioning the speaker name</p>
          </a>
        </div>
      </div>
      <div class="event">
        <div class="box">
          <a href="">
            <span class="date">20</span>
            <span class="month">OCT
              <span class="rsvp">RSVP &raquo;</span>
            </span>
            <p>Very short description about this event, mentioning the speaker name</p>
          </a>
        </div>
      </div>
      <div class="event">
        <div class="box">
          <a href="">
            <span class="date">16</span>
            <span class="month">NOV
              <span class="rsvp">RSVP &raquo;</span>
            </span>
            <p>Very short description about this event, mentioning the speaker name</p>
          </a>
        </div>
      </div>
      <div class="event">
        <div class="box">
          <a href="">
            <span class="date">04</span>
            <span class="month">DEC
              <span class="rsvp">RSVP &raquo;</span>
            </span>
            <p>Very short description about this event, mentioning the speaker name</p>
          </a>
        </div>
      </div>
      <div class="event">
        <div class="box">
          <a href="">
            <span class="date">20</span>
            <span class="month">DEC
              <span class="rsvp">RSVP &raquo;</span>
            </span>
            <p>Very short description about this event, mentioning the speaker name</p>
          </a>
        </div>
      </div>
      <div class="event">
        <div class="box">
          <a href="">
            <span class="date">16</span>
            <span class="month">JAN
              <span class="rsvp">RSVP &raquo;</span>
            </span>
            <p>Very short description about this event, mentioning the speaker name</p>
          </a>
        </div>
      </div>
      <div class="event">
        <div class="box">
          <a href="">
            <span class="date">04</span>
            <span class="month">FEB
              <span class="rsvp">RSVP &raquo;</span>
            </span>
            <p>Very short description about this event, mentioning the speaker name</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="workshop" id="workshop">
  <div class="row two">
    <div class="col">
      <div class="content">
        <h2><img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icons-white-screen-workshop.png" />Workshops</h2>
        <h3>How do I start a company? Why is design thinking important? Find out in Workshop.</h3>
        <p>Learn entrepreneurship fundamentals in Workshop, an interdisciplinary curriculum designed to challenge you to put entreprenuership into action through short activities and expert speakers.</p>
        <a class="button solid white" href="">Learn more</a>
      </div>
    </div>
    <div class="col to-edge">
    </div>
  </div>
  <div class="workshop-banner">
    <div class="content">
      <p>Next Up:</p>
    </div>
  </div>
</section>
<section class="social" id="social">
  <div class="row two relative">
    <div class="col">
      <div class="content">
        <h2><img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icons-white-screen-social.png" />Social</h2>
        <h3>Entrepreneurship is about community. We get together for dinner every Sunday.</h3>
        <p>When diverse viewpoints meet, great things happen. We turn socially beneficial ideas into action by providing collaborative social events where likeminded people can brainstorm solutions to some of the world's most pressing issues.</p>
        <a class="button solid white" href="">Learn more</a>
      </div>
    </div>
    <div class="col vcenter">
      <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/social-invite.png" />
    </div>
  </div>
</section>
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