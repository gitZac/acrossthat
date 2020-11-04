<?php if(get_post_thumbnail_id( $post->ID )) {
    $subtitle = get_field('page_subtitle');?>
    <section id="hero-page" class="hero--half d-flex align-items-center" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>) top center no-repeat; background-size: cover;
    ">
        <div class="container hero--half__content position-relative" data-aos="fade-down" data-aos-delay="500">
            <div class="breadcrumbs breadcrumbs--white" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display')){bcn_display();}?>
            </div>
            <h1 class="hero--half__title"><?php the_title(); ?></h1>
            <h2 class="hero--half__subtitle"><?php echo $subtitle; ?></h2>
        </div>
    </section><!-- End Hero -->
    
    <section class="entry-content" id="the-content">
        <div class="container" data-aos="fade-up" data-aos-delay="500">
            <?php while(have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
    </section>

<?php } else { ?>

    <?php get_template_part( '/template-parts/modules/default-content'); ?>

<?php } ?>