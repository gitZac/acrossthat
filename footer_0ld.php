<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package AcrossThat
 */

?>
<footer class="footer" id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 footer-info">
            <div class="footer__logo-container">
              <a href="index.html"><img src="<?php echo get_template_directory_uri( ) . '/dist/assets/img/logo5-white.png' ?>" alt="" class="img-fluid"></a>
            </div>
              <p>
                <?php the_field('address', 'option'); ?> <br>
                <strong>Phone: </strong><?php the_field('phone', 'option'); ?><br>
                <strong>Email: </strong><?php the_field('email', 'option'); ?><br>
              </p>
              <div class="social-links mt-3">
                <?php get_template_part('/template-parts/loop/loop-options'); ?>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 footer-links">
              <?php dynamic_sidebar( 'footer-area-1' ); ?>
            </div>
            <div class="col-lg-3 col-md-3 footer-links">
            <?php dynamic_sidebar( 'footer-area-2' ); ?>
            </div>
            <div class="col-lg-3 col-md-3 footer-links">
              <?php dynamic_sidebar( 'footer-area-3' ); ?>
            </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FSTAN</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Proudly built by <a style="color:#fff;" href="https://acrossthat.com">AcrossThat Studios</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
