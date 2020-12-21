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