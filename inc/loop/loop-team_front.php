<?php $args = array(
    'post_type' => 'team',							
    'posts_per_page' => -1,							
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'location',
            'field'    => 'slug',
            'terms'    => 'front-page' 
            ),
        ),
    );

$team = new WP_Query($args); ?>

<?php while($team->have_posts() ) : $team->the_post();
    $image = get_field('team_bio_image');
    $title = get_field('team_member_title');
    $email = get_field('team_member_email');?>

    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
        <div class="member">
            <div class="pic"><img src="<?php echo $image; ?> " class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4><?php the_title(); ?></h4>
                <span><?php echo $title; ?></span>
                <div class="social">
                    <a href="mailto:<?php echo $email; ?>"><i class="icofont-email"></i><?php echo $email; ?></a>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; wp_reset_postdata(); ?>