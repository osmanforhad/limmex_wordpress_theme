<?php
function limmex_theme_custom_posts()
{
  //Our Product Post
  $labels = array(
    'name' => esc_html__('product', 'Post type general name', 'limmex'),
    'singular_name'         => esc_html__('Product', 'Post type singular name', 'limmex'),
    'menu_name'             => esc_html__('product', 'Admin Menu text', 'limmex'),
    'name_admin_bar'        => esc_html__('Product', 'Add New on Toolbar', 'limmex'),
    'add_new'               => esc_html__('Add New Product	', 'limmex'),
    'add_new_item'          => esc_html__('Add New Product', 'limmex'),
    'new_item'              => esc_html__('New Product', 'limmex'),
    'edit_item'             => esc_html__('Edit Product', 'limmex'),
    'view_item'             => esc_html__('View Product', 'limmex'),
    'all_items'             => esc_html__('All product', 'limmex'),
    'search_items'          => esc_html__('Search product', 'limmex'),
    'parent_item_colon'     => esc_html__('Parent product:', 'limmex'),
    'not_found'             => esc_html__('No product found.', 'limmex'),
    'not_found_in_trash'    => esc_html__('No product found in Trash.', 'limmex'),
    'featured_image'        => esc_html__('Product Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'limmex'),
    'set_featured_image'    => esc_html__('Set Product Featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'limmex'),
    'remove_featured_image' => esc_html__('Remove  Featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'limmex'),
    'use_featured_image'    => esc_html__('Use as Featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'limmex'),
    'archives'              => esc_html__('Product archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'limmex'),
    'insert_into_item'      => esc_html__('Insert into Product', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'limmex'),
    'uploaded_to_this_item' => esc_html__('Uploaded to this Product', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'limmex'),
    'filter_items_list'     => esc_html__('Filter product list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'limmex'),
    'items_list_navigation' => esc_html__('product list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'limmex'),
    'items_list'            => esc_html__('product list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'limmex'),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'product'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 10,
    'supports'           => array('title', 'author', 'thumbnail', 'custom-fields'),
    'taxonomies'         => array('category', 'post_tag'),
    'show_in_rest'       => false,
  );
  register_post_type('product', $args);

  //Our Services Post
  $labels = array(
    'name' => esc_html__('ourservices', 'Post type general name', 'limmex'),
    'singular_name'         => esc_html__('Our Services', 'Post type singular name', 'limmex'),
    'menu_name'             => esc_html__('Our Services', 'Admin Menu text', 'limmex'),
    'name_admin_bar'        => esc_html__('Our Services', 'Add New on Toolbar', 'limmex'),
    'add_new'               => esc_html__('Add New Service	', 'limmex'),
    'add_new_item'          => esc_html__('Add New Service', 'limmex'),
    'new_item'              => esc_html__('New Service', 'limmex'),
    'edit_item'             => esc_html__('Edit Service', 'limmex'),
    'view_item'             => esc_html__('View Service', 'limmex'),
    'all_items'             => esc_html__('All Service', 'limmex'),
    'search_items'          => esc_html__('Search Service', 'limmex'),
    'parent_item_colon'     => esc_html__('Parent Service:', 'limmex'),
    'not_found'             => esc_html__('No Service found.', 'limmex'),
    'not_found_in_trash'    => esc_html__('No Service found in Trash.', 'limmex'),
    'featured_image'        => esc_html__('Service Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'limmex'),
    'set_featured_image'    => esc_html__('Set Service Featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'limmex'),
    'remove_featured_image' => esc_html__('Remove  Featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'limmex'),
    'use_featured_image'    => esc_html__('Use as Featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'limmex'),
    'archives'              => esc_html__('Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'limmex'),
    'insert_into_item'      => esc_html__('Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'limmex'),
    'uploaded_to_this_item' => esc_html__('Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'limmex'),
    'filter_items_list'     => esc_html__('Filter Service list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'limmex'),
    'items_list_navigation' => esc_html__('Service list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'limmex'),
    'items_list'            => esc_html__('Service list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'limmex'),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'service'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 11,
    'supports'           => array('title', 'author', 'thumbnail'),
    'taxonomies'         => array('category', 'post_tag'),
    'show_in_rest'       => false,
  );
  register_post_type('ourservices', $args);

  //Our Portfolio Post
  $labels = array(
    'name' => esc_html__('portfolio', 'Post type general name', 'limmex'),
    'singular_name'         => esc_html__('portfolio', 'Post type singular name', 'limmex'),
    'menu_name'             => esc_html__('portfolio', 'Admin Menu text', 'limmex'),
    'name_admin_bar'        => esc_html__('portfolio', 'Add New on Toolbar', 'limmex'),
    'add_new'               => esc_html__('Add New Portfolio', 'limmex'),
    'add_new_item'          => esc_html__('Add New Portfolio', 'limmex'),
    'new_item'              => esc_html__('New Portfolio', 'limmex'),
    'edit_item'             => esc_html__('Edit Portfolio', 'limmex'),
    'view_item'             => esc_html__('View Portfolio', 'limmex'),
    'all_items'             => esc_html__('All Portfolio', 'limmex'),
    'search_items'          => esc_html__('Search Portfolio', 'limmex'),
    'parent_item_colon'     => esc_html__('Parent Portfolio:', 'limmex'),
    'not_found'             => esc_html__('No Portfolio found.', 'limmex'),
    'not_found_in_trash'    => esc_html__('No Portfolio found in Trash.', 'limmex'),
    'featured_image'        => esc_html__('Portfolio Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'limmex'),
    'set_featured_image'    => esc_html__('Set Portfolio Featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'limmex'),
    'remove_featured_image' => esc_html__('Remove  Portfolio image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'limmex'),
    'use_featured_image'    => esc_html__('Use as Featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'limmex'),
    'archives'              => esc_html__('Portfolio archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'limmex'),
    'insert_into_item'      => esc_html__('Insert into Portfolio', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'limmex'),
    'uploaded_to_this_item' => esc_html__('Uploaded to this Portfolio', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'limmex'),
    'filter_items_list'     => esc_html__('Filter Portfolio list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'limmex'),
    'items_list_navigation' => esc_html__('Portfolio list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'limmex'),
    'items_list'            => esc_html__('Portfolio list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'limmex'),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'portfolio'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 12,
    'supports'           => array('title', 'author', 'thumbnail', 'custom-fields'),
    'taxonomies'         => array('category', 'post_tag'),
    'show_in_rest'       => false,
  );
  register_post_type('portfolio', $args);

  //Our Team Post
  $labels = array(
    'name' => esc_html__('team', 'Post type general name', 'limmex'),
    'singular_name'         => esc_html__('Team', 'Post type singular name', 'limmex'),
    'menu_name'             => esc_html__('Team', 'Admin Menu text', 'limmex'),
    'name_admin_bar'        => esc_html__('Team', 'Add New on Toolbar', 'limmex'),
    'add_new'               => esc_html__('Add New Team	', 'limmex'),
    'add_new_item'          => esc_html__('Add New Team', 'limmex'),
    'new_item'              => esc_html__('New Team', 'limmex'),
    'edit_item'             => esc_html__('Edit Team', 'limmex'),
    'view_item'             => esc_html__('View Team', 'limmex'),
    'all_items'             => esc_html__('All Team', 'limmex'),
    'search_items'          => esc_html__('Search Team', 'limmex'),
    'parent_item_colon'     => esc_html__('Parent Team:', 'limmex'),
    'not_found'             => esc_html__('No Team found.', 'limmex'),
    'not_found_in_trash'    => esc_html__('No Team found in Trash.', 'limmex'),
    'featured_image'        => esc_html__('Team Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'limmex'),
    'set_featured_image'    => esc_html__('Set Team Featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'limmex'),
    'remove_featured_image' => esc_html__('Remove  Featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'limmex'),
    'use_featured_image'    => esc_html__('Use as Featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'limmex'),
    'archives'              => esc_html__('Team archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'limmex'),
    'insert_into_item'      => esc_html__('Insert into Team', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'limmex'),
    'uploaded_to_this_item' => esc_html__('Uploaded to this Team', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'limmex'),
    'filter_items_list'     => esc_html__('Filter Team list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'limmex'),
    'items_list_navigation' => esc_html__('Team list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'limmex'),
    'items_list'            => esc_html__('Team list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'limmex'),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'team'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 13,
    'supports'           => array('title', 'author', 'thumbnail', 'custom-fields'),
    'taxonomies'         => array('category', 'post_tag'),
    'show_in_rest'       => false,
  );
  register_post_type('team', $args);

    //Our Team Post
    $labels = array(
      'name' => esc_html__('tools_tech', 'Post type general name', 'limmex'),
      'singular_name'         => esc_html__('Tools & Tech', 'Post type singular name', 'limmex'),
      'menu_name'             => esc_html__('Tools & Tech', 'Admin Menu text', 'limmex'),
      'name_admin_bar'        => esc_html__('Tools & Tech', 'Add New on Toolbar', 'limmex'),
      'add_new'               => esc_html__('Add New Tools & Tech	', 'limmex'),
      'add_new_item'          => esc_html__('Add New Tools & Tech', 'limmex'),
      'new_item'              => esc_html__('New Tools & Tech', 'limmex'),
      'edit_item'             => esc_html__('Edit Tools & Tech', 'limmex'),
      'view_item'             => esc_html__('View Tools & Tech', 'limmex'),
      'all_items'             => esc_html__('All Tools & Tech', 'limmex'),
      'search_items'          => esc_html__('Search Tools & Tech', 'limmex'),
      'parent_item_colon'     => esc_html__('Parent Tools & Tech:', 'limmex'),
      'not_found'             => esc_html__('No Tools & Tech found.', 'limmex'),
      'not_found_in_trash'    => esc_html__('No Tools & Tech found in Trash.', 'limmex'),
      'featured_image'        => esc_html__('Tools & Tech Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'limmex'),
      'set_featured_image'    => esc_html__('Set Tools & Tech Featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'limmex'),
      'remove_featured_image' => esc_html__('Remove  Featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'limmex'),
      'use_featured_image'    => esc_html__('Use as Featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'limmex'),
      'archives'              => esc_html__('Tools & Tech archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'limmex'),
      'insert_into_item'      => esc_html__('Insert into Tools & Tech', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'limmex'),
      'uploaded_to_this_item' => esc_html__('Uploaded to this Tools & Tech', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'limmex'),
      'filter_items_list'     => esc_html__('Filter Tools & Tech list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'limmex'),
      'items_list_navigation' => esc_html__('Tools & Tech list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'limmex'),
      'items_list'            => esc_html__('Tools & Tech list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'limmex'),
    );
  
    $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'tools'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 14,
      'supports'           => array('title', 'author', 'thumbnail'),
      'taxonomies'         => array('category', 'post_tag'),
      'show_in_rest'       => false,
    );
    register_post_type('tools_tech', $args);

    //We Serve Country & Client Post
    $labels = array(
      'name' => esc_html__('country_client', 'Post type general name', 'limmex'),
      'singular_name'         => esc_html__('Country & Client', 'Post type singular name', 'limmex'),
      'menu_name'             => esc_html__('Country & Client', 'Admin Menu text', 'limmex'),
      'name_admin_bar'        => esc_html__('Country & Client', 'Add New on Toolbar', 'limmex'),
      'add_new'               => esc_html__('Add New Country & Client', 'limmex'),
      'add_new_item'          => esc_html__('Add New Country & Client', 'limmex'),
      'new_item'              => esc_html__('New Country & Client', 'limmex'),
      'edit_item'             => esc_html__('Edit Country & Client', 'limmex'),
      'view_item'             => esc_html__('View Country & Client', 'limmex'),
      'all_items'             => esc_html__('All Country & Client', 'limmex'),
      'search_items'          => esc_html__('Search Country & Client', 'limmex'),
      'parent_item_colon'     => esc_html__('Parent Country & Client:', 'limmex'),
      'not_found'             => esc_html__('No Country & Client found.', 'limmex'),
      'not_found_in_trash'    => esc_html__('No Country & Client found in Trash.', 'limmex'),
      'featured_image'        => esc_html__('Country & Client Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'limmex'),
      'set_featured_image'    => esc_html__('Set Country & Client Featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'limmex'),
      'remove_featured_image' => esc_html__('Remove  Featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'limmex'),
      'use_featured_image'    => esc_html__('Use as Featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'limmex'),
      'archives'              => esc_html__('Country & Client archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'limmex'),
      'insert_into_item'      => esc_html__('Insert into Country & Client', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'limmex'),
      'uploaded_to_this_item' => esc_html__('Uploaded to this Country & Client', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'limmex'),
      'filter_items_list'     => esc_html__('Filter Country & Client list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'limmex'),
      'items_list_navigation' => esc_html__('Country & Client navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'limmex'),
      'items_list'            => esc_html__('Country & Client list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'limmex'),
    );
  
    $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'country'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 15,
      'supports'           => array('title', 'author', 'thumbnail'),
      'taxonomies'         => array('category', 'post_tag'),
      'show_in_rest'       => false,
    );
    register_post_type('country_client', $args);

     //Testimonial Post
     $labels = array(
      'name' => esc_html__('testimonial', 'Post type general name', 'limmex'),
      'singular_name'         => esc_html__('Testimonial', 'Post type singular name', 'limmex'),
      'menu_name'             => esc_html__('Testimonial', 'Admin Menu text', 'limmex'),
      'name_admin_bar'        => esc_html__('Testimonial', 'Add New on Toolbar', 'limmex'),
      'add_new'               => esc_html__('Add New Testimonial', 'limmex'),
      'add_new_item'          => esc_html__('Add New Testimonial', 'limmex'),
      'new_item'              => esc_html__('New Testimonial', 'limmex'),
      'edit_item'             => esc_html__('Edit Testimonial', 'limmex'),
      'view_item'             => esc_html__('View Testimonial', 'limmex'),
      'all_items'             => esc_html__('All Testimonial', 'limmex'),
      'search_items'          => esc_html__('Search Testimonial', 'limmex'),
      'parent_item_colon'     => esc_html__('Parent Testimonial:', 'limmex'),
      'not_found'             => esc_html__('No Testimonial found.', 'limmex'),
      'not_found_in_trash'    => esc_html__('No Testimonial found in Trash.', 'limmex'),
      'featured_image'        => esc_html__('Testimonial Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'limmex'),
      'set_featured_image'    => esc_html__('Set Testimonial Featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'limmex'),
      'remove_featured_image' => esc_html__('Remove  Featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'limmex'),
      'use_featured_image'    => esc_html__('Use as Featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'limmex'),
      'archives'              => esc_html__('Testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'limmex'),
      'insert_into_item'      => esc_html__('Insert into Testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'limmex'),
      'uploaded_to_this_item' => esc_html__('Uploaded to this Testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'limmex'),
      'filter_items_list'     => esc_html__('Filter Testimonial list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'limmex'),
      'items_list_navigation' => esc_html__('Testimonial navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'limmex'),
      'items_list'            => esc_html__('Testimonial list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'limmex'),
    );
  
    $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'testimonial'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 16,
      'supports'           => array('title', 'author', 'thumbnail', 'excerpt', 'custom-fields'),
      'taxonomies'         => array('category', 'post_tag'),
      'show_in_rest'       => false,
    );
    register_post_type('testimonial', $args);

    //Partner Post
    $labels = array(
      'name' => esc_html__('partner', 'Post type general name', 'limmex'),
      'singular_name'         => esc_html__('Partner', 'Post type singular name', 'limmex'),
      'menu_name'             => esc_html__('Partner', 'Admin Menu text', 'limmex'),
      'name_admin_bar'        => esc_html__('Partner', 'Add New on Toolbar', 'limmex'),
      'add_new'               => esc_html__('Add New Partner', 'limmex'),
      'add_new_item'          => esc_html__('Add New Partner', 'limmex'),
      'new_item'              => esc_html__('New Partner', 'limmex'),
      'edit_item'             => esc_html__('Edit Partner', 'limmex'),
      'view_item'             => esc_html__('View Partner', 'limmex'),
      'all_items'             => esc_html__('All Partner', 'limmex'),
      'search_items'          => esc_html__('Search Partner', 'limmex'),
      'parent_item_colon'     => esc_html__('Parent Partner:', 'limmex'),
      'not_found'             => esc_html__('No Partner found.', 'limmex'),
      'not_found_in_trash'    => esc_html__('No Partner found in Trash.', 'limmex'),
      'featured_image'        => esc_html__('Partner Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'limmex'),
      'set_featured_image'    => esc_html__('Set Partner Featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'limmex'),
      'remove_featured_image' => esc_html__('Remove  Featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'limmex'),
      'use_featured_image'    => esc_html__('Use as Featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'limmex'),
      'archives'              => esc_html__('Partner archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'limmex'),
      'insert_into_item'      => esc_html__('Insert into Partner', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'limmex'),
      'uploaded_to_this_item' => esc_html__('Uploaded to this Partner', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'limmex'),
      'filter_items_list'     => esc_html__('Filter Partner list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'limmex'),
      'items_list_navigation' => esc_html__('Partner navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'limmex'),
      'items_list'            => esc_html__('Partner list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'limmex'),
    );
  
    $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'partner'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 17,
      'supports'           => array('title', 'author', 'thumbnail', 'custom-fields'),
      'taxonomies'         => array('category', 'post_tag'),
      'show_in_rest'       => false,
    );
    register_post_type('partner', $args);


}
add_action('init', 'limmex_theme_custom_posts');