<?php

//script for setup assets version dynamically to prevent casshing issue
if (site_url() == "http://localhost/practice") {
  define("VERSION", time());
} else {
  define("VERSION", wp_get_theme()->get("Version"));
}

/**
 * All assets file loading function
 */
function limmex_assets()
{
  //loading css files
  wp_enqueue_style("bootstrap", get_theme_file_uri("assets/css/bootstrap.min.css"));
  wp_enqueue_style("setting", get_theme_file_uri("assets/css/setting.css"));
  wp_enqueue_style("responsive", get_theme_file_uri("assets/css/responsive.css"));
  wp_enqueue_style("template_style", get_theme_file_uri("assets/css/style.css"));
  wp_enqueue_style("icofont", get_theme_file_uri("assets/fonts/icofont.css"));
  wp_enqueue_style("template_style_plugin", get_theme_file_uri("assets/css/plugin.css"));
  wp_enqueue_style("limmex", get_stylesheet_uri(), null, VERSION);

  //loading js files
  wp_enqueue_script("modernizr", get_theme_file_uri("assets/js/modernizr-2.8.3.min.js"), array("jquery"), null, true);
  wp_enqueue_script("jquery_min", get_theme_file_uri("assets/js/jquery-3.5.1.min.js"), array("jquery"), null, true);
  wp_enqueue_script("popper_min", get_theme_file_uri("assets/js/popper.min.js"), array("jquery"), null, true);
  wp_enqueue_script("bootstrap", get_theme_file_uri("assets/js/bootstrap.min.js"), array("jquery"), null, true);
  wp_enqueue_script("imageloaded", get_theme_file_uri("assets/js/imagesloaded.js"), array("jquery"), null, true);
  wp_enqueue_script("tmeplate_plugin", get_theme_file_uri("assets/js/plugin.js"), array("jquery"), null, true);
  wp_enqueue_script("main", get_theme_file_uri("assets/js/main.js"), array("jquery"), VERSION, true);
  wp_enqueue_script("jquery");
}
add_action("wp_enqueue_scripts", "limmex_assets");
