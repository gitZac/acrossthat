


<?php if(have_rows('icons' ) ) : 
    $header = get_sub_field('header');
    $description = get_sub_field('description');
    $icon = get_sub_field('select_icon'); ?>
<div class="icons">
    <div class="icon"><i class="bx <?php echo $icon_class1; ?>"></i></div>

</div>

<?php endif; ?>