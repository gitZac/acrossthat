<?php if(get_sub_field( 'display_button' ) == 'yes') :  ?>
    <div class="ax-btn">
        <?php if (have_rows('button')) : ?>
            <?php while(have_rows('button') ) : the_row(); 
                    $button_style = get_sub_field('button_style');
                    $link = get_sub_field('link');
                    $link_text = get_sub_field('link_text'); 
                    $bgcolor = get_sub_field('background_color'); ?>
                <?php if($button_style == 'curved' )  { ?>
                    <a href="<?php echo $link; ?>" style="background:<?php echo $bgcolor; ?>;" class="ax-btn--curved scrollto"><?php echo $link_text; ?></a>
                <?php } elseif($button_style == 'play') { ?>
                    <a href="<?php echo $link; ?>"  class="venobox ax-btn--watch" data-vbtype="video" data-autoplay="true"> <?php echo $link_text; ?> <i class="icofont-play-alt-2"></i></a>
                <?php } elseif($button_style == 'rect') { ?>
                    <a href="<?php echo $link; ?>" style="background:<?php echo $bgcolor; ?>;" class="ax-btn--rect animated fadeInUp scrollto"> <?php echo $link_text; ?></a>
                <?php } ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>