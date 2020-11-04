<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AcrossThat
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php get_template_part('template-parts/modules/hero'); ?>
	<section class="entry-content" id="the-content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->