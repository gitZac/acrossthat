<section class="default-content aos-init " data-aos="fade-up" data-aos-delay="500" id="the-content">
    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display')){bcn_display();}?>
        </div>
        <h1 class="default-content__page-title "><?php the_title(); ?></h1>
        <?php while(have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</section>