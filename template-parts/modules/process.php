<?php if(have_rows('our_process') ) : ?>
    <section class="about-lists">
      <div class="container">
        <div class="section-title">
          <h2>Our Process</h2>
        </div>
        <div class="row no-gutters">
            <?php while(have_rows('our_process') ) : the_row(); ?>
                <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
                    <span><?php the_sub_field('step'); ?></span>
                    <h3><?php the_sub_field('process_title'); ?></h3>
                    <p><?php the_sub_field('process_description');?></p>
                </div>
            <?php endwhile; ?>
        </div>
      </div>
    </section><!-- End About Lists Section -->
<?php endif; ?>