<?php
$title = get_sub_field('cta_title');
$image = get_sub_field('cta_image');
$content = get_sub_field('cta_content');
$button_text = get_sub_field('cta_button_text');
$button_link = get_sub_field('cta_button_link');?>

<?php if(!empty($title) ) : ?>
    <section class="switchbox">
        <div class="container">
            <div class="row row-reverse switchbox__container">
            <?php if($image) : ?>
                <div class="switchbox__image col-lg-6 order-1 order-lg-2 aos-init aos-animate" data-aos="fade-left">
                    <img src="<?php echo $image; ?>" class="img-fluid" alt="">
                </div>
            <?php endif; ?>
                <div class="switchbox__content col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content aos-init aos-animate alignself-c" data-aos="fade-right">
                    <h3 class="switchbox__column-title"><?php echo $title; ?></h3>
                    <p class="switchbox__cta-text"><?php echo $content; ?></p>
                    <a href="<?php echo $button_link; ?>" class="btn-get-started animated fadeInUp scrollto"><?php echo $button_text; ?></a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>