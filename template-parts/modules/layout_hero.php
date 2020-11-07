<?php 
$header = get_sub_field('header');
$subheader = get_sub_field('subheader');
$bg = get_sub_field('background_image');
$intro = get_sub_field('intro');
$bg_color = get_sub_field('background_color');
$style = get_sub_field('style'); 
$height = get_sub_field('height');
$use_breadcrumbs = get_sub_field('use_breadcrumbs');
?>

<?php if($style == 'background_image' ) {  ?>

<section class="hero hero--bg d-flex align-items-center" style="background: url(<?php echo $bg; ?>); height:<?php echo $height; ?>vh; top center no-repeat; background-size: cover;">
    <div class="container hero__content position-relative" data-aos="fade-down" data-aos-delay="500">
        <?php if($use_breadcrumbs == 'yes') : ?>
            <?php get_template_part( 'template-parts/modules/breadcrumbs' ); ?>
        <?php endif; ?>
        <h1 class="header header--super header--light fontw-700"><?php if(!empty($header) ){ echo $header; } else{ the_title( ); }  ?></h1>
        <h2 class="header header--secondary header--light fontw-500"><?php echo $subheader; ?></h2>
    </div>
</section>

<?php } elseif($style == 'plain' ) { ?>

<section class="hero hero--plain aos-init " data-aos="fade-up" data-aos-delay="500" id="the-content">
    <div class="container">
        <?php if($use_breadcrumbs == 'yes') : ?>
            <?php get_template_part( 'template-parts/modules/breadcrumbs' ); ?>
        <?php endif; ?>
        <h1 class="header header--main hero--underline "><?php if(!empty($header) ){ echo $header; } else{ the_title( ); }  ?></h1>
        <?php echo $intro; ?>
    </div>
</section>

<?php } elseif($style == 'two_columns' ) { ?>

<section id="hero" class="hero d-flex align-items-center" style="background:<?php echo $bg_color; ?>; height:<?php echo $height; ?>vh; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1 class="header header--main header--light fontw-700"><?php if(!empty($header) ){ echo $header; } else{ the_title( ); }  ?></h1>
                <h2 class="header header--secondary color-secondary-light"><?php echo $subheader; ?></h2>
                <div class="d-lg-flex">
                    <a href="#about" class="btn--curved scrollto">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn--watch" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="<?php echo get_template_directory_uri(  ) . '/dist/assets/img/hero-img.png'; ?>" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>

<?php } ?>