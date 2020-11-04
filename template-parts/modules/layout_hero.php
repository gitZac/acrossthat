<?php 
$header = get_sub_field('header');
$subheader = get_sub_field('subheader');
$bg = get_sub_field('background_image');
$intro = get_sub_field('intro');
$style = get_sub_field('style'); ?>

<?php if($style == 'use_bg' ) {  ?>

<section id="" class="hero--half d-flex align-items-center" style="background: url(<?php echo $bg; ?>) top center no-repeat; background-size: cover;">
    <div class="container hero--half__content position-relative" data-aos="fade-down" data-aos-delay="500">
        <div class="breadcrumbs breadcrumbs--white" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display')){bcn_display();}?>
        </div>
        <h1 class="hero--half__title"><?php if(!empty($header) ){ echo $header; } else{ the_title( ); }  ?></h1>
        <h2 class="hero--half__subtitle"><?php echo $subheader; ?></h2>
    </div>
</section>

<?php } else {   ?>

<section class="default-content aos-init " data-aos="fade-up" data-aos-delay="500" id="the-content">
    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display')){bcn_display();}?>
        </div>
        <h1 class="default-content__page-title "><?php if(!empty($header) ){ echo $header; } else{ the_title( ); }  ?></h1>
        <?php echo $intro; ?>
    </div>
</section>

<?php } ?>