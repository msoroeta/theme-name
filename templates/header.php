<header class="banner bottomMenu">
  <div class="container">
    <div class="brandnav">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="http://127.0.0.1/wordpress/wp-content/uploads/2015/12/sugarcrmLogoBlackBackground_RGB.png"></a>
      <nav class="nav-primary">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
      </nav>
      <div class="navsearch">
          <?php get_search_form(); ?>
        </div>
    </div>
      <div id="redline"><p> </p>
    </div>
  </div>


</header>
