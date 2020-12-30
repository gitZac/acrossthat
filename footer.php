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
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-links">
            <?php dynamic_sidebar( 'footer-area-1' ); ?>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <?php dynamic_sidebar( 'footer-area-2' ); ?>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <?php dynamic_sidebar( 'footer-area-3' ); ?>
          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="/"><img src="<?php the_field('footer_logo', 'option'); ?>" alt="" class="img-fluid"></a>
            <p><?php the_field('address', 'option'); ?></p>
            <p><strong>Phone:</strong> <?php the_field('phone', 'option'); ?></p>
            <p><strong>Email:</strong> <?php the_field('email', 'option'); ?></p>
            <div class="social-links mt-3">
              <?php get_template_part('/inc/loop/loop-options'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <?php echo date('Y'); ?> <strong><span>AcrossThat Digital Studios</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
