
<?php
$title = get_sub_field('section_title');
$description = get_sub_field('section_description');
$post_type = get_sub_field('post_type');
$section_bg = get_sub_field('section_bg');
$background_class = "section-bg"; ?>

<?php if($post_type == 'team') : ?>
<section class="team <?php if($section_bg) { echo $background_class; } ?>">
    <div class="container">
        <?php if($title) : ?>
        <div class="section-title">
            <h2><?php echo $title; ?></h2>
            <p><?php echo $description; ?></p>
        </div>
        <?php endif; ?>
        <div class="row">
            <?php         
            if(is_home() || is_front_page() ) {
                get_template_part('inc/loop/loop-team_front');
            } else {
                get_template_part('inc/loop/loop-team');
            }
            ?>
        </div>
    </div>
</section>
<?php endif; ?>