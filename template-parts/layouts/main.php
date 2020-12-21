<?php 
global $section_count;?>
<?php if (acf_activated() && have_rows('block_editor') ) : $section_count = 0; ?>

    <?php while(acf_activated() && have_rows('block_editor') ) : the_row(); ?>
        <?php $layout_type = get_row_layout(); ?>
        <?php get_template_part( 'template-parts/layouts/layout_' . $layout_type ); $section_count++; ?>
    <?php endwhile; ?>
    
<?php endif; ?>