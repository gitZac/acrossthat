<?php
    $section_title = get_sub_field('section_title');
    $section_description = get_sub_field('section_description');
    $section_bg = get_sub_field('section_background'); ?>
<section class="icon-list <?php if($section_bg == 'yes') { echo 'section-bg'; } ?>">
    <div class="container">
        <?php if ($section_title) : ?>
        <div class="section-title">
            <h2><?php echo $section_title; ?></h2>
            <p><?php echo $section_description; ?></p>
        </div>
        <?php endif; ?>
        <div class="row">
            <?php while( have_rows('icons') ) : the_row(); 
                $title = get_sub_field('icon_title');
                $description = get_sub_field('icon_description');
                $icon = get_sub_field('icon'); ?>
                <div class="icon-box col-lg-4 col-md-6 " data-aos="fade-up">
                    <div class="icon"><i class="<?php echo $icon ?>"></i></div>
                    <h4 class="header header--fourth header--linked header--divider fontw-600"><a href=""><?php echo $title; ?></a></h4>
                    <p><?php echo $description; ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>