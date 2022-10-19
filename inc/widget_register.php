<?php
function limmex_theme_widget_register()
{
  //Groco App Title Widget
  register_sidebar(array(
    'name' => esc_html__('Groco App Title widget', 'limmex'),
    'id' => 'groco_app_title',
    'description' => esc_html__('Appears in the Groco App section', 'limmex'),
    'pages' => 'limmex',
    'before_widget' => '<div class="groco_app_titile">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
  ));

  //Groco App Sub Title Widget
  register_sidebar(array(
    'name' => esc_html__('Groco App Feature Title widget', 'limmex'),
    'id' => 'groco_app_featue_title',
    'description' => esc_html__('Appears in the Groco App section', 'limmex'),
    'pages' => 'limmex',
    'before_widget' => '<div class="groco_feature_title">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
  ));

  //Groco App Feature left side Widget
  register_sidebar(array(
    'name' => esc_html__('Groco App featue left widget', 'limmex'),
    'id' => 'groco_app_featue_left',
    'description' => esc_html__('Appears in the Groco App feature left section', 'limmex'),
    'pages' => 'limmex',
    'before_widget' => '<div class="list-style-one mt20 float-l w50 w-m-100">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  ));

  //Groco App Feature Right side Widget
  register_sidebar(array(
    'name' => esc_html__('Groco App featue Right widget', 'limmex'),
    'id' => 'groco_app_featue_right',
    'description' => esc_html__('Appears in the Groco App feature right section', 'limmex'),
    'pages' => 'limmex',
    'before_widget' => '<div class="list-style-one float-l w50 w-m-100">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  ));

  //Tools & Technology Title Widget
  register_sidebar(array(
    'name' => esc_html__('Tools and Technology Title widget', 'limmex'),
    'id' => 'tools_tech_title',
    'description' => esc_html__('Appears in Tools and Technology Title section', 'limmex'),
    'pages' => 'limmex',
    'before_widget' => '<div class="tools_tech">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
  ));

  //Tools & Technology Sub Title Widget
  register_sidebar(array(
    'name' => esc_html__('Tools and Technology Sub Title widget', 'limmex'),
    'id' => 'tools_tech_sub_title',
    'description' => esc_html__('Appears in Tools and Technology Title section', 'limmex'),
    'pages' => 'limmex',
    'before_widget' => '<div class="tools_thech_subtitle">',
    'after_widget' => '</div>',
    'before_title' => '<p>',
    'after_title' => '</p>'
  ));

  //Country & Client Title Widget
  register_sidebar(array(
    'name' => esc_html__('Country and Client Title widget', 'limmex'),
    'id' => 'country_client_title',
    'description' => esc_html__('Appears in Country and Client section', 'limmex'),
    'pages' => 'limmex',
    'before_widget' => '<div class="country_client_title">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
  ));

  //Country & Client Sub Title Widget
  register_sidebar(array(
    'name' => esc_html__('Country and Client Sub Title widget', 'limmex'),
    'id' => 'country_clinet_sub_title',
    'description' => esc_html__('Appears in Country and Client section', 'limmex'),
    'pages' => 'limmex',
    'before_widget' => '<div class="country_clinet_sub_title">',
    'after_widget' => '</div>',
    'before_title' => '<p>',
    'after_title' => '</p>'
  ));

  //Footer Top Left Title Widget
  register_sidebar(array(
    'name' => esc_html__('Footer Top Left Title widget', 'limmex'),
    'id' => 'footer_top_left_title',
    'description' => esc_html__('Appears in the Footer Top Left section', 'limmex'),
    'pages' => 'limmex',
    'before_widget' => '<div class="footer_top_left_titile">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  ));

    //Footer Top Right Title Widget
    register_sidebar(array(
      'name' => esc_html__('Footer Top Right Title widget', 'limmex'),
      'id' => 'footer_top_right_title',
      'description' => esc_html__('Appears in the Footer Top Right section', 'limmex'),
      'pages' => 'limmex',
      'before_widget' => '<div class="footer_top_right_titile">',
      'after_widget' => '</div>',
      'before_title' => '<h4>',
      'after_title' => '</h4>'
    ));

    //Footer Top Right Service List Widget
    register_sidebar(array(
      'name' => esc_html__('Footer Top Right Service List widget', 'limmex'),
      'id' => 'footer_top_right_services',
      'description' => esc_html__('Appears in the Footer Top Right section', 'limmex'),
      'pages' => 'limmex',
      'before_widget' => '<div class="footer_top_right_services_list">',
      'after_widget' => '</div>',
      'before_title' => '<li>',
      'after_title' => '</li>'
    ));

}
add_action('widgets_init', 'limmex_theme_widget_register');
