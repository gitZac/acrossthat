<?php 
$section_bg = get_sub_field('section_background');
$section_title = get_sub_field('section_title');
$section_description = get_sub_field('section_description'); 
$map = get_sub_field('contact_map'); 
$style = get_sub_field('style'); ?>

<?php if($style == 'default' ) { ?>

    <section class="contact <?php if($section_bg == 'yes') { echo 'section-bg'; } ?>">
      <div class="container">
      <?php if($section_title) : ?>
        <div class="section-title">
            <h2><?php echo $section_title; ?></h2>
            <p><?php echo $section_description; ?></p>
        </div>
      <?php endif; ?>
        <div class="row">
            <?php while(have_rows('contact_details') ) : the_row(); 
                $title = get_sub_field('contact_title');
                $width = get_sub_field('column_width');
                $icon = get_sub_field('icon');
                $content = get_sub_field('contact_content'); ?>
                <div class="col-lg-<?php echo $width; ?> d-flex align-items-stretch" data-aos="fade-up">
                    <div class="info-box">
                        <i class="<?php echo $icon; ?>"></i>
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $content; ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php echo $map; ?>
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                <?php echo do_shortcode( '[gravityform id="1" title="true" description="true"]' ); ?>
            </div>


        </div>
      </div>
    </section>

<?php } elseif($style == 'two-col-borders' ) { ?>

<section class="contact--two-col-borders">
  <div class="container" data-aos="fade-up">
    <?php if($section_title) : ?>
      <div class="section-title">
          <h2><?php echo $section_title; ?></h2>
          <p><?php echo $section_description; ?></p>
      </div>
    <?php endif; ?>
    <div class="row">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
        <?php while(have_rows('contact_details') ) : the_row(); 
          $title = get_sub_field('contact_title');
          $icon = get_sub_field('icon');
          $content = get_sub_field('contact_content');?>
            <div class="">
              <i class="<?php echo $icon; ?>"></i>
              <h4><?php echo $title; ?></h4>
              <p><?php echo $content; ?></p>
            </div>
          <?php endwhile; ?>
          <?php echo $map; ?>
        </div>
        
      </div>
    
      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <?php echo do_shortcode( '[gravityform id="3" title="true" description="true"]' ); ?>
      </div>
    </div>
    
  </div>
</section>

<?php } ?>