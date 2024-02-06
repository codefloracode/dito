<?php
// Enqueue styles and scripts
function enqueue_theme_styles() {
    // Enqueue the main style.css file from the assets folder
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

function my_theme_enqueue_scripts() {
    wp_enqueue_script('my-first-script', get_template_directory_uri() . '/assets/js/jquery-min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('my-second-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

add_filter('use_block_editor_for_post', 'disable_gutenberg_on_settings_page', 5, 2);

function disable_gutenberg_on_settings_page($can, $post){
    if($post){
        if($post->post_name === "footer"){
            return false;
        }
    }
    return $can;
}

function hide_settings_page($query) {
    if ( !is_admin() && !is_main_query() ) {
        return;
    }    
    global $typenow;
    if ($typenow === "page") {
        $settings_page = get_page_by_path("footer",NULL,"page")->ID;
        $query->set( 'post__not_in', array($settings_page) );    
    }
    return;

}

add_action('pre_get_posts', 'hide_settings_page');

function add_site_settings_to_menu(){
    add_menu_page( 'Footer', 'Footer', 'manage_options', 'post.php?post='.get_page_by_path("footer",NULL,"page")->ID.'&action=edit', '', 'dashicons-admin-tools', 20);
}
add_action( 'admin_menu', 'add_site_settings_to_menu' );

// Change the active menu item

add_filter('parent_file', 'higlight_custom_settings_page');

function higlight_custom_settings_page($file) {
    global $parent_file;
    global $pagenow;
    global $typenow, $self;

    $settings_page = get_page_by_path("footer",NULL,"page")->ID;

    $post = (int)$_GET["post"];
    if ($pagenow === "post.php" && $post === $settings_page) {
        $file = "post.php?post=$settings_page&action=edit";
    }
    return $file;
}

function edit_site_settings_title() {
    global $post, $title, $action, $current_screen;
    if( isset( $current_screen->post_type ) && $current_screen->post_type === 'page' && $action == 'edit' && $post->post_name === "site-settings") {
        $title = $post->post_title.' - '.get_bloginfo('name');           
    }
    return $title;  
}

add_action( 'admin_title', 'edit_site_settings_title' );


?>