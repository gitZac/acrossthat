<?php
$section_bg = get_sub_field('section_bg');
$section_title = get_sub_field('section_title');
$section_description = get_sub_field('section_description');
$columns = get_sub_field('cols');
global $section_count; ?>

<section id="section-<?php echo $section_count; ?>" class="axcards <?php if($section_bg == 'yes') { echo 'section-bg'; } ?>">
    <div class="axcards__wrapper">
        <div class="container-fluid">
        <?php if($section_title) : ?>
            <div class="section-title">
                <h2><?php echo $section_title; ?></h2>
                <p><?php echo $section_description; ?></p>
            </div>
        <?php endif; ?>
            <div class="row ">
                <?php while(have_rows('card_group') ) : the_row(); 
                    $shade_color = get_sub_field('background_shade_color');
                    $background_image = get_sub_field('background_image');
                    $link_text = get_sub_field('link_text');
                    $link_url = get_sub_field('link_url');
                    $description = get_sub_field('card_description');
                    $title = get_sub_field('card_title');
                     ?>
                <div class="col-md-12 col-lg-<?php echo $columns; ?> pad-all-halfrem">
                    <div style="background-image:url(<?php echo $background_image; ?>);" class="axcard">
                        <div class="axcard__content">
                            <h2 class="axcard__title color-fade"><?php echo $title; ?></h2>
                            <p class="axcard__description"><?php echo $description; ?></p>
                            <a href="<?php echo $link_url; ?>" class="axcard__link"><?php echo $link_text; ?><i class="icofont-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>