<?php 
$header = get_sub_field('header');
$subheader = get_sub_field('subheader');
$bg = get_sub_field('background_image');
$intro = get_sub_field('intro');
$style = get_sub_field('style'); ?>

<?php if($style == 'background_image' ) {  ?>

<section id="" class="hero--half d-flex align-items-center" style="background: url(<?php echo $bg; ?>) top center no-repeat; background-size: cover;">
    <div class="container hero--half__content position-relative" data-aos="fade-down" data-aos-delay="500">
        <div class="breadcrumbs breadcrumbs--white" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display')){bcn_display();}?>
        </div>
        <h1 class="hero--half__title"><?php if(!empty($header) ){ echo $header; } else{ the_title( ); }  ?></h1>
        <h2 class="hero--half__subtitle"><?php echo $subheader; ?></h2>
    </div>
</section>

<?php } elseif($style == 'plain' ) { ?>

<section class="default-content aos-init " data-aos="fade-up" data-aos-delay="500" id="the-content">
    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display')){bcn_display();}?>
        </div>
        <h1 class="default-content__page-title "><?php if(!empty($header) ){ echo $header; } else{ the_title( ); }  ?></h1>
        <?php echo $intro; ?>
    </div>
</section>

<?php } elseif($style == 'two_columns' ) { ?>

    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Better Solutions For Your Business</h1>
                <!-- <h2>We are team of talanted designers making websites with Bootstrap</h2> -->
                <div class="d-lg-flex">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
                </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?php echo get_template_directory_uri(  ) . '/dist/assets/img/hero-img.png'; ?>" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>

<?php } ?>