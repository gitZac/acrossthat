<?php
/**
 * Template Name: Two-Column Reversible
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AcrossThat
 */

get_header();

$subtitle = get_field('page_subtitle');
?>

<!-- ======= Hero Section ======= -->

<main id="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php get_template_part('/template-parts/modules/hero'); ?>

        <?php get_template_part('/template-parts/layouts/'); ?>

        <?php get_template_part( '/template-parts/modules/switchbox' ); ?>

        <?php get_template_part( '/template-parts/modules/cta'); ?>
    </article><!-- #post-<?php the_ID(); ?> -->
</main><!-- End #main -->

<?php
//get_sidebar();
get_footer();