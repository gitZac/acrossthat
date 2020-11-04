<?php 
$section_bg = get_sub_field('section_background');
$section_title = get_sub_field('section_title');
$section_description = get_sub_field('section_description'); 
$map = get_sub_field('contact_map'); ?>

    <section id="contact" class="contact <?php if($section_bg == 'yes') { echo 'section-bg'; } ?>">
      <div class="container">
      <?php if($section_title) : ?>
        <div class="section-title">
            <h2><?php echo $section_title; ?></h2>
            <p><?php echo $section_description; ?></p>
        </div>
      <?php endif; ?>
        <div class="row">
            <?php while(have_rows('contact_details') ) : the_row(); 
                $box_title = get_sub_field('contact_title');
                $box_width = get_sub_field('column_width');
                $box_icon = get_sub_field('contact_icon');
                $box_content = get_sub_field('contact_content'); ?>
                <div class="col-lg-<?php echo $box_width; ?> d-flex align-items-stretch" data-aos="fade-up">
                    <div class="info-box">
                        <i class="bx bx-<?php echo $box_icon; ?>"></i>
                        <h3><?php echo $box_title; ?></h3>
                        <p><?php echo $box_content; ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php echo $map; ?>
            <?php get_template_part('/template-parts/forms/contact'); ?>
        </div>
      </div>
    </section>