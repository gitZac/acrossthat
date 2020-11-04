<?php if(have_rows('counterup') ) : ?>

<section class="counts section-bg">
    <div class="container">

        <div class="row">

            <?php while( have_rows('counterup') ) : the_row(); ?>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                    <div class="count-box">
                        <i class="<?php the_sub_field('counter_block_icon'); ?>" style="color: <?php the_sub_field('counter_block_color'); ?>"></i>
                        <span data-toggle="counter-up"><?php the_sub_field('counter_block_number') ?></span>
                        <p><?php the_sub_field('counter_block_title'); ?></p>
                    </div>
                </div>

            <?php endwhile; ?>

        </div>

    </div>
</section>

<?php endif; ?>