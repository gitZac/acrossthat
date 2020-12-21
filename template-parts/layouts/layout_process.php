<?php $section_bg = get_sub_field('section_bg');
  $section_title = get_sub_field('section_title');
  $section_description = get_sub_field('section_description'); 
  global $section_count; ?>

<?php if(have_rows('our_process') ) : ?>
    <section id="section-<?php echo $section_count; ?>" class="about-lists <?php if($section_bg == 'yes') { echo 'section-bg'; } ?>">
      <div class="container">
      <?php if($section_title) : ?>
        <div class="section-title">
            <h2><?php echo $section_title; ?></h2>
            <p><?php echo $section_description; ?></p>
        </div>
      <?php endif; ?>
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
    </section>
<?php endif; ?>