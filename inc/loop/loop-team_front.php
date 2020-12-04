<?php $args = array(
    'post_type' => 'team',							
    'posts_per_page' => -1,							
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'location',
            'field'    => 'slug',
            'terms'    => 'front-page' 
            ),
        ),
    );

$team = new WP_Query($args); ?>

<?php while($team->have_posts() ) : $team->the_post(); ?>

    <?php get_template_part( 'template-parts/partials/partial', 'team' ); ?>

<?php endwhile; wp_reset_postdata(); ?>