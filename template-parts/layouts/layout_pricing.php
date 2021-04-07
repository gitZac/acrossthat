<?php 
$section_bg = get_sub_field('section_bg');
$section_title = get_sub_field('section_title');
$section_description = get_sub_field('section_description');
$columns = get_sub_field('cols');
global $section_count; ?>

<section id="section-<?php echo $section_count; ?>" class="pricing">
    <div class="container" data-aos="fade-up">
        <?php if($section_title) : ?>
            <div class="section-title">
                <h2><?php echo $section_title; ?></h2>
                <p><?php echo $section_description; ?></p>
            </div>
        <?php endif; ?>
        <div class="row">
            <?php while(have_rows('pricing_card_group') ) : the_row(); 
                $title = get_sub_field("pricing_title");
                $price = get_sub_field('dollar_amount');
                $pricing_features = get_sub_field('pricing_features'); ?>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing__box">
                        <h3 class="pricing__title"><?php echo $title; ?></h3>
                        <h4 class="pricing__price"><sup>$</sup><?php echo $price; ?></h4>
                        <ul class="pricing__details">
                            <?php echo $pricing_features; ?>
                        </ul>
                        <?php get_template_part( '/template-parts/components/component_button' ); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>