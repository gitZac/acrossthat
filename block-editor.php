<?php
/**
 * Template Name: Block Editor
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AcrossThat
 */

get_header();?>

<main id="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php //if($header_active == 'enable') { get_template_part('/template-parts/modules/hero'); } ?>
        <?php get_template_part('/template-parts/layouts/main'); ?>
    </article><!-- #post-<?php the_ID(); ?> -->
</main><!-- End #main -->

<?php
//get_sidebar();
get_footer();