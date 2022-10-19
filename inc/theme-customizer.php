<?php
function limmex_theme_customize($wp_customize)
{

  //Site Identity
  $wp_customize->add_setting('limmex_theme_logo_title', array(
    'default' => true,
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'limmex_theme_logo_title', array(
    'label'          => esc_html__('Enable Disable Title', 'limmex'),
    'section'        => 'title_tagline',
    'settings'       => 'limmex_theme_logo_title',
    'type'           => 'checkbox',
  )));

  $wp_customize->add_setting('limmex_theme_logo_text', array(
    'default' => true,
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'limmex_theme_logo_text', array(
    'label'          => esc_html__('Enable Disable Tagline', 'limmex'),
    'section'        => 'title_tagline',
    'settings'       => 'limmex_theme_logo_text',
    'type'           => 'checkbox',
  )));

  //Theme Color and Logo Options
  $wp_customize->add_section('limmex_theme_colors_and_logo', array(
    'title' => esc_html__('Site Colors & Logo', 'limmex'),
    'description' => esc_html__('Change theme color on one click.', 'limmex'),
    'priority'   => 20,
  ));

  //theme background color
  $wp_customize->add_setting('limmex_theme_bg_color', array(
    'default' => '#ffffff',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'limmex_theme_bg_color', array(
    'label' => esc_html__('Background  Color', 'limmex'),
    'section' => 'limmex_theme_colors_and_logo',
    'settings' => 'limmex_theme_bg_color',
  )));

  //theme text color
  // $wp_customize->add_setting('limmex_theme_primary_color', array(
  //   'default' => '#ea1a70',
  // ));

  // $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'limmex_theme_primary_color', array(
  //   'label' => esc_html__('Primary  Color', 'limmex'),
  //   'section' => 'limmex_theme_colors_and_logo',
  //   'settings' => 'limmex_theme_primary_color',
  // )));

  //theme logo option
  $wp_customize->add_setting('limmex_theme_logo', array(
    'default' => get_bloginfo('template_directory') . '/assets/image/colorful-logo.png',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'limmex_theme_logo', array(
    'label' => esc_html__('Upload your Logo', 'limmex'),
    'description' => esc_html__('If you interested to change or update your logo you can do it.', 'limmex'),
    'setting' => 'limmex_theme_logo',
    'section' => 'limmex_theme_colors_and_logo',
  )));

  //Hero Section
  $wp_customize->add_section('limmex_theme_hero_setion', array(
    'title' => esc_html__('Hero Area', 'limmex'),
    'description' => esc_html__('If you interested to change or update your hero settings you can do it from here.', 'limmex'),
    'priority'   => 21,
  ));

  //Company Title First Part
  $wp_customize->add_setting('limmex_theme_company_title_first_part_setting', array(
    'default' => esc_html__('Limmex', 'limmex'),
  ));

  $wp_customize->add_control('limmex_theme_company_title_first_part_setting', array(
    'label' => esc_html__('Company Title First Part', 'limmex'),
    'description' => 'If need you can update your text from here.',
    'setting' => 'limmex_theme_company_title_first_part_setting',
    'section' => 'limmex_theme_hero_setion',
  ));

  //Company Title Second Part
  $wp_customize->add_setting('limmex_theme_company_title_second_part_setting', array(
    'default' => esc_html__('Automation', 'limmex'),
  ));

  $wp_customize->add_control('limmex_theme_company_title_second_part_setting', array(
    'label' => esc_html__('Company Title Second Part', 'limmex'),
    'description' => 'If need you can update your text from here.',
    'setting' => 'limmex_theme_company_title_second_part_setting',
    'section' => 'limmex_theme_hero_setion',
  ));

  //Company Sologan
  $wp_customize->add_setting('limmex_theme_company_sologan_setting', array(
    'default' => esc_html__('IT, ITES, IOT Service Provider.', 'limmex'),
  ));

  $wp_customize->add_control('limmex_theme_company_sologan_setting', array(
    'label' => esc_html__('Company Sologan', 'limmex'),
    'description' => 'If need you can update your text from here.',
    'setting' => 'limmex_theme_company_sologan_setting',
    'section' => 'limmex_theme_hero_setion',
  ));

  //Hero Banner
  $wp_customize->add_setting('limmex_theme_hero_banner', array(
    'default' => get_bloginfo('template_directory') . '/assets/image/bg-hero.png',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'limmex_theme_hero_banner', array(
    'label' => esc_html__('Upload Hero Banner', 'limmex'),
    'description' => esc_html__('If you interested to change or update your Hero Banner you can do it.', 'limmex'),
    'setting' => 'limmex_theme_hero_banner',
    'section' => 'limmex_theme_hero_setion',
  )));

  //Company Feature area
  $wp_customize->add_section('limmex_theme_feture_area_section', array(
    'title' => esc_html__('Feature Area', 'limmex'),
    'description' => esc_html__('If you want to update your content you can do it from here.', 'limmex'),
    'priority' => 22,
  ));

  //First Feature area  photo
  $wp_customize->add_setting('limmex_theme_feature_first_photo_setting', array(
    'default' => get_bloginfo('template_directory') . '/assets/image/colorful-logo.png',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'limmex_theme_feature_first_photo_setting', array(
    'label' => esc_html__('upload first feature photo', 'limmex'),
    'description' => esc_html__('If you interested to change or update your photo you can do it.', 'limmex'),
    'setting' => 'limmex_theme_feature_first_photo_setting',
    'section' => 'limmex_theme_feture_area_section',
  )));
  //First Feature area  Text
  $wp_customize->add_setting('limmex_theme_first_feature_are_text_setting', array(
    'default' => esc_html__('Idea', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_first_feature_are_text_setting', array(
    'label' => esc_html__('First Feature area Text', 'limmex'),
    'description' => 'If need you can update your text from here.',
    'setting' => 'limmex_theme_first_feature_are_text_setting',
    'section' => 'limmex_theme_feture_area_section',
  ));

  //Second Feature area  photo
  $wp_customize->add_setting('limmex_theme_feature_second_photo_setting', array(
    'default' => get_bloginfo('template_directory') . '/assets/image/colorful-logo.png',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'limmex_theme_feature_second_photo_setting', array(
    'label' => esc_html__('upload second feature photo', 'limmex'),
    'description' => esc_html__('If you interested to change or update your photo you can do it.', 'limmex'),
    'setting' => 'limmex_theme_feature_second_photo_setting',
    'section' => 'limmex_theme_feture_area_section',
  )));
  //Second Feature area  Text
  $wp_customize->add_setting('limmex_theme_second_feature_are_text_setting', array(
    'default' => esc_html__('Plan', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_second_feature_are_text_setting', array(
    'label' => esc_html__('Second Feature area Text', 'limmex'),
    'description' => 'If need you can update your text from here.',
    'setting' => 'limmex_theme_second_feature_are_text_setting',
    'section' => 'limmex_theme_feture_area_section',
  ));
  //Third Feature area  photo
  $wp_customize->add_setting('limmex_theme_feature_third_photo_setting', array(
    'default' => get_bloginfo('template_directory') . '/assets/image/colorful-logo.png',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'limmex_theme_feature_third_photo_setting', array(
    'label' => esc_html__('upload third feature photo', 'limmex'),
    'description' => esc_html__('If you interested to change or update your photo you can do it.', 'limmex'),
    'setting' => 'limmex_theme_feature_third_photo_setting',
    'section' => 'limmex_theme_feture_area_section',
  )));
  //Thirs Feature area  Text
  $wp_customize->add_setting('limmex_theme_third_feature_are_text_setting', array(
    'default' => esc_html__('Implementation', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_third_feature_are_text_setting', array(
    'label' => esc_html__('Third Feature area Text', 'limmex'),
    'description' => 'If need you can update your text from here.',
    'setting' => 'limmex_theme_third_feature_are_text_setting',
    'section' => 'limmex_theme_feture_area_section',
  ));

  //What We do Area
  $wp_customize->add_section('limmex_theme_what_we_do_section', array(
    'title' => esc_html__('What We do Area', 'limmex'),
    'description' => esc_html__('If you want to update your content you can do it from here.', 'limmex'),
    'priority' => 23,
  ));
  //What We do title Text
  $wp_customize->add_setting('limmex_theme_what_we_do_title_text_setting', array(
    'default' => esc_html__('Limmex Automation', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_what_we_do_titel_text_control', array(
    'label' => esc_html__('What We do Title', 'limmex'),
    'description' => esc_html__('If you interested to update your Content, you can do it here.', 'limmex'),
    'type' => 'text',
    'settings' => 'limmex_theme_what_we_do_title_text_setting',
    'section' => 'limmex_theme_what_we_do_section',
  ));
  //What We do title Description
  $wp_customize->add_setting('limmex_theme_what_we_do_description_text_setting', array(
    'default' => esc_html__('Can you avoid technology in modern life? If ‘NO’ then we find you as our speaker, our walk finder. You’ll tell us your suggestion, fascination, need, everything! Trust us, we’ll listen to you like a first grade student. We regularly monitor global changes. Thus, our motto is ‘Be Bird’. We fly to embrace best one from any part of the globe. What do you guess? We bring it for only us? ‘NO’ we bring it for you first. Again ‘Be Bird’ leads to think you like a Bird. You can have a Bird’s Eye View to deal with your home and work. So, let’s fly together and bring the best for rest of the world. ', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_what_we_do_description_text_control', array(
    'label' => esc_html__('What We do Description', 'limmex'),
    'description' => esc_html__('If you interested to update your Content, you can do it here.', 'limmex'),
    'type' => 'textarea',
    'settings' => 'limmex_theme_what_we_do_description_text_setting',
    'section' => 'limmex_theme_what_we_do_section',
  ));
  //What We do Banner
  $wp_customize->add_setting('limmex_theme_what_we_do_banner_setting', array(
    'default' => get_bloginfo('template_directory') . '/assets/image/colorful-logo.png',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'limmex_theme_what_we_do_banner_setting', array(
    'label' => esc_html__('upload banner photo', 'limmex'),
    'description' => esc_html__('If you interested to change or update your photo you can do it.', 'limmex'),
    'setting' => 'limmex_theme_what_we_do_banner_setting',
    'section' => 'limmex_theme_what_we_do_section',
  )));

  //Our Product Section
  $wp_customize->add_section('limmex_theme_our_product_setion', array(
    'title' => esc_html__('Our Product Area', 'limmex'),
    'description' => esc_html__('If you interested to change or update your content you can do it from here.', 'limmex'),
    'priority'   => 24,
  ));
  //Our Product Title Part
  $wp_customize->add_setting('limmex_theme_our_product_title_setting', array(
    'default' => esc_html__('Our Products', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_our_product_title_setting', array(
    'label' => esc_html__('Our Product Title', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'setting' => 'limmex_theme_our_product_title_setting',
    'section' => 'limmex_theme_our_product_setion',
  ));
  //Our Product Sub Title Part
  $wp_customize->add_setting('limmex_theme_our_product_sub_title_setting', array(
    'default' => esc_html__('We are happily introducing our own & unique products as follows', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_our_product_sub_title_setting', array(
    'label' => esc_html__('Our Product Sub Title', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'setting' => 'limmex_theme_our_product_sub_title_setting',
    'section' => 'limmex_theme_our_product_setion',
  ));

  //Our Services Section
  $wp_customize->add_section('limmex_theme_our_services_setion', array(
    'title' => esc_html__('Our Services Area', 'limmex'),
    'description' => esc_html__('If you interested to change or update your content you can do it from here.', 'limmex'),
    'priority'   => 25,
  ));
  //Our Services Title Part
  $wp_customize->add_setting('limmex_theme_our_services_title_setting', array(
    'default' => esc_html__('Our Services', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_our_services_title_setting', array(
    'label' => esc_html__('Our Services Title', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'setting' => 'limmex_theme_our_services_title_setting',
    'section' => 'limmex_theme_our_services_setion',
  ));
  //Our Services SubTitle Part
  $wp_customize->add_setting('limmex_theme_our_services_sub_title_setting', array(
    'default' => esc_html__('We are highly professional & devoted to provide the following services', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_our_services_sub_title_setting', array(
    'label' => esc_html__('Our Services Sub Title', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'setting' => 'limmex_theme_our_services_sub_title_setting',
    'section' => 'limmex_theme_our_services_setion',
  ));

  //Get a Quatation Section
  $wp_customize->add_section('limmex_theme_quotation_setion', array(
    'title' => esc_html__('Get a Quatation Area', 'limmex'),
    'description' => esc_html__('If you interested to change or update your content you can do it from here.', 'limmex'),
    'priority'   => 25,
  ));
  //Get a Quotation Title Part
  $wp_customize->add_setting('limmex_theme_quotation_title_setting', array(
    'default' => esc_html__('Get quotation for any application ', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_quotation_title_setting', array(
    'label' => esc_html__('Get a Quotation Title', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'setting' => 'limmex_theme_quotation_title_setting',
    'section' => 'limmex_theme_quotation_setion',
  ));

  //Portfolio Section
  $wp_customize->add_section('limmex_theme_portfolio_setion', array(
    'title' => esc_html__('Portfolio Area', 'limmex'),
    'description' => esc_html__('If you interested to change or update your content you can do it from here.', 'limmex'),
    'priority'   => 26,
  ));
  //Portfolio Title Part
  $wp_customize->add_setting('limmex_theme_portfolio_title_setting', array(
    'default' => esc_html__('Our Protfolio', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_portfolio_title_setting', array(
    'label' => esc_html__('Portfolio Title Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'setting' => 'limmex_theme_portfolio_title_setting',
    'section' => 'limmex_theme_portfolio_setion',
  ));
  //Portfolio Sub Title Part
  $wp_customize->add_setting('limmex_theme_portfolio_sub_title_setting', array(
    'default' => esc_html__('We have successfully handed over the following projects to our clients', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_portfolio_sub_title_setting', array(
    'label' => esc_html__('Portfolio Sub Title Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'setting' => 'limmex_theme_portfolio_sub_title_setting',
    'section' => 'limmex_theme_portfolio_setion',
  ));

  //Groco Emcommerce App Section
  $wp_customize->add_section('limmex_theme_groco_app_setion', array(
    'title' => esc_html__('Groco App Area', 'limmex'),
    'description' => esc_html__('If you interested to change or update your content you can do it from here.', 'limmex'),
    'priority'   => 27,
  ));
  //Groco App Title Part
  $wp_customize->add_setting('limmex_theme_groco_app_title_setting', array(
    'default' => esc_html__('Purchase Groco', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_groco_app_title_setting', array(
    'label' => esc_html__('Groco App Title Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'setting' => 'limmex_theme_groco_app_title_setting',
    'section' => 'limmex_theme_groco_app_setion',
  ));
  //Groco App Subtitle Title Part
  $wp_customize->add_setting('limmex_theme_groco_app_sub_title_setting', array(
    'default' => esc_html__('Start Your Own Grocery Shop Today', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_groco_app_sub_title_setting', array(
    'label' => esc_html__('Groco App Sub Title Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'setting' => 'limmex_theme_groco_app_sub_title_setting',
    'section' => 'limmex_theme_groco_app_setion',
  ));
  //Groco App Image Part
  $wp_customize->add_setting('limmex_theme_groco_app_image_setting', array(
    'default' => get_bloginfo('template_directory') . '/assets/image/groco-ecommerce.png',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'limmex_theme_groco_app_image_setting', array(
    'label' => esc_html__('upload Groco App photo', 'limmex'),
    'description' => esc_html__('If you interested to change or update your photo you can do it.', 'limmex'),
    'setting' => 'limmex_theme_groco_app_image_setting',
    'section' => 'limmex_theme_groco_app_setion',
  )));
  //Groco App Buy Now Button Text Part
  $wp_customize->add_setting('limmex_theme_groco_app_buy_btn_url_setting', array(
    'default' => esc_html__('https://codecanyon.net/item/groco-vue-laravel-grocery-system/34152088', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_groco_app_buy_btn_url_setting', array(
    'label' => esc_html__('Groco App Buying Button URL', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'url',
    'setting' => 'limmex_theme_groco_app_buy_btn_url_setting',
    'section' => 'limmex_theme_groco_app_setion',
  ));
  //Groco App Buy Now Button Text Part
  $wp_customize->add_setting('limmex_theme_groco_app_buy_btn_text_setting', array(
    'default' => esc_html__('Buy Now', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_groco_app_buy_btn_text_setting', array(
    'label' => esc_html__('Groco App Buying Button Text', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'text',
    'setting' => 'limmex_theme_groco_app_buy_btn_text_setting',
    'section' => 'limmex_theme_groco_app_setion',
  ));

  //Our Team Section
  $wp_customize->add_section('limmex_theme_our_team_setion', array(
    'title' => esc_html__('Our Team Area', 'limmex'),
    'description' => esc_html__('If you interested to change or update your content you can do it from here.', 'limmex'),
    'priority'   => 28,
  ));
  //Our Team Title Part
  $wp_customize->add_setting('limmex_theme_our_team_title_setting', array(
    'default' => esc_html__('Team Member', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_our_team_title_setting', array(
    'label' => esc_html__('Our Team Title Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'text',
    'setting' => 'limmex_theme_our_team_title_setting',
    'section' => 'limmex_theme_our_team_setion',
  ));
  //Our Team Sub Title Part
  $wp_customize->add_setting('limmex_theme_our_team_sub_title_setting', array(
    'default' => esc_html__('Let us get introduced', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_our_team_sub_title_setting', array(
    'label' => esc_html__('Our Team Sub Title Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'text',
    'setting' => 'limmex_theme_our_team_sub_title_setting',
    'section' => 'limmex_theme_our_team_setion',
  ));

  //Testimonial Section
  $wp_customize->add_section('limmex_theme_testimonial_setion', array(
    'title' => esc_html__('Testimonial Section', 'limmex'),
    'description' => esc_html__('If you interested to change or update your content you can do it from here.', 'limmex'),
    'priority'   => 29,
  ));
  //Testimonial Title Part
  $wp_customize->add_setting('limmex_theme_testimonial_title_setting', array(
    'default' => esc_html__('Our Testimonials', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_testimonial_title_setting', array(
    'label' => esc_html__('Testimonial Title Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'text',
    'setting' => 'limmex_theme_testimonial_title_setting',
    'section' => 'limmex_theme_testimonial_setion',
  ));
  //Testimonial Sub Title Part
  $wp_customize->add_setting('limmex_theme_testimonial_sub_title_setting', array(
    'default' => esc_html__('We are proud to hear from the following people', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_testimonial_sub_title_setting', array(
    'label' => esc_html__('Testimonial Title Sub Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'text',
    'setting' => 'limmex_theme_testimonial_sub_title_setting',
    'section' => 'limmex_theme_testimonial_setion',
  ));

  //Contact Details Section
  $wp_customize->add_section('limmex_theme_contact_details_setion', array(
    'title' => esc_html__('Address Section', 'limmex'),
    'description' => esc_html__('If you interested to change or update your content you can do it from here.', 'limmex'),
    'priority'   => 30,
  ));
  //Mobile Title Part
  $wp_customize->add_setting('limmex_theme_contact_details_mobile_title_setting', array(
    'default' => esc_html__('Mobile', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_contact_details_mobile_title_setting', array(
    'label' => esc_html__('Contact Details Mobile Title Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'text',
    'setting' => 'limmex_theme_contact_details_mobile_title_setting',
    'section' => 'limmex_theme_contact_details_setion',
  ));
  //Mobile Content Part
  $wp_customize->add_setting('limmex_theme_contact_details_mobile_content_setting', array(
    'default' => esc_html__('+880 1834394216', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_contact_details_mobile_content_setting', array(
    'label' => esc_html__('Contact Details Mobile Content Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'text',
    'setting' => 'limmex_theme_contact_details_mobile_content_setting',
    'section' => 'limmex_theme_contact_details_setion',
  ));
  //Email Title Part
  $wp_customize->add_setting('limmex_theme_contact_details_email_title_setting', array(
    'default' => esc_html__('Email', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_contact_details_email_title_setting', array(
    'label' => esc_html__('Contact Details Email Title Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'text',
    'setting' => 'limmex_theme_contact_details_email_title_setting',
    'section' => 'limmex_theme_contact_details_setion',
  ));
  //Email Content Part
  $wp_customize->add_setting('limmex_theme_contact_details_email_content_setting', array(
    'default' => esc_html__('business@limmexbd.com', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_contact_details_email_content_setting', array(
    'label' => esc_html__('Contact Details Mobile Content Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'text',
    'setting' => 'limmex_theme_contact_details_email_content_setting',
    'section' => 'limmex_theme_contact_details_setion',
  ));
   //Web Title Part
  $wp_customize->add_setting('limmex_theme_contact_details_web_title_setting', array(
    'default' => esc_html__('Web', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_contact_details_web_title_setting', array(
    'label' => esc_html__('Contact Details Web Title Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'text',
    'setting' => 'limmex_theme_contact_details_web_title_setting',
    'section' => 'limmex_theme_contact_details_setion',
  ));
  //Web Content Part
  $wp_customize->add_setting('limmex_theme_contact_details_web_content_setting', array(
    'default' => esc_html__('www.limmexbd.com', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_contact_details_web_content_setting', array(
    'label' => esc_html__('Contact Details Web Content Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'url',
    'setting' => 'limmex_theme_contact_details_web_content_setting',
    'section' => 'limmex_theme_contact_details_setion',
  ));
  //Location Title Part
  $wp_customize->add_setting('limmex_theme_contact_details_location_title_setting', array(
    'default' => esc_html__('Location', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_contact_details_location_title_setting', array(
    'label' => esc_html__('Contact Details Location Title Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'text',
    'setting' => 'limmex_theme_contact_details_location_title_setting',
    'section' => 'limmex_theme_contact_details_setion',
  ));
  //Location Content Part
  $wp_customize->add_setting('limmex_theme_contact_details_location_content_setting', array(
    'default' => esc_html__('Towhid Tower-4, 17/4, Tolarbagh, Mirpur-1, Dhaka-1216', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_contact_details_location_content_setting', array(
    'label' => esc_html__('Contact Details Location Content Area', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'textarea',
    'setting' => 'limmex_theme_contact_details_location_content_setting',
    'section' => 'limmex_theme_contact_details_setion',
  ));

  //Footer Top Section
  $wp_customize->add_section('limmex_theme_footer_top_setion', array(
    'title' => esc_html__('Footer Top Area', 'limmex'),
    'description' => esc_html__('If you interested to change or update your content you can do it from here.', 'limmex'),
    'priority'   => 31,
  ));
  //Footer Top left area logo
  $wp_customize->add_setting('limmex_theme_footer_top_logo_setting', array(
    'default' => get_bloginfo('template_directory') . '/assets/image/colorful-logo.png',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'limmex_theme_footer_top_logo_setting', array(
    'label' => esc_html__('upload footer Top left logo', 'limmex'),
    'description' => esc_html__('If you interested to change or update your photo you can do it.', 'limmex'),
    'setting' => 'limmex_theme_footer_top_logo_setting',
    'section' => 'limmex_theme_footer_top_setion',
  )));
  //Footer Top left area text
  $wp_customize->add_setting('limmex_theme_footer_top_text_left_setting', array(
    'default' => esc_html__('We are dedicated and committed to release international standard IT, ITes and IoT products and services which will be a means of our country branding in global era. ', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_footer_top_text_left_setting', array(
    'label' => esc_html__('Footer Top Left area Text', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'textarea',
    'setting' => 'limmex_theme_footer_top_text_left_setting',
    'section' => 'limmex_theme_footer_top_setion',
  ));
   //Footer Top Rigt area title
   $wp_customize->add_setting('limmex_theme_footer_top_text_right_setting', array(
    'default' => esc_html__('Our Products', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_footer_top_text_right_setting', array(
    'label' => esc_html__('Footer Top Right area Text', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'text',
    'setting' => 'limmex_theme_footer_top_text_right_setting',
    'section' => 'limmex_theme_footer_top_setion',
  ));
  //Footer Top Rigt area photo one
  $wp_customize->add_setting('limmex_theme_footer_top_right_photo_one_setting', array(
    'default' => get_bloginfo('template_directory') . '/assets/image/colorful-logo.png',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'limmex_theme_footer_top_right_photo_one_setting', array(
    'label' => esc_html__('upload footer Top Right photo One', 'limmex'),
    'description' => esc_html__('If you interested to change or update your photo you can do it.', 'limmex'),
    'setting' => 'limmex_theme_footer_top_right_photo_one_setting',
    'section' => 'limmex_theme_footer_top_setion',
  )));
  //Footer top right logo one url
  $wp_customize->add_setting('limmex_theme_footer_top_logo_one_url_setting', array(
    'default' => esc_html__('https://bido.com', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_footer_top_logo_one_url_setting', array(
    'label' => esc_html__('Footer Top Right logo one url', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'url',
    'setting' => 'limmex_theme_footer_top_logo_one_url_setting',
    'section' => 'limmex_theme_footer_top_setion',
  ));
   //Footer Top Rigt area photo Two
   $wp_customize->add_setting('limmex_theme_footer_top_right_photo_two_setting', array(
    'default' => get_bloginfo('template_directory') . '/assets/image/colorful-logo.png',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'limmex_theme_footer_top_right_photo_two_setting', array(
    'label' => esc_html__('upload footer Top Right photo Two', 'limmex'),
    'description' => esc_html__('If you interested to change or update your photo you can do it.', 'limmex'),
    'setting' => 'limmex_theme_footer_top_right_photo_two_setting',
    'section' => 'limmex_theme_footer_top_setion',
  )));
   //Footer top right logo two url
   $wp_customize->add_setting('limmex_theme_footer_top_logo_two_url_setting', array(
    'default' => esc_html__('https://groco.com', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_footer_top_logo_two_url_setting', array(
    'label' => esc_html__('Footer Top Right logo two url', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'url',
    'setting' => 'limmex_theme_footer_top_logo_two_url_setting',
    'section' => 'limmex_theme_footer_top_setion',
  ));

  //Footer Bottom Section
  $wp_customize->add_section('limmex_theme_footer_bottom_setion', array(
    'title' => esc_html__('Footer Bottom Area', 'limmex'),
    'description' => esc_html__('If you interested to change or update your content you can do it from here.', 'limmex'),
    'priority'   => 32,
  ));
   //Footer bottom left social fb
   $wp_customize->add_setting('limmex_theme_social_fb_setting', array(
    'default' => esc_html__('https://facebook.com', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_social_fb_setting', array(
    'label' => esc_html__('Footer bottom soical fb', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'url',
    'setting' => 'limmex_theme_social_fb_setting',
    'section' => 'limmex_theme_footer_bottom_setion',
  ));
  //Footer bottom left social twitter
  $wp_customize->add_setting('limmex_theme_social_twitter_setting', array(
    'default' => esc_html__('https://twitter.com', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_social_twitter_setting', array(
    'label' => esc_html__('Footer bottom soical twitter', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'url',
    'setting' => 'limmex_theme_social_twitter_setting',
    'section' => 'limmex_theme_footer_bottom_setion',
  ));
  //Footer bottom left social linkedin
  $wp_customize->add_setting('limmex_theme_social_linkedin_setting', array(
    'default' => esc_html__('https://linkedin.com', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_social_linkedin_setting', array(
    'label' => esc_html__('Footer bottom soical linkedin', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'url',
    'setting' => 'limmex_theme_social_linkedin_setting',
    'section' => 'limmex_theme_footer_bottom_setion',
  ));
  //Footer bottom left social youtube
  $wp_customize->add_setting('limmex_theme_social_youtube_setting', array(
    'default' => esc_html__('https://youtube.com', 'limmex'),
  ));
  $wp_customize->add_control('limmex_theme_social_youtube_setting', array(
    'label' => esc_html__('Footer bottom soical youtube', 'limmex'),
    'description' => esc_html__('If need you can update your text from here.', 'limmex'),
    'type' => 'url',
    'setting' => 'limmex_theme_social_youtube_setting',
    'section' => 'limmex_theme_footer_bottom_setion',
  ));
    //Footer bottom left social youtube
    $wp_customize->add_setting('limmex_theme_social_instagram_setting', array(
      'default' => esc_html__('https://instagram.com', 'limmex'),
    ));
    $wp_customize->add_control('limmex_theme_social_instagram_setting', array(
      'label' => esc_html__('Footer bottom soical instagram', 'limmex'),
      'description' => esc_html__('If need you can update your text from here.', 'limmex'),
      'type' => 'url',
      'setting' => 'limmex_theme_social_instagram_setting',
      'section' => 'limmex_theme_footer_bottom_setion',
    ));
    //Footer bottom right copy right text
    $wp_customize->add_setting('limmex_theme_copyright_text_setting', array(
      'default' => esc_html__('©2021 All rights reserved', 'limmex'),
    ));
    $wp_customize->add_control('limmex_theme_copyright_text_setting', array(
      'label' => esc_html__('Footer bottom right copy right text', 'limmex'),
      'description' => esc_html__('If need you can update your text from here.', 'limmex'),
      'type' => 'text',
      'setting' => 'limmex_theme_copyright_text_setting',
      'section' => 'limmex_theme_footer_bottom_setion',
    ));


}
add_action('customize_register', 'limmex_theme_customize');
