<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AcrossThat
 */

get_header();
global $section_count;
?>
	<main id="primary" class="site-main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if (acf_activated() && have_rows('block_editor') ) : $section_count = 0; ?>
				<?php while(acf_activated() && have_rows('block_editor') ) : the_row(); ?>
					<?php $layout_type = get_row_layout(); ?>
					<?php get_template_part( 'template-parts/layouts/layout_' . $layout_type ); $section_count++; ?>
				<?php endwhile; ?>
			<?php endif; ?>    
		</article>
	</main>

<?php
// get_sidebar();
get_footer();

