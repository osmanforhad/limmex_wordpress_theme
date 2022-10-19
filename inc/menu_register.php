<?php
//Menu Register function
function limmex_theme_menu_setup()
{

  register_nav_menus(array(
    'primary-menu' => esc_html__('Primary Menu', 'limmex'),
  ));

  register_nav_menus(array(
    'footer-menu' => esc_html__('Footer Menu', 'limmex'),
  ));
  
}
add_action('after_setup_theme', 'limmex_theme_menu_setup');