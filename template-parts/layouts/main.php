<?php if (acf_activated() && have_rows('block_editor') ) : $section_counter = 0; ?>

    <?php while(acf_activated() && have_rows('block_editor') ) : the_row(); $section_counter++; ?>
        <?php $layout_type = get_row_layout(); ?>
        <?php get_template_part( 'template-parts/layouts/layout_' . $layout_type ); ?>
    <?php endwhile; ?>
    
<?php endif; ?>