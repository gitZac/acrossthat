<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package AcrossThat
 */

get_header();
?>

	<main id="primary" class="site-main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container">
				<?php if ( have_posts() ) : ?>

				<section class="page-header">
					<header sty class="page-header">
						<h1 style="text-align:center; padding-bottom:20px;" class="page-title"> Search AcrossThat </h1>
						<?php get_search_form( ); ?>
					</header>
				</section>

				<section class="results pad-tb-1">
					<h3 class="header header--fourth text-center"><?php printf( esc_html__( 'Search Results for: %s', 'ax_' ), '<span>' . get_search_query() . '</span>' );?></h3>
					<?php
					while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'search' );
					endwhile;
						the_posts_navigation();
					else :
							get_template_part( 'template-parts/content', 'none' );
					endif; ?>
				</section>

			</div>
		</article>

	</main>

<?php
// get_sidebar();
get_footer();
