<?php 
$image = get_field('team_bio_image');
$title = get_field('team_member_title'); ?>

<div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
    <div class="team__member">
        <div class="team__pic"><img src="<?php echo $image; ?> " class="img-fluid" alt=""></div>
        <div class="team__member-info">
            <h4><?php the_title(); ?></h4>
            <span><?php echo $title; ?></span>
            <div class="team__contact">
                <?php if(have_rows('contact') ) :?>
                    <?php while (have_rows('contact') ) : the_row();
                        $type = get_sub_field('type');
                        $email = get_sub_field('team_member_email'); 
                        $phone = get_sub_field('phone'); 
                        $social = get_sub_field('social');
                        $url = get_sub_field('link_to_social_page'); ?>
                        <?php if($type == 'email') : ?>
                            <a href="mailto:<?php echo $email; ?>"><i class="icofont-email"></i><?php echo $email; ?></a>
                        <?php elseif($type == 'phone') :  ?>
                            <a href="tel:<?php echo $phone; ?>"><i class="icofont-phone"></i><?php echo $phone; ?></a>
                        <?php elseif($type == 'social') :  ?>
                            <a class="team__social-link" target="_blank" href="<?php echo $url; ?>"><i class="icofont-<?php echo $social; ?>"></i><?php echo $social; ?></a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>