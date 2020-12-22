<header id="header" class=" main-nav--trans fixed-top">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <?php the_custom_logo();?>
      </div>

      <nav class="nav-menu d-none d-lg-block">
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
