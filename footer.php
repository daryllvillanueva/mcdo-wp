<footer class="footer bg-primary">
      <div class="container">
          <div class="footer__wrapper">
              <div class="footer__actions">
                <img src="./images/logo-footer.png" alt="">
                <ul>
                  <li><img src="./images/icon-google.png" alt=""></li>
                  <li><img src="./images/icon-ios.png" alt=""></li>
                </ul>

                <div class="footer_nav">

                  <?php wp_nav_menu( array(
                    'theme_location' => 'footer_menu',
                  ))?>

                </div>

                <div class="footer_nav">

                  <?php wp_nav_menu( array(
                    'theme_location' => 'header_menu',
                  ))?>

                </div>
                
              </div>
              <div class="footer__connect">
                  <p>Follow us on</p>
                  <ul class="flex">
                  <?php if( have_rows('social_media', 'option') ): ?>
                    <?php while( have_rows('social_media', 'option') ) : the_row(); ?>
                        <li><a href="<?php the_sub_field('link'); ?>"><i class="<?php the_sub_field('icon'); ?>"></i></a></li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                  </ul>
              </div>
          </div>
      </div>
  </footer>
  
  <?php wp_footer() ?>

  
</body>
</html>