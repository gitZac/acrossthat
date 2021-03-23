<?php
$section_bg = get_sub_field('section_bg');
$section_title = get_sub_field('section_title');
$section_description = get_sub_field('section_description'); 
global $section_count;?>

<?php if(have_rows('box_group') ) : ?>
    <section id="section-<?php echo $section_count; ?>" class="boxes <?php if($section_bg == 'yes') { echo 'section-bg'; } ?>">
        <div class="container">
    <?php if($section_title) : ?>
        <div class="section-title">
            <h2><?php echo $section_title; ?></h2>
            <p><?php echo $section_description; ?></p>
        </div>
    <?php endif; ?>
        <?php while(have_rows('box_group') ) : the_row(); 
            $title = get_sub_field('box_title');
            $intro = get_sub_field('box_intro_text');
            $content = get_sub_field('box_content');
            $flipColumns = get_sub_field('flip_columns');
            $image = get_sub_field('box_image');
            $col = get_sub_field('column_width');?>
            <div class="row <?php echo $flipColumns; ?> boxes__wrapper">
                <?php if($image) : ?>
                    <div class="boxes__image col-lg-<?php echo $col; ?> order-1 order-lg-2 aos-init aos-animate" data-aos="fade-left">
                        <img src="<?php echo $image; ?>" class="img-fluid" alt="">
                    </div>
                <?php endif; ?>
                <div class="boxes__content col-lg-<?php echo $col; ?>  pt-4 pt-lg-0 order-2 order-lg-1 content aos-init aos-animate" data-aos="fade-right">
                    <h2><?php echo $title; ?></h2>
                    <?php if($intro) : ?>
                        <p class="font-italic"><?php echo $intro;?></p>
                    <?php endif; ?>
                    <p><?php echo $content ?></p>
                    <?php get_template_part( '/template-parts/components/component_button' ); ?>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>