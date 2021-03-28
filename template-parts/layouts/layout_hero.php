<?php 
$header = get_sub_field('header');
$subheader = get_sub_field('subheader');
$bg = get_sub_field('background_image');
$image = get_sub_field('image');
$floating = get_sub_field('floating_animation');
$intro = get_sub_field('intro');
$bg_color = get_sub_field('background_color');
$style = get_sub_field('style'); 
$height = get_sub_field('height');
$use_breadcrumbs = get_sub_field('use_breadcrumbs'); 
$header_font_color = get_sub_field('header_font_color');
$subheader_font_color = get_sub_field('subheader_font_color');
$intro_font_color = get_sub_field('intro_font_color');
$clip_path = get_sub_field('clip_path');
global $section_count; ?>

<?php if($style == 'background_image' ) {  ?>

<section id="section-<?php echo $section_count; ?>" class="hero hero--bg d-flex align-items-center" style="background: url(<?php echo $bg; ?>); height:<?php echo $height; ?>vh; top center no-repeat; background-size: cover;">
    <div class="container hero__content position-relative" data-aos="fade-down" data-aos-delay="500">
        <?php if($use_breadcrumbs == 'yes') : ?>
            <?php get_template_part( 'template-parts/modules/breadcrumbs' ); ?>
        <?php endif; ?>
        <h1 class="header header--main header--light fontw-700"><?php if(!empty($header) ){ echo $header; } else{ the_title( ); }  ?></h1>
        <h2 class="header header--secondary header--light fontw-500"><?php echo $subheader; ?></h2>
        <?php get_template_part( '/template-parts/components/component_button' ); ?>
    </div>
</section>

<?php } elseif($style == 'plain' ) { ?>

<section id="section-<?php echo $section_count; ?>" class="hero hero--plain aos-init " data-aos="fade-up" data-aos-delay="500" id="the-content">
    <div class="container">
        <?php if($use_breadcrumbs == 'yes') : ?>
            <?php get_template_part( 'template-parts/modules/breadcrumbs' ); ?>
        <?php endif; ?>
        <h1 class="header header--main hero--underline"><?php if(!empty($header) ){ echo $header; } else{ the_title( ); }  ?></h1>
        <?php echo $intro; ?>
        <?php get_template_part( '/template-parts/components/component_button' ); ?>
    </div>
</section>

<?php } elseif($style == 'two_columns' ) { ?>

<section id="section-<?php echo $section_count; ?>" class="hero hero--clip-<?php echo $clip_path; ?> hero--two-col d-flex align-items-center" style="background:<?php echo $bg_color; ?>;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <div class="hero__content">
                    <h1 <?php if($header_font_color) : ?> style="color: <?php echo $header_font_color; endif; ?>" class="header header--main header--light fontw-700"><?php if(!empty($header) ){ echo $header; } else{ the_title( ); }  ?></h1>
                    <?php if($subheader) :  ?>
                        <h2 <?php if($subheader_font_color) : ?> style="color: <?php echo $subheader_font_color; endif; ?>" class="header header--secondary header--light header--font-secondary"><?php echo $subheader; ?></h2>
                    <?php endif; ?>
                    <?php if($intro) : ?>
                    <div  class="hero__intro">
                        <p <?php if($intro_font_color) : ?> style="color: <?php echo $intro_font_color; endif; ?>"><?php echo $intro;?></p>
                    </div>
                    <?php endif; ?>
                    <div class="hero__button-wrapper">
                        <?php get_template_part( '/template-parts/components/component_button' ); ?>
                    </div>
                </div>
            </div>
            <div class="hero__image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="200">
                <img src="<?php if($image) {echo $image;} else{ echo get_template_directory_uri(  ) . '/dist/assets/img/hero-img.png'; } ?>" class="img-fluid <?php if($floating == 'enabled') {echo 'animate--infinite';} ?>  " alt="">
            </div>
        </div>
    </div>
</section>

<?php } ?>