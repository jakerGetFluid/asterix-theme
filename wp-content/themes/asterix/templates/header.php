<header>
  <div class="top-bar" id="top-menu">
    <div class="top-bar-left">
        <ul class="menu">
          <li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></li>
        </ul>
    </div>
    <div class="top-bar-right">
      <button class="menu-icon hide-for-medium" type="button" data-toggle="inCanvasExample"></button>
      <ul class="dropdown menu off-canvas in-canvas-for-medium position-right" id="inCanvasExample" data-dropdown-menu data-off-canvas>
        <?php if (has_nav_menu('primary_navigation')) :?>
          <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => '', 'items_wrap' => '%3$s', 'walker' => new Roots\Sage\Extras\Foundation_Nav_Menu()]);?>
        <?php endif;?>
      </ul>
    </div>
  </div>
</header>
