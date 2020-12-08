<?php if(have_rows('fp_faq') ) : ?>
    <section id="faq" class="faq section-bg">
      <div class="container">
        <div class="section-title">
          <h2><?php the_field('faq_section_title'); ?></h2>
        </div>
        <div class="row  d-flex align-items-stretch">
            <?php while(have_rows('fp_faq') ) : the_row(); ?>
                <div class="col-lg-6 faq-item" data-aos="fade-up">
                    <h4><?php the_sub_field('faq_question'); ?></h4>
                    <p><?php the_sub_field('faq_answer'); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
      </div>
    </section>
<?php endif; ?>