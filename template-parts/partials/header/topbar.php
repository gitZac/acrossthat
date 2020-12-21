<section class="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
        <i class="topbar__icon icofont-address-book"></i> <?php the_field('address', 'option'); ?>
        <i class="topbar__icon icofont-envelope"></i><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
        <i class="topbar__icon icofont-phone"></i><?php the_field('phone', 'option'); ?>
        </div>
        <div class="social-links float-right">
        <?php get_template_part('/inc/loop/loop-options'); ?>
        </div>
    </div>
</section>