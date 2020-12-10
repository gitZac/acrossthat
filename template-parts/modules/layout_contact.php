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
            <?php get_template_part('/template-parts/forms/contact'); ?>
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
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>
    </div>
    
  </div>
</section>

<?php } ?>