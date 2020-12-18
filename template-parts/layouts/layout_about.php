<?php
    $section_title = get_sub_field('about_section_title');
    $summary = get_sub_field('company_summary');
    $about_image = get_sub_field('about_image');
    $embed_video = get_sub_field('embed_video');
    $video = get_sub_field('video_play_button'); ?>

<section class="about">
    <div class="container box-shadow">
        <div class="row no-gutters">
            <div class="col-lg-6 about__video-box">
                <img src="<?php echo $about_image; ?>" class="img-fluid" alt="">
                <?php if($embed_video == 'yes') : ?>
                    <a href="<?php echo $video; ?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                <?php endif; ?>
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <div class="about__content">
                    <div class="section-title">
                        <h2><?php echo $section_title; ?></h2>
                        <p class="text-left font-italic color-default-light"><?php echo $summary; ?></p>
                    </div>
                    <?php get_template_part('/template-parts/components/component_icon'); ?>
                </div>
            </div>
        </div>
    </div>
</section>