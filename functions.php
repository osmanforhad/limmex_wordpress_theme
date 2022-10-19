<?php
require get_template_directory()."/inc/enqueue.php";
require get_template_directory()."/inc/menu_register.php";
require get_template_directory()."/inc/theme-setup.php";
require get_template_directory()."/inc/theme-customizer.php";
require get_template_directory()."/inc/custom_posts.php";
require get_template_directory()."/inc/widget_register.php";

//function for Implement Theme Color in the frontend section
function limmex_theme_color_impl()
{
?>
  <style>
    body {
      background-color: <?php echo get_theme_mod('limmex_theme_bg_color'); ?>
    }
  </style>
<?php
}
add_action('wp_head', 'limmex_theme_color_impl');