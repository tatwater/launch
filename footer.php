<?php
/**
 * @package Launch
 * @since Launch 0.1
 */
?>

      <footer>
        <div class="content">
          <div class="row five">
            <div class="col">
              <img class="logo" src="<?php bloginfo('template_directory'); ?>/img/launch-screen-wordmark_logo-white.png" />
            </div>
            <div class="col two">
              <!-- <nav>
                <ul>
                  <li><a href="">Events</a></li>
                  <li><a href="">Workshops</a></li>
                  <li><a href="">Launch X</a></li>
                  <li><a href="">Team</a></li>
                </ul>
                <ul>
                  <li><a href="">Latest News</a></li>
                  <li><a href="">Launch Library</a></li>
                  <li><a href="">Made with Launch</a></li>
                </ul>
              </nav> -->
            </div>
            <div class="col two">
              <strong>Get updates:</strong>
              <form>
                <input type="email" placeholder="Email Address" />
                <button data-toggle="signup-modal" type="button">Sign Up</button>
              </form>
            </div>
          </div>
        </div>
      </footer>
    </section>
    <div class="modal" id="mc_embed_signup">
      <button type="button" data-toggle="signup-modal"><i class="fa fa-times"></i></button>
      <!-- Begin MailChimp Signup Form -->
      <form action="//teamlaunch.us8.list-manage.com/subscribe/post?u=82dabac6ad972721686e9e4e4&amp;id=1027da4934" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
          <h3>Just one more step!</h3>
          <div class="row two">
            <div class="col">
              <div class="mc-field-group half">
                <label for="mce-FNAME">First Name  <span class="asterisk">*</span></label>
                <input type="text" name="FNAME" class="required" id="mce-FNAME" placeholder="Han" />
              </div>
              <div class="mc-field-group half">
                <label for="mce-LNAME">Last Name </label>
                <input type="text" name="LNAME" class="" id="mce-LNAME" placeholder="Solo" />
              </div>
              <div class="mc-field-group">
                <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
                <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="hsolo@conncoll.edu" />
              </div>
              <div class="mc-field-group input-group digest">
                <img class="digest-logo" src="<?php bloginfo('template_directory'); ?>/img/digest.png" />
                <p>We periodically send out collections of our favorite resources and inspiration.</p>
                <ul>
                  <li>
                    <input type="checkbox" value="1" name="group[13573][1]" id="mce-group[13573]-13573-0" />
                    <span class="faux-input"><i class="fa fa-check"></i></span>
                    <label for="mce-group[13573]-13573-0">Put me on the list!</label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col">
              <div class="mc-field-group input-group">
                <strong>I would like:</strong>
                <ul>
                  <li>
                    <input type="radio" value="2" name="group[14601]" id="mce-group[14601]-14601-0" checked />
                    <span class="faux-input"></span>
                    <label for="mce-group[14601]-14601-0">Club member emails</label>
                  </li>
                  <li>
                    <input type="radio" value="4" name="group[14601]" id="mce-group[14601]-14601-1" />
                    <span class="faux-input"></span>
                    <label for="mce-group[14601]-14601-1">Only occasional, important updates</label>
                  </li>
                </ul>
              </div>
              <div class="mc-field-group input-group">
                <strong>Remind me about:</strong>
                <ul>
                  <li>
                    <input type="checkbox" value="8" name="group[14605][8]" id="mce-group[14605]-14605-0" checked />
                    <span class="faux-input"><i class="fa fa-check"></i></span>
                    <label for="mce-group[14605]-14605-0">Events</label>
                  </li>
                  <li>
                    <input type="checkbox" value="16" name="group[14605][16]" id="mce-group[14605]-14605-1" checked />
                    <span class="faux-input"><i class="fa fa-check"></i></span>
                    <label for="mce-group[14605]-14605-1">Workshops</label>
                  </li>
                  <li>
                    <input type="checkbox" value="32" name="group[14605][32]" id="mce-group[14605]-14605-2" />
                    <span class="faux-input"><i class="fa fa-check"></i></span>
                    <label for="mce-group[14605]-14605-2">Social meetups</label>
                  </li>
                  <li>
                    <input type="checkbox" value="64" name="group[14605][64]" id="mce-group[14605]-14605-3" />
                    <span class="faux-input"><i class="fa fa-check"></i></span>
                    <label for="mce-group[14605]-14605-3">Admin meetings</label>
                  </li>
                  <li>
                    <input type="checkbox" value="128" name="group[14605][128]" id="mce-group[14605]-14605-4" />
                    <span class="faux-input"><i class="fa fa-check"></i></span>
                    <label for="mce-group[14605]-14605-4">Launch X initiatives</label>
                  </li>
                </ul>
              </div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;">
                <input type="text" name="b_82dabac6ad972721686e9e4e4_1027da4934" tabindex="-1" value="" />
              </div>
              <div class="clear">
                <input class="button" type="submit" value="Sign me up!" name="subscribe" id="mc-embedded-subscribe" class="button" />
              </div>
            </div>
          </div>
          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>
        </div>
      </form>
      <!--End mc_embed_signup-->
    </div>
    <div class="mask"></div>

    <?php wp_footer(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/vendor/slick/slick.min.js"></script>
  </body>
</html>