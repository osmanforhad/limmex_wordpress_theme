<?php
function limmex_theme_setup()
{
  //Language Support By Theme text Domain
  load_theme_textdomain('limmex', get_template_directory() . '/languages');

  /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
  add_theme_support('title-tag');

  /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails', array('page', 'post', 'product', 'ourservices', 'portfolio', 'team', 'tools_tech', 'country_client', 'testimonial', 'partner'));

  //setup image sizes
  add_image_size('post-thumbnails', 970, 350, true);
  add_image_size('product', 970, 350);
  add_image_size('ourservices', 970, 350);
  add_image_size('portfolio', 970, 350);

  //post format support
  add_theme_support("post-formats", array("image", "quote", "video", "audio", "link"));

  // Add default posts and comments RSS feed links to head.
  add_theme_support('automatic-feed-links');

  //resposive support
  add_theme_support('responsive-embeds');

  /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 * to output valid HTML5.
		 */
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'limmex_theme_setup');
