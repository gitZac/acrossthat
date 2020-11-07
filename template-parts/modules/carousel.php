<?php $args = array(
    'post_type' => 'fp_carousel',							
    'posts_per_page' => -1,							
    'orderby' => 'date',
    'order' => 'DESC'
);

$carousel = new WP_Query($args);
?>

<section id="hero">
    <div class="hero-container">
        <?php if($carousel->have_posts( ) ) { ?>
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    <?php while($carousel->have_posts(  ) ) : $carousel->the_post(); $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full' );?>
                        <!-- SLIDE -->
                        <div class="carousel-item <?php echo $carousel->current_post >= 1 ? '' : 'active'; ?>" style="background-image: url(<?php echo $thumbnail['0']; ?>);">
                            <div class="carousel-container">
                                <div class="carousel-content container">
                                <h2 class="animated fadeInDown"><?php the_title(); ?></h2>
                                <p class="animated fadeInUp"><?php the_field('slide_description'); ?></p>
                                <a href="<?php the_field('slide_button_link'); ?>" class="btn--rect animated fadeInUp scrollto"><?php the_field('slide_button_text'); ?></a>
                                </div>
                            </div>
                        </div>
                        <!-- END SLIDE -->
                    <?php endwhile; ?>
                </div> <!-- End Carousel Inner-->

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div> <!-- End Carousel Outer-->
        <?php } else { 
            get_template_part( 'template-parts/content-none' );
        } wp_reset_postdata(); ?>
    </div> <!-- End Hero Container-->
</section><!-- End Hero -->