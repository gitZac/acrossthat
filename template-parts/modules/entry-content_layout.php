<?php
$section_bg = get_sub_field('section_bg');?>

<section class="entry-content entry-content--no-hero <?php if($section_bg) { echo $section_bg; } ?>" id="the-content">
    <div class="container" data-aos="fade-up" data-aos-delay="500">
        <?php the_sub_field('content'); ?>
    </div>
</section>