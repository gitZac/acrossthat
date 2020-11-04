<section id="hero">
    <div class="hero-container">
        <?php if(have_rows('carousel') ) : ?>
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <?php $i = 0; ?>
                    <?php while(have_rows('carousel') ) : the_row();
                        $headline = get_sub_field('headline');
                        $slide_description = get_sub_field('slide_description');
                        $button_link = get_sub_field('button_link');
                        $slide_button_text = get_sub_field('slide_button_text'); 
                        $bg_image = get_sub_field('background_image'); ?>

                        <div class="carousel-item <?php echo $i==0 ? 'active' : ''; $i++; ?>" style="background-image: url(<?php echo $bg_image; ?>);">
                            <div class="carousel-container">
                                <div class="carousel-content container">
                                <h2 class="animated fadeInDown"><?php echo $headline;?></h2>
                                <p class="animated fadeInUp"><?php echo $slide_description; ?></p>
                                <a href="<?php echo $button_link; ?>" class="btn-get-started animated fadeInUp scrollto"><?php echo $slide_button_text; ?></a>
                                </div>
                            </div>
                        </div>

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
        <?php endif; ?>
    </div> <!-- End Hero  Container-->
</section><!-- End Hero -->