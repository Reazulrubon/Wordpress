<?php 
/* Theme Functions FIles
*/

function html2wp_theme_setup(){
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size( 'home-featured', 680, 400, array('center','center'));
    add_image_size( 'single-img', 800, 700, array('center','center'));
    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary' => __('Primary Menu', 'html2wp')
    ) );

};

add_action('after_setup_theme', 'html2wp_theme_setup' );

function html2wp_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script('jquery');
    wp_enqueue_script('html2wp-bootstrap', get_template_directory_uri(),'/assets/js/bootstrap.min.js');
    wp_enqueue_script('html2wp-custom', get_template_directory_uri(), '/assets/js/custom.js');
}

add_action('wp_enqueue_scripts', 'html2wp_scripts');

function html2wp_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'html2wp' ),
        'id'            => 'main-sidebar',
        'description'   => 'Main sidebar on right side',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'html2wp' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'html2wp' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'html2wp' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init','html2wp_widgets_init' );

 require get_template_directory().'/inc/portfolio.php';




function wpdocs_register_Slider_cpt()
{

    $labels = array(
        'name'                     => __('Sliders', 'TEXTDOMAINHERE'),
        'singular_name'            => __('Slider', 'TEXTDOMAINHERE'),
        'add_new'                  => __('Add New', 'TEXTDOMAINHERE'),
        'add_new_item'             => __('Add New Slider', 'TEXTDOMAINHERE'),
        'edit_item'                => __('Edit Slider', 'TEXTDOMAINHERE'),
        'new_item'                 => __('New Slider', 'TEXTDOMAINHERE'),
        'view_item'                => __('View Slider', 'TEXTDOMAINHERE'),
        'view_items'               => __('View Sliders', 'TEXTDOMAINHERE'),
        'search_items'             => __('Search Sliders', 'TEXTDOMAINHERE'),
        'not_found'                => __('No Sliders found.', 'TEXTDOMAINHERE'),
        'not_found_in_trash'       => __('No Sliders found in Trash.', 'TEXTDOMAINHERE'),
        'parent_item_colon'        => __('Parent Sliders:', 'TEXTDOMAINHERE'),
        'all_items'                => __('All Sliders', 'TEXTDOMAINHERE'),
        'archives'                 => __('Slider Archives', 'TEXTDOMAINHERE'),
        'attributes'               => __('Slider Attributes', 'TEXTDOMAINHERE'),
        'insert_into_item'         => __('Insert into Slider', 'TEXTDOMAINHERE'),
        'uploaded_to_this_item'    => __('Uploaded to this Slider', 'TEXTDOMAINHERE'),
        'featured_image'           => __('Featured Image', 'TEXTDOMAINHERE'),
        'set_featured_image'       => __('Set featured image', 'TEXTDOMAINHERE'),
        'remove_featured_image'    => __('Remove featured image', 'TEXTDOMAINHERE'),
        'use_featured_image'       => __('Use as featured image', 'TEXTDOMAINHERE'),
        'menu_name'                => __('Sliders', 'TEXTDOMAINHERE'),
        'filter_items_list'        => __('Filter Slider list', 'TEXTDOMAINHERE'),
        'filter_by_date'           => __('Filter by date', 'TEXTDOMAINHERE'),
        'items_list_navigation'    => __('Sliders list navigation', 'TEXTDOMAINHERE'),
        'items_list'               => __('Sliders list', 'TEXTDOMAINHERE'),
        'item_published'           => __('Slider published.', 'TEXTDOMAINHERE'),
        'item_published_privately' => __('Slider published privately.', 'TEXTDOMAINHERE'),
        'item_reverted_to_draft'   => __('Slider reverted to draft.', 'TEXTDOMAINHERE'),
        'item_scheduled'           => __('Slider scheduled.', 'TEXTDOMAINHERE'),
        'item_updated'             => __('Slider updated.', 'TEXTDOMAINHERE'),
        'item_link'                => __('Slider Link', 'TEXTDOMAINHERE'),
        'item_link_description'    => __('A link to an Slider.', 'TEXTDOMAINHERE'),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => __('organize and manage company Sliders', 'TEXTDOMAINHERE'),
        'public'                => true,
        'menu_icon'             => 'dashicons-xing',
        'capability_type'       => 'post',
        'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );

    register_post_type('slider', $args);
}
add_action('init', 'wpdocs_register_Slider_cpt');
function wpdocs_register_two_cpt()
{

    $labels = array(
        'name'                     => __('twos', 'TEXTDOMAINHERE'),
        'singular_name'            => __('two', 'TEXTDOMAINHERE'),
        'add_new'                  => __('Add New', 'TEXTDOMAINHERE'),
        'add_new_item'             => __('Add New two', 'TEXTDOMAINHERE'),
        'edit_item'                => __('Edit two', 'TEXTDOMAINHERE'),
        'new_item'                 => __('New two', 'TEXTDOMAINHERE'),
        'view_item'                => __('View two', 'TEXTDOMAINHERE'),
        'view_items'               => __('View twos', 'TEXTDOMAINHERE'),
        'search_items'             => __('Search twos', 'TEXTDOMAINHERE'),
        'not_found'                => __('No twos found.', 'TEXTDOMAINHERE'),
        'not_found_in_trash'       => __('No twos found in Trash.', 'TEXTDOMAINHERE'),
        'parent_item_colon'        => __('Parent twos:', 'TEXTDOMAINHERE'),
        'all_items'                => __('All twos', 'TEXTDOMAINHERE'),
        'archives'                 => __('two Archives', 'TEXTDOMAINHERE'),
        'attributes'               => __('two Attributes', 'TEXTDOMAINHERE'),
        'insert_into_item'         => __('Insert into two', 'TEXTDOMAINHERE'),
        'uploaded_to_this_item'    => __('Uploaded to this two', 'TEXTDOMAINHERE'),
        'featured_image'           => __('Featured Image', 'TEXTDOMAINHERE'),
        'set_featured_image'       => __('Set featured image', 'TEXTDOMAINHERE'),
        'remove_featured_image'    => __('Remove featured image', 'TEXTDOMAINHERE'),
        'use_featured_image'       => __('Use as featured image', 'TEXTDOMAINHERE'),
        'menu_name'                => __('twos', 'TEXTDOMAINHERE'),
        'filter_items_list'        => __('Filter two list', 'TEXTDOMAINHERE'),
        'filter_by_date'           => __('Filter by date', 'TEXTDOMAINHERE'),
        'items_list_navigation'    => __('twos list navigation', 'TEXTDOMAINHERE'),
        'items_list'               => __('twos list', 'TEXTDOMAINHERE'),
        'item_published'           => __('two published.', 'TEXTDOMAINHERE'),
        'item_published_privately' => __('two published privately.', 'TEXTDOMAINHERE'),
        'item_reverted_to_draft'   => __('two reverted to draft.', 'TEXTDOMAINHERE'),
        'item_scheduled'           => __('two scheduled.', 'TEXTDOMAINHERE'),
        'item_updated'             => __('two updated.', 'TEXTDOMAINHERE'),
        'item_link'                => __('two Link', 'TEXTDOMAINHERE'),
        'item_link_description'    => __('A link to an two.', 'TEXTDOMAINHERE'),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => __('organize and manage company twos', 'TEXTDOMAINHERE'),
        'public'                => true,
        'menu_icon'             => 'dashicons-xing',
        'capability_type'       => 'post',
        'supports'              => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('two', $args);
}
add_action('init', 'wpdocs_register_two_cpt');

function wpdocs_register_team_cpt()
{

    $labels = array(
        'name'                     => __('teams', 'TEXTDOMAINHERE'),
        'singular_name'            => __('team', 'TEXTDOMAINHERE'),
        'add_new'                  => __('Add New', 'TEXTDOMAINHERE'),
        'add_new_item'             => __('Add New team', 'TEXTDOMAINHERE'),
        'edit_item'                => __('Edit team', 'TEXTDOMAINHERE'),
        'new_item'                 => __('New team', 'TEXTDOMAINHERE'),
        'view_item'                => __('View team', 'TEXTDOMAINHERE'),
        'view_items'               => __('View teams', 'TEXTDOMAINHERE'),
        'search_items'             => __('Search teams', 'TEXTDOMAINHERE'),
        'not_found'                => __('No teams found.', 'TEXTDOMAINHERE'),
        'not_found_in_trash'       => __('No teams found in Trash.', 'TEXTDOMAINHERE'),
        'parent_item_colon'        => __('Parent teams:', 'TEXTDOMAINHERE'),
        'all_items'                => __('All teams', 'TEXTDOMAINHERE'),
        'archives'                 => __('team Archives', 'TEXTDOMAINHERE'),
        'attributes'               => __('team Attributes', 'TEXTDOMAINHERE'),
        'insert_into_item'         => __('Insert into team', 'TEXTDOMAINHERE'),
        'uploaded_to_this_item'    => __('Uploaded to this team', 'TEXTDOMAINHERE'),
        'featured_image'           => __('Featured Image', 'TEXTDOMAINHERE'),
        'set_featured_image'       => __('Set featured image', 'TEXTDOMAINHERE'),
        'remove_featured_image'    => __('Remove featured image', 'TEXTDOMAINHERE'),
        'use_featured_image'       => __('Use as featured image', 'TEXTDOMAINHERE'),
        'menu_name'                => __('teams', 'TEXTDOMAINHERE'),
        'filter_items_list'        => __('Filter team list', 'TEXTDOMAINHERE'),
        'filter_by_date'           => __('Filter by date', 'TEXTDOMAINHERE'),
        'items_list_navigation'    => __('teams list navigation', 'TEXTDOMAINHERE'),
        'items_list'               => __('teams list', 'TEXTDOMAINHERE'),
        'item_published'           => __('team published.', 'TEXTDOMAINHERE'),
        'item_published_privately' => __('team published privately.', 'TEXTDOMAINHERE'),
        'item_reverted_to_draft'   => __('team reverted to draft.', 'TEXTDOMAINHERE'),
        'item_scheduled'           => __('team scheduled.', 'TEXTDOMAINHERE'),
        'item_updated'             => __('team updated.', 'TEXTDOMAINHERE'),
        'item_link'                => __('team Link', 'TEXTDOMAINHERE'),
        'item_link_description'    => __('A link to an team.', 'TEXTDOMAINHERE'),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => __('organize and manage company teams', 'TEXTDOMAINHERE'),
        'public'                => true,
        'menu_icon'             => 'dashicons-xing',
        'capability_type'       => 'post',
        'supports'              => array('title', 'editor', 'thumbnail','excerpt'),
    );

    register_post_type('team', $args);
}
add_action('init', 'wpdocs_register_team_cpt');
function wpdocs_register_service_cpt()
{

    $labels = array(
        'name'                     => __('services', 'TEXTDOMAINHERE'),
        'singular_name'            => __('service', 'TEXTDOMAINHERE'),
        'add_new'                  => __('Add New', 'TEXTDOMAINHERE'),
        'add_new_item'             => __('Add New service', 'TEXTDOMAINHERE'),
        'edit_item'                => __('Edit service', 'TEXTDOMAINHERE'),
        'new_item'                 => __('New service', 'TEXTDOMAINHERE'),
        'view_item'                => __('View service', 'TEXTDOMAINHERE'),
        'view_items'               => __('View services', 'TEXTDOMAINHERE'),
        'search_items'             => __('Search services', 'TEXTDOMAINHERE'),
        'not_found'                => __('No services found.', 'TEXTDOMAINHERE'),
        'not_found_in_trash'       => __('No services found in Trash.', 'TEXTDOMAINHERE'),
        'parent_item_colon'        => __('Parent services:', 'TEXTDOMAINHERE'),
        'all_items'                => __('All services', 'TEXTDOMAINHERE'),
        'archives'                 => __('service Archives', 'TEXTDOMAINHERE'),
        'attributes'               => __('service Attributes', 'TEXTDOMAINHERE'),
        'insert_into_item'         => __('Insert into service', 'TEXTDOMAINHERE'),
        'uploaded_to_this_item'    => __('Uploaded to this service', 'TEXTDOMAINHERE'),
        'featured_image'           => __('Featured Image', 'TEXTDOMAINHERE'),
        'set_featured_image'       => __('Set featured image', 'TEXTDOMAINHERE'),
        'remove_featured_image'    => __('Remove featured image', 'TEXTDOMAINHERE'),
        'use_featured_image'       => __('Use as featured image', 'TEXTDOMAINHERE'),
        'menu_name'                => __('services', 'TEXTDOMAINHERE'),
        'filter_items_list'        => __('Filter service list', 'TEXTDOMAINHERE'),
        'filter_by_date'           => __('Filter by date', 'TEXTDOMAINHERE'),
        'items_list_navigation'    => __('services list navigation', 'TEXTDOMAINHERE'),
        'items_list'               => __('services list', 'TEXTDOMAINHERE'),
        'item_published'           => __('service published.', 'TEXTDOMAINHERE'),
        'item_published_privately' => __('service published privately.', 'TEXTDOMAINHERE'),
        'item_reverted_to_draft'   => __('service reverted to draft.', 'TEXTDOMAINHERE'),
        'item_scheduled'           => __('service scheduled.', 'TEXTDOMAINHERE'),
        'item_updated'             => __('service updated.', 'TEXTDOMAINHERE'),
        'item_link'                => __('service Link', 'TEXTDOMAINHERE'),
        'item_link_description'    => __('A link to an service.', 'TEXTDOMAINHERE'),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => __('organize and manage company services', 'TEXTDOMAINHERE'),
        'public'                => true,
        'menu_icon'             => 'dashicons-xing',
        'capability_type'       => 'post',
        'supports'              => array('title', 'editor'),
    );

    register_post_type('service', $args);
}
add_action('init', 'wpdocs_register_service_cpt');

function my_customizer($wp_customize)
{
    // Theme Options Panel
    $wp_customize->add_panel(
        'my_theme_options',
        array(
            'title'            => __('Theme Options', 'my_theme'),
            'description'      => __('Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'my_theme'),
        )
    );

    $wp_customize->add_section(
        'text_options',
        array(
            'title'         => __('Text Options', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options'
        )
    );
    // Setting for Copyright text.
    $wp_customize->add_setting(
        'my_copyright_text',
        array(
            'default'           => __('All rights reserved ', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'my_copyright_text',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'text_options',
            'label'       => 'Copyright text',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    $wp_customize->add_setting('logo', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_setting('zahid', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_setting('rubon', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_setting('vedio', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_setting('skill', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_setting('contact', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'logo',
        array(
            'label'    => __('Logo', 'text-domain'),
            'section'  => 'text_options',
            'settings' => 'logo',
        )
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'zahid',
        array(
            'label'    => __('zahid', 'text-domain'),
            'section'  => 'text_options',
            'settings' => 'zahid',
        )
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'rubon',
        array(
            'label'    => __('rubon', 'text-domain'),
            'section'  => 'text_options',
            'settings' => 'rubon',
        )
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'skill',
        array(
            'label'    => __('skill', 'text-domain'),
            'section'  => 'text_options',
            'settings' => 'skill',
        )
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'vedio',
        array(
            'label'    => __('vedio', 'text-domain'),
            'section'  => 'text_options',
            'settings' => 'vedio',
        )
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'contact',
        array(
            'label'    => __('contact', 'text-domain'),
            'section'  => 'text_options',
            'settings' => 'contact',
        )
    ));
}
function ic_sanitize_image($file, $setting)
{

    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );

    //check file type from file name
    $file_ext = wp_check_filetype($file, $mimes);
    //if file has a valid mime type return it, otherwise return default
    return ($file_ext['ext'] ? $file : $setting->default);
}

add_action('customize_register', 'my_customizer');



// what client say.......

function wpdocs_register_client_cpt()
{

    $labels = array(
        'name'                     => __('clients', 'TEXTDOMAINHERE'),
        'singular_name'            => __('client', 'TEXTDOMAINHERE'),
        'add_new'                  => __('Add New', 'TEXTDOMAINHERE'),
        'add_new_item'             => __('Add New client', 'TEXTDOMAINHERE'),
        'edit_item'                => __('Edit client', 'TEXTDOMAINHERE'),
        'new_item'                 => __('New client', 'TEXTDOMAINHERE'),
        'view_item'                => __('View client', 'TEXTDOMAINHERE'),
        'view_items'               => __('View clients', 'TEXTDOMAINHERE'),
        'search_items'             => __('Search clients', 'TEXTDOMAINHERE'),
        'not_found'                => __('No clients found.', 'TEXTDOMAINHERE'),
        'not_found_in_trash'       => __('No clients found in Trash.', 'TEXTDOMAINHERE'),
        'parent_item_colon'        => __('Parent clients:', 'TEXTDOMAINHERE'),
        'all_items'                => __('All clients', 'TEXTDOMAINHERE'),
        'archives'                 => __('client Archives', 'TEXTDOMAINHERE'),
        'attributes'               => __('client Attributes', 'TEXTDOMAINHERE'),
        'insert_into_item'         => __('Insert into client', 'TEXTDOMAINHERE'),
        'uploaded_to_this_item'    => __('Uploaded to this client', 'TEXTDOMAINHERE'),
        'featured_image'           => __('Featured Image', 'TEXTDOMAINHERE'),
        'set_featured_image'       => __('Set featured image', 'TEXTDOMAINHERE'),
        'remove_featured_image'    => __('Remove featured image', 'TEXTDOMAINHERE'),
        'use_featured_image'       => __('Use as featured image', 'TEXTDOMAINHERE'),
        'menu_name'                => __('clients', 'TEXTDOMAINHERE'),
        'filter_items_list'        => __('Filter client list', 'TEXTDOMAINHERE'),
        'filter_by_date'           => __('Filter by date', 'TEXTDOMAINHERE'),
        'items_list_navigation'    => __('clients list navigation', 'TEXTDOMAINHERE'),
        'items_list'               => __('clients list', 'TEXTDOMAINHERE'),
        'item_published'           => __('client published.', 'TEXTDOMAINHERE'),
        'item_published_privately' => __('client published privately.', 'TEXTDOMAINHERE'),
        'item_reverted_to_draft'   => __('client reverted to draft.', 'TEXTDOMAINHERE'),
        'item_scheduled'           => __('client scheduled.', 'TEXTDOMAINHERE'),
        'item_updated'             => __('client updated.', 'TEXTDOMAINHERE'),
        'item_link'                => __('client Link', 'TEXTDOMAINHERE'),
        'item_link_description'    => __('A link to an client.', 'TEXTDOMAINHERE'),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => __('organize and manage company clients', 'TEXTDOMAINHERE'),
        'public'                => true,
        'menu_icon'             => 'dashicons-xing',
        'capability_type'       => 'post',
        'supports'              => array( 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('client', $args);
}
add_action('init', 'wpdocs_register_client_cpt');

// history......

function wpdocs_register_history_cpt()
{

    $labels = array(
        'name'                     => __('historys', 'TEXTDOMAINHERE'),
        'singular_name'            => __('history', 'TEXTDOMAINHERE'),
        'add_new'                  => __('Add New', 'TEXTDOMAINHERE'),
        'add_new_item'             => __('Add New history', 'TEXTDOMAINHERE'),
        'edit_item'                => __('Edit history', 'TEXTDOMAINHERE'),
        'new_item'                 => __('New history', 'TEXTDOMAINHERE'),
        'view_item'                => __('View history', 'TEXTDOMAINHERE'),
        'view_items'               => __('View historys', 'TEXTDOMAINHERE'),
        'search_items'             => __('Search historys', 'TEXTDOMAINHERE'),
        'not_found'                => __('No historys found.', 'TEXTDOMAINHERE'),
        'not_found_in_trash'       => __('No historys found in Trash.', 'TEXTDOMAINHERE'),
        'parent_item_colon'        => __('Parent historys:', 'TEXTDOMAINHERE'),
        'all_items'                => __('All historys', 'TEXTDOMAINHERE'),
        'archives'                 => __('history Archives', 'TEXTDOMAINHERE'),
        'attributes'               => __('history Attributes', 'TEXTDOMAINHERE'),
        'insert_into_item'         => __('Insert into history', 'TEXTDOMAINHERE'),
        'uploaded_to_this_item'    => __('Uploaded to this history', 'TEXTDOMAINHERE'),
        'featured_image'           => __('Featured Image', 'TEXTDOMAINHERE'),
        'set_featured_image'       => __('Set featured image', 'TEXTDOMAINHERE'),
        'remove_featured_image'    => __('Remove featured image', 'TEXTDOMAINHERE'),
        'use_featured_image'       => __('Use as featured image', 'TEXTDOMAINHERE'),
        'menu_name'                => __('historys', 'TEXTDOMAINHERE'),
        'filter_items_list'        => __('Filter history list', 'TEXTDOMAINHERE'),
        'filter_by_date'           => __('Filter by date', 'TEXTDOMAINHERE'),
        'items_list_navigation'    => __('historys list navigation', 'TEXTDOMAINHERE'),
        'items_list'               => __('historys list', 'TEXTDOMAINHERE'),
        'item_published'           => __('history published.', 'TEXTDOMAINHERE'),
        'item_published_privately' => __('history published privately.', 'TEXTDOMAINHERE'),
        'item_reverted_to_draft'   => __('history reverted to draft.', 'TEXTDOMAINHERE'),
        'item_scheduled'           => __('history scheduled.', 'TEXTDOMAINHERE'),
        'item_updated'             => __('history updated.', 'TEXTDOMAINHERE'),
        'item_link'                => __('history Link', 'TEXTDOMAINHERE'),
        'item_link_description'    => __('A link to an history.', 'TEXTDOMAINHERE'),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => __('organize and manage company historys', 'TEXTDOMAINHERE'),
        'public'                => true,
        'menu_icon'             => 'dashicons-xing',
        'capability_type'       => 'post',
        'supports'              => array( 'title','editor','excerpt'),
    );

    register_post_type('history', $args);
}
add_action('init', 'wpdocs_register_history_cpt');


// history 2.....

function wpdocs_register_historyxx_cpt()
{

    $labels = array(
        'name'                     => __('historyxxs', 'TEXTDOMAINHERE'),
        'singular_name'            => __('historyxx', 'TEXTDOMAINHERE'),
        'add_new'                  => __('Add New', 'TEXTDOMAINHERE'),
        'add_new_item'             => __('Add New historyxx', 'TEXTDOMAINHERE'),
        'edit_item'                => __('Edit historyxx', 'TEXTDOMAINHERE'),
        'new_item'                 => __('New historyxx', 'TEXTDOMAINHERE'),
        'view_item'                => __('View historyxx', 'TEXTDOMAINHERE'),
        'view_items'               => __('View historyxxs', 'TEXTDOMAINHERE'),
        'search_items'             => __('Search historyxxs', 'TEXTDOMAINHERE'),
        'not_found'                => __('No historyxxs found.', 'TEXTDOMAINHERE'),
        'not_found_in_trash'       => __('No historyxxs found in Trash.', 'TEXTDOMAINHERE'),
        'parent_item_colon'        => __('Parent historyxxs:', 'TEXTDOMAINHERE'),
        'all_items'                => __('All historyxxs', 'TEXTDOMAINHERE'),
        'archives'                 => __('historyxx Archives', 'TEXTDOMAINHERE'),
        'attributes'               => __('historyxx Attributes', 'TEXTDOMAINHERE'),
        'insert_into_item'         => __('Insert into historyxx', 'TEXTDOMAINHERE'),
        'uploaded_to_this_item'    => __('Uploaded to this historyxx', 'TEXTDOMAINHERE'),
        'featured_image'           => __('Featured Image', 'TEXTDOMAINHERE'),
        'set_featured_image'       => __('Set featured image', 'TEXTDOMAINHERE'),
        'remove_featured_image'    => __('Remove featured image', 'TEXTDOMAINHERE'),
        'use_featured_image'       => __('Use as featured image', 'TEXTDOMAINHERE'),
        'menu_name'                => __('historyxxs', 'TEXTDOMAINHERE'),
        'filter_items_list'        => __('Filter historyxx list', 'TEXTDOMAINHERE'),
        'filter_by_date'           => __('Filter by date', 'TEXTDOMAINHERE'),
        'items_list_navigation'    => __('historyxxs list navigation', 'TEXTDOMAINHERE'),
        'items_list'               => __('historyxxs list', 'TEXTDOMAINHERE'),
        'item_published'           => __('historyxx published.', 'TEXTDOMAINHERE'),
        'item_published_privately' => __('historyxx published privately.', 'TEXTDOMAINHERE'),
        'item_reverted_to_draft'   => __('historyxx reverted to draft.', 'TEXTDOMAINHERE'),
        'item_scheduled'           => __('historyxx scheduled.', 'TEXTDOMAINHERE'),
        'item_updated'             => __('historyxx updated.', 'TEXTDOMAINHERE'),
        'item_link'                => __('historyxx Link', 'TEXTDOMAINHERE'),
        'item_link_description'    => __('A link to an historyxx.', 'TEXTDOMAINHERE'),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => __('organize and manage company historyxxs', 'TEXTDOMAINHERE'),
        'public'                => true,
        'menu_icon'             => 'dashicons-xing',
        'capability_type'       => 'post',
        'supports'              => array( 'title','editor','excerpt'),
    );

    register_post_type('historyxx', $args);
}
add_action('init', 'wpdocs_register_historyxx_cpt');


// Technical Skill ......


function wpdocs_register_skill_cpt()
{

    $labels = array(
        'name'                     => __('skills', 'TEXTDOMAINHERE'),
        'singular_name'            => __('skill', 'TEXTDOMAINHERE'),
        'add_new'                  => __('Add New', 'TEXTDOMAINHERE'),
        'add_new_item'             => __('Add New skill', 'TEXTDOMAINHERE'),
        'edit_item'                => __('Edit skill', 'TEXTDOMAINHERE'),
        'new_item'                 => __('New skill', 'TEXTDOMAINHERE'),
        'view_item'                => __('View skill', 'TEXTDOMAINHERE'),
        'view_items'               => __('View skills', 'TEXTDOMAINHERE'),
        'search_items'             => __('Search skills', 'TEXTDOMAINHERE'),
        'not_found'                => __('No skills found.', 'TEXTDOMAINHERE'),
        'not_found_in_trash'       => __('No skills found in Trash.', 'TEXTDOMAINHERE'),
        'parent_item_colon'        => __('Parent skills:', 'TEXTDOMAINHERE'),
        'all_items'                => __('All skills', 'TEXTDOMAINHERE'),
        'archives'                 => __('skill Archives', 'TEXTDOMAINHERE'),
        'attributes'               => __('skill Attributes', 'TEXTDOMAINHERE'),
        'insert_into_item'         => __('Insert into skill', 'TEXTDOMAINHERE'),
        'uploaded_to_this_item'    => __('Uploaded to this skill', 'TEXTDOMAINHERE'),
        'featured_image'           => __('Featured Image', 'TEXTDOMAINHERE'),
        'set_featured_image'       => __('Set featured image', 'TEXTDOMAINHERE'),
        'remove_featured_image'    => __('Remove featured image', 'TEXTDOMAINHERE'),
        'use_featured_image'       => __('Use as featured image', 'TEXTDOMAINHERE'),
        'menu_name'                => __('skills', 'TEXTDOMAINHERE'),
        'filter_items_list'        => __('Filter skill list', 'TEXTDOMAINHERE'),
        'filter_by_date'           => __('Filter by date', 'TEXTDOMAINHERE'),
        'items_list_navigation'    => __('skills list navigation', 'TEXTDOMAINHERE'),
        'items_list'               => __('skills list', 'TEXTDOMAINHERE'),
        'item_published'           => __('skill published.', 'TEXTDOMAINHERE'),
        'item_published_privately' => __('skill published privately.', 'TEXTDOMAINHERE'),
        'item_reverted_to_draft'   => __('skill reverted to draft.', 'TEXTDOMAINHERE'),
        'item_scheduled'           => __('skill scheduled.', 'TEXTDOMAINHERE'),
        'item_updated'             => __('skill updated.', 'TEXTDOMAINHERE'),
        'item_link'                => __('skill Link', 'TEXTDOMAINHERE'),
        'item_link_description'    => __('A link to an skill.', 'TEXTDOMAINHERE'),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => __('organize and manage company skills', 'TEXTDOMAINHERE'),
        'public'                => true,
        'menu_icon'             => 'dashicons-xing',
        'capability_type'       => 'post',
        'supports'              => array( 'title','editor','custom-fields'),
    );

    register_post_type('skill', $args);
}
add_action('init', 'wpdocs_register_skill_cpt');

   

// OUR CLIENTS................




function wpdocs_register_our_client_cpt()
{

    $labels = array(
        'name'                     => __('our_clients', 'TEXTDOMAINHERE'),
        'singular_name'            => __('our_client', 'TEXTDOMAINHERE'),
        'add_new'                  => __('Add New', 'TEXTDOMAINHERE'),
        'add_new_item'             => __('Add New our_client', 'TEXTDOMAINHERE'),
        'edit_item'                => __('Edit our_client', 'TEXTDOMAINHERE'),
        'new_item'                 => __('New our_client', 'TEXTDOMAINHERE'),
        'view_item'                => __('View our_client', 'TEXTDOMAINHERE'),
        'view_items'               => __('View our_clients', 'TEXTDOMAINHERE'),
        'search_items'             => __('Search our_clients', 'TEXTDOMAINHERE'),
        'not_found'                => __('No our_clients found.', 'TEXTDOMAINHERE'),
        'not_found_in_trash'       => __('No our_clients found in Trash.', 'TEXTDOMAINHERE'),
        'parent_item_colon'        => __('Parent our_clients:', 'TEXTDOMAINHERE'),
        'all_items'                => __('All our_clients', 'TEXTDOMAINHERE'),
        'archives'                 => __('our_client Archives', 'TEXTDOMAINHERE'),
        'attributes'               => __('our_client Attributes', 'TEXTDOMAINHERE'),
        'insert_into_item'         => __('Insert into our_client', 'TEXTDOMAINHERE'),
        'uploaded_to_this_item'    => __('Uploaded to this our_client', 'TEXTDOMAINHERE'),
        'featured_image'           => __('Featured Image', 'TEXTDOMAINHERE'),
        'set_featured_image'       => __('Set featured image', 'TEXTDOMAINHERE'),
        'remove_featured_image'    => __('Remove featured image', 'TEXTDOMAINHERE'),
        'use_featured_image'       => __('Use as featured image', 'TEXTDOMAINHERE'),
        'menu_name'                => __('our_clients', 'TEXTDOMAINHERE'),
        'filter_items_list'        => __('Filter our_client list', 'TEXTDOMAINHERE'),
        'filter_by_date'           => __('Filter by date', 'TEXTDOMAINHERE'),
        'items_list_navigation'    => __('our_clients list navigation', 'TEXTDOMAINHERE'),
        'items_list'               => __('our_clients list', 'TEXTDOMAINHERE'),
        'item_published'           => __('our_client published.', 'TEXTDOMAINHERE'),
        'item_published_privately' => __('our_client published privately.', 'TEXTDOMAINHERE'),
        'item_reverted_to_draft'   => __('our_client reverted to draft.', 'TEXTDOMAINHERE'),
        'item_scheduled'           => __('our_client scheduled.', 'TEXTDOMAINHERE'),
        'item_updated'             => __('our_client updated.', 'TEXTDOMAINHERE'),
        'item_link'                => __('our_client Link', 'TEXTDOMAINHERE'),
        'item_link_description'    => __('A link to an our_client.', 'TEXTDOMAINHERE'),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => __('organize and manage company our_clients', 'TEXTDOMAINHERE'),
        'public'                => true,
        'menu_icon'             => 'dashicons-xing',
        'capability_type'       => 'post',
        'supports'              => array('thumbnail'),
    );

    register_post_type('our_client', $args);
}
add_action('init', 'wpdocs_register_our_client_cpt');

add_action( 'add_meta_boxes', 'add_meta_listening_to' );
function add_meta_listening_to() {
  add_meta_box(
    'meta_listening_to', //id
    'Listening to ...', //title
    'listeningto', //callback
    'post', //screen &/or post type
    'normal', //context
    'high', //priority
    null //callback_args
  );
};

function listeningto( $post ) { //function handle same as callback
  $ListeningToInput = get_post_meta( $post->ID, 'ListeningToInput', true );
  echo '<input name="listening_to_input" type="text" placeholder="Listening to ..." value="'. $ListeningToInput .'" style="width:100%;">';
};

add_action( 'save_post', 'save_meta_listening_to' );
function save_meta_listening_to( $post_ID ) {
  if ( isset( $_POST[ 'listening_to_input' ] ) ) {
    update_post_meta( $post_ID, 'ListeningToInput', $_POST[ 'listening_to_input' ] );
  };
};

function set_my_sidebar()
{
    register_sidebar(array(
        'name'          => 'Sidebar', 'textdomain',
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    ));
    register_sidebar(array(
        'name'          => 'Sidebar two', 'textdomain',
        'id'            => 'sidebar-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    ));
}
add_action('widgets_init', 'set_my_sidebar');

            // slider

            function wpdocs_register_rakib_cpt()
            {
            
                $labels = array(
                    'name'                     => __('rakibs', 'TEXTDOMAINHERE'),
                    'singular_name'            => __('rakib', 'TEXTDOMAINHERE'),
                    'add_new'                  => __('Add New', 'TEXTDOMAINHERE'),
                    'add_new_item'             => __('Add New rakib', 'TEXTDOMAINHERE'),
                    'edit_item'                => __('Edit rakib', 'TEXTDOMAINHERE'),
                    'new_item'                 => __('New rakib', 'TEXTDOMAINHERE'),
                    'view_item'                => __('View rakib', 'TEXTDOMAINHERE'),
                    'view_items'               => __('View rakibs', 'TEXTDOMAINHERE'),
                    'search_items'             => __('Search rakibs', 'TEXTDOMAINHERE'),
                    'not_found'                => __('No rakibs found.', 'TEXTDOMAINHERE'),
                    'not_found_in_trash'       => __('No rakibs found in Trash.', 'TEXTDOMAINHERE'),
                    'parent_item_colon'        => __('Parent rakibs:', 'TEXTDOMAINHERE'),
                    'all_items'                => __('All rakibs', 'TEXTDOMAINHERE'),
                    'archives'                 => __('rakib Archives', 'TEXTDOMAINHERE'),
                    'attributes'               => __('rakib Attributes', 'TEXTDOMAINHERE'),
                    'insert_into_item'         => __('Insert into rakib', 'TEXTDOMAINHERE'),
                    'uploaded_to_this_item'    => __('Uploaded to this rakib', 'TEXTDOMAINHERE'),
                    'featured_image'           => __('Featured Image', 'TEXTDOMAINHERE'),
                    'set_featured_image'       => __('Set featured image', 'TEXTDOMAINHERE'),
                    'remove_featured_image'    => __('Remove featured image', 'TEXTDOMAINHERE'),
                    'use_featured_image'       => __('Use as featured image', 'TEXTDOMAINHERE'),
                    'menu_name'                => __('rakibs', 'TEXTDOMAINHERE'),
                    'filter_items_list'        => __('Filter rakib list', 'TEXTDOMAINHERE'),
                    'filter_by_date'           => __('Filter by date', 'TEXTDOMAINHERE'),
                    'items_list_navigation'    => __('rakibs list navigation', 'TEXTDOMAINHERE'),
                    'items_list'               => __('rakibs list', 'TEXTDOMAINHERE'),
                    'item_published'           => __('rakib published.', 'TEXTDOMAINHERE'),
                    'item_published_privately' => __('rakib published privately.', 'TEXTDOMAINHERE'),
                    'item_reverted_to_draft'   => __('rakib reverted to draft.', 'TEXTDOMAINHERE'),
                    'item_scheduled'           => __('rakib scheduled.', 'TEXTDOMAINHERE'),
                    'item_updated'             => __('rakib updated.', 'TEXTDOMAINHERE'),
                    'item_link'                => __('rakib Link', 'TEXTDOMAINHERE'),
                    'item_link_description'    => __('A link to an rakib.', 'TEXTDOMAINHERE'),
                );
            
                $args = array(
                    'labels'                => $labels,
                    'description'           => __('organize and manage company rakibs', 'TEXTDOMAINHERE'),
                    'public'                => true,
                    'menu_icon'             => 'dashicons-xing',
                    'capability_type'       => 'post',
                    'supports'              => array( 'title','thumbnail'),
                );
            
                register_post_type('rakib', $args);
            }
            add_action('init', 'wpdocs_register_rakib_cpt');
