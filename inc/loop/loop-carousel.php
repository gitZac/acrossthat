<?php $args = array(
    'post_type' => 'fp_carousel',							
    'posts_per_page' => -1,							
    'orderby' => 'date',
    'order' => 'DESC'
);?>
<?php $carousel = new WP_Query($args); if($carousel->have_posts( ) ) { ?>
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
            <?php while($carousel->have_posts(  ) ) : $carousel->the_post(); $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full' );?>
                <div class="carousel-item <?php echo $carousel->current_post >= 1 ? '' : 'active'; ?>" style="background-image: url(<?php echo $thumbnail['0']; ?>);">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="header header--main header--light animated fadeInDown fontw-700"><?php the_title(); ?></h2>
                            <p class="animated fadeInUp"><?php the_field('slide_description'); ?></p>
                            <?php get_template_part( '/template-parts/components/component_button_cpt' ); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php get_template_part('/template-parts/partials/carousel/carousel', 'controls'); ?>
    </div>
<?php } else { 
get_template_part( 'template-parts/content-none' ); } wp_reset_postdata(); ?>