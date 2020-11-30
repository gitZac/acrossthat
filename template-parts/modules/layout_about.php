<!-- ======= About Us Section ======= -->
<?php
    $section_title = get_sub_field('about_section_title');
    $summary = get_sub_field('company_summary');
    $about_image = get_sub_field('about_image');
    $icon_title1 = get_sub_field('icon_box_1_title');
    $icon_title2 = get_sub_field('icon_box_2_title');
    $icon_text1 = get_sub_field('icon_box_1_text');
    $icon_text2 = get_sub_field('icon_box_2_text');
    $icon_class1 = get_sub_field('icon_box_1_icon');
    $icon_class2 = get_sub_field('icon_box_2_icon');
?>

<section id="about" class="about">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 video-box">
                <img src="<?php echo $about_image; ?>" class="img-fluid" alt="">
                <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                <div class="section-title">
                    <h2><?php echo $section_title; ?></h2>
                    <p><?php echo $summary; ?></p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx <?php echo $icon_class1; ?>"></i></div>
                    <h4 class="title"><a href=""><?php echo $icon_title1; ?></a></h4>
                    <p class="description"><?php echo $icon_text1; ?></p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx <?php echo $icon_class2; ?>"></i></div>
                    <h4 class="title"><a href=""><?php echo $icon_title2 ?></a></h4>
                    <p class="description"><?php echo $icon_text2; ?></p>
                </div>
                <?php get_template_part('/template-parts/components/component_icon'); ?>
            </div>
        </div>
    </div>
</section><!-- End About Us Section -->
