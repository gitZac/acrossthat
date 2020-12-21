<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AcrossThat
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" style="display:none;" href="#primary"><?php esc_html_e( 'Skip to content', 'ax_' ); ?></a>
  <?php get_template_part('template-parts/partials/header/navigation/navigation', 'topbar'); ?>

  <header class="main-nav--default" id="header">
    <div class="container">
      <div class="logo float-left">
        <?php the_custom_logo();?>
      </div>
      <nav class="nav-menu float-right d-none d-lg-block">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
              'container'		=> 'false',
            )
          ); ?>
      </nav>
    </div>
  </header>