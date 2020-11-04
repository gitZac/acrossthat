<?php $team_members = get_posts(['post_type' => 'team']); ?>

<?php if($team_members) : 
  $section_bg = get_sub_field('section_bg');?>
  <section id="team" class="team <?php if($section_bg) { echo $section_bg; } ?>">
    <div class="container">
      <div class="section-title">
        <h2>Our Team<?php //the_field('team_section_title'); ?></h2>
        <p><?php //the_field('team_intro'); ?></p>
      </div>
      <div class="row">
        <?php         
          if(is_home() || is_front_page() ) {
            get_template_part('template-parts/loop/loop-team_front'); 
          } else {
            get_template_part('template-parts/loop/loop-team');
          }
        ?>
      </div>
    </div>
  </section>
<?php endif; ?>