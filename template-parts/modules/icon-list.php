<?php if (have_rows('services') ) : ?>
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2><?php the_field('services_section_title'); ?></h2>
            </div>

            <div class="row">
                <?php while( have_rows('services') ) : the_row(); ?>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="<?php the_sub_field('service_icon'); ?>"></i></div>
                        <h4 class="title"><a href=""><?php the_sub_field('service_name'); ?></a></h4>
                        <p class="description"><?php the_sub_field('service_description'); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>

        </div>
    </section>

<?php endif; ?> 