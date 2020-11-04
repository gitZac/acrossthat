<section class="entry-content entry-content--no-hero" id="the-content">
    <div class="container" data-aos="fade-up" data-aos-delay="500">
        <h1 class="entry-content--no-hero__page-title"><?php the_title(); ?></h1>
        <?php while(have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</section>