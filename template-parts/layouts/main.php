<?php 
if(have_rows('block_editor') ) : ?>
    <?php while(have_rows('block_editor') ) : the_row(); ?>

        <?php if(get_row_layout() == 'about' ) : ?>

            <?php get_template_part( 'template-parts/modules/layout_about' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'box_group' ) : ?>

            <?php get_template_part( 'template-parts/modules/layout_boxes' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'hero' ) : ?>

            <?php get_template_part( 'template-parts/modules/layout_hero' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'content_block' ) : ?>

            <?php get_template_part( 'template-parts/modules/entry-content_layout' ); ?>

        <?php endif; ?>

        <?php if(get_row_layout() == 'cta' ) : ?>

            <?php get_template_part( 'template-parts/modules/cta' ); ?>

        <?php endif; ?>

        <?php if(get_row_layout() == 'custom_post_type' ) : ?>

            <?php get_template_part( 'template-parts/modules/layout_cpt' ); ?>

        <?php endif; ?>

        <?php if(get_row_layout() == 'hover_box' ) : ?>

            <?php get_template_part( 'template-parts/modules/layout_scrapbook' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'hover_card' ) : ?>

            <?php get_template_part( 'template-parts/modules/card_layout' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'icon_list' ) : ?>

            <?php get_template_part( 'template-parts/modules/layout_icon-list' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'contact' ) : ?>

            <?php get_template_part( 'template-parts/modules/contact_layout' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'carousel' ) : ?>

            <?php get_template_part( 'template-parts/modules/layout_carousel' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'global_carousel' ) : ?>

            <?php get_template_part( 'template-parts/modules/carousel' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'faq' ) : ?>

            <?php get_template_part( 'template-parts/modules/layout_faq' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'process' ) : ?>

            <?php get_template_part( 'template-parts/modules/layout_process' ); ?>
    
        <?php endif; ?>

    <?php endwhile; ?>
    
<?php endif; ?>