<?php 
  $section_bg = get_sub_field('section_bg');
  $section_title = get_sub_field('section_title');
  $section_description = get_sub_field('section_description'); ?>
  <section class="faq section-bg <?php if($section_bg == 'yes') { echo 'section-bg'; } ?>">
    <div class="container">
      <?php if($section_title) : ?>
        <div class="section-title">
            <h2><?php echo $section_title; ?></h2>
            <p><?php echo $section_description; ?></p>
        </div>
    <?php endif; ?>
      <div class="row d-flex align-items-stretch">
          <?php if(have_rows('fp_faq') ) : while(have_rows('fp_faq') ) : the_row(); ?>
              <div class="col-lg-6 faq-item" data-aos="fade-up">
                  <h4><?php the_sub_field('faq_question'); ?></h4>
                  <p><?php the_sub_field('faq_answer'); ?></p>
              </div>
          <?php endwhile; endif; ?>
      </div>
    </div>
  </section>