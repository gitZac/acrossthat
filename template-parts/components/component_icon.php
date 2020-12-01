<?php if(have_rows('icons' ) ) : ?>
    <?php while(have_rows('icons') ) : the_row(); 
            $header = get_sub_field('header');
            $description = get_sub_field('description');
            $icon_class = get_sub_field('select_icon');?>
        <div class="icon-box--float" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="<?php echo $icon_class; ?>"></i></div>
            <?php if($header) : ?>
                <h4 class="title"><a href=""><?php echo $header; ?></a></h4>
            <?php endif; ?>
            <?php if($description) : ?>
                <p class="description"><?php echo $description; ?></p>
            <?php endif; ?>        
        </div>
    <?php endwhile; ?>
<?php endif; ?> 