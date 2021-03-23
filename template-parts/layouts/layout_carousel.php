<?php 
global $section_count; ?>
<section id="section-<?php echo $section_count; ?>" class="carousel">
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
                                <h2 class="header header--main header--light animated fadeInDown fontw-700"><?php echo $headline;?></h2>
                                <p class="animated fadeInUp"><?php echo $slide_description; ?></p>
                                <?php get_template_part( '/template-parts/components/component_button' ); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div> 
            <?php get_template_part('/template-parts/partials/carousel/carousel', 'controls'); ?>
        </div>
    <?php endif; ?>
</section>