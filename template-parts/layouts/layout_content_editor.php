<?php
$section_bg = get_sub_field('section_bg');
$section_title = get_sub_field('section_title');
$section_description = get_sub_field('section_description'); 
$content = get_sub_field('custom_content'); ?>

<section class="entry-content entry-content--no-hero <?php if($section_bg) { echo $section_bg; } ?>">
    <div class="container" data-aos="fade-up" data-aos-delay="500">
        <?php if ($section_title) : ?>
        <div class="section-title">
            <h2><?php echo $section_title; ?></h2>
            <p><?php echo $section_description; ?></p>
        </div>
        <?php endif; ?>
        <?php echo $content; ?>
        <?php get_template_part( '/template-parts/components/component_button' ); ?>
    </div>
</section>