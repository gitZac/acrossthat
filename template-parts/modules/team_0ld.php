<?php if(have_rows('fp_team') ) : ?>
    <section id="team" class="team">
      <div class="container">
        <div class="section-title">
          <h2><?php the_field('team_section_title'); ?></h2>
          <p><?php the_field('team_intro'); ?></p>
        </div>
        <div class="row">
            <?php while(have_rows('fp_team') ) : the_row();
                $image = get_sub_field('team_bio_image');
                $name = get_sub_field('team_member_name');
                $title = get_sub_field('team_member_title');
                $email = get_sub_field('team_member_email');?>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="member">
                        <div class="pic"><img src="<?php echo $image; ?> " class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4><?php echo $name; ?></h4>
                            <span><?php echo $title; ?></span>
                            <div class="social">
                            <a href="mailto:<?php echo $email; ?>"><i class="icofont-email"></i><?php echo $email; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div><!-- End row -->
      </div>
    </section><!-- End Our Team Section -->
<?php endif; ?>