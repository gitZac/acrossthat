<?php
/**
 * Template Name: Custom Front Page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AcrossThat
 */

get_header();
?>

<!-- ======= Hero Section ======= -->
<?php get_template_part( '/template-parts/modules/carousel' ); ?>

<main id="main">
    <!-- ======= Hero Section ======= -->
    <?php get_template_part( '/template-parts/modules/about-feature' ); ?>
    <!-- ======= Process Section ======= -->
    <?php get_template_part('/template-parts/modules/process'); ?>
    <!-- ======= Counts Section ======= -->
    <?php get_template_part('/template-parts/modules/counterup'); ?>
    <!-- ======= Services Section ======= -->
    <?php get_template_part('/template-parts/modules/icon-list'); ?>
    <!-- ======= Team Section ======= -->
    <?php get_template_part('/template-parts/modules/team'); ?>
    <!-- ======= FAQ Section ======= -->
    <?php get_template_part('/template-parts/modules/faq'); ?>
    <!-- ======= Contact Section ======= -->
    <?php get_template_part('/template-parts/modules/contact'); ?>
</main><!-- End #main -->

<?php
//get_sidebar();
get_footer();