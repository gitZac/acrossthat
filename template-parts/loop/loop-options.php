<?php if( have_rows('social_media' , 'option') ): ?>
    <?php while( have_rows('social_media' , 'option') ) : the_row(); 
        $link = get_sub_field('social_media_link' , 'option');
        $icon = get_sub_field('social_icon' , 'option');?>
    <a href="<?php echo $link; ?>" class="twitter"><i class="icofont-<?php echo $icon; ?>"></i></a>
    <?php endwhile; ?>
<?php endif; ?>
