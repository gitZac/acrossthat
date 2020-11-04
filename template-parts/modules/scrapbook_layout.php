<?php
    $section_bg = get_sub_field('section_bg');
    $section_title = get_sub_field('section_title_hb');
    $cols = get_sub_field('col'); ?>

<section class="scrapbook <?php if($section_bg) { echo $section_bg; } ?>">
    <div class="scrapbook__inner">
        <div class="container-fluid">
        <?php if($section_title) : ?>
            <div class="section-title">
                <h2><?php echo $section_title; ?></h2>
            </div>
        <?php endif; ?>
            <div class="row">
            <?php while(have_rows('hover_box_group') ) : the_row();
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $bg_image = get_sub_field('background_image');
                $logo_image = get_sub_field('logo_image');
                $link_text = get_sub_field('link_text');
                $link_url = get_sub_field('link_url'); ?>
                <div class="col-lg-<?php echo $cols; ?> col-sm-12 pad-none">
                    <a href="<?php echo $link_url; ?>" class="scrapbook__link">
                        <div class="scrapbook__card" style="background-image:url(<?php echo $bg_image; ?>);">
                        <div class="scrapbook__shade"></div>
                            <div class="scrapbook__card-inner">
                                <div class="scrapbook__logo pad-all-1 grow animate--fast">
                                    <img src="<?php echo $logo_image; ?>" alt="">
                                </div>
                                <div class="abs-wrapper abs-wrapper--center fade-in animate--fast">
                                    <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                                    <p class="scrapbook__read-more"><?php echo $link_text; ?></p>
                                </div>
                                <div class="abs-wrapper abs-wrapper--title-center abs-wrapper--center-bottom pad-tb-1">
                                    <h2 class="animate--fast  scrapbook__title title scrapbook__title--prorehab"><?php echo $title; ?></h2>
                                    <p class="scrapbook__location animate--fast fade-in zoom-in--left subtitle is-4"><?php echo $description; ?></p>
                                </div>
                            </div>
                        </div> 
                    </a>
                </div>
            <?php endwhile; ?> 
            </div>
        </div>
    </div>

</section>