<?php

// Enqueue CSS styles
function theme_styles() {

  wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_style('ie10workaround_css', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css');
  wp_enqueue_style('sticky_footer', get_template_directory_uri() . '/css/sticky-footer-navbar.css');
  wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');



// Enqueue JS Scripts
function theme_js() {

    global $wp_scripts;
    // EXAMPLE structrue: wp_enqueue_script('HANDLE_name', 'Link>to>Source', 'DEPENDANCIES', 'VERSION-Number', false = header / true = footer );
    wp_enqueue_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false );
    wp_enqueue_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );

    $wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
    $wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');
}
add_action('wp_enqueue_scripts', 'theme_js');



// For Theme support
add_theme_support( 'menus');
add_theme_support( 'post-thumbnails' );



// Adds "theme menu" to header location
function register_theme_menus() {

  register_nav_menus(
    array (
      'header-menu'   =>  __( 'Header Menu')
    )
  );
}
add_action( 'init', 'register_theme_menus');



// Create widgets
function create_widget( $name, $id, $description) {
  register_sidebar( array(
    'name'          =>  __( $name ),
    'id'            =>  $id,
    'description'   =>  __( $description ),
    'before_widget' =>  '<div class="widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3>',
    'after_title'   =>  '</h3>'
  ));
}

// Home page widgets for home page ( found in front-page.php )
create_widget('Front page left', 'front-left', 'Display on the front left side');
create_widget('Front page center', 'front-center', 'Display in the center of the page');
create_widget('Front page right', 'front-right', 'Display on the right side of the page');

// Side bar widgets ( found in sidebar.php and sidebar-blog.php  )
create_widget('Sidebar Page', 'pageside', 'Display on the right side of a page');
create_widget('Sidebar Blog', 'blog', 'Display on the right side of a blog');

?>
