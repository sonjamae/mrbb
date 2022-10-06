<?php
function twentytwentyone_child_styles() {
$parent_style = 'parent-style';
wp_enqueue_style($parent_style, get_template_directory_uri().'/style.css');
wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css', array($parent_style), '1.00');
//wp_enqueue_script('main', get_stylesheet_directory_uri().'/includes/js/main.js', array('jquery'), '3.1.1', true);
}
add_action('wp_enqueue_scripts', 'twentytwentyone_child_styles');


// add_action( 'widgets_init', 'child_register_sidebar' );
// function child_register_sidebar(){
// 	register_sidebar(array(
// 		'name' => 'Sidebar',
// 		'id' => 'sidebar',
// 		'before_widget' => '<div id="%3$s" class="widget %3$s">',
// 		'after_widget' => '</div>',
// 		'before_title' => '<h4 class="widgettitle">',
// 		'after_title' => '</h4>',
// 	));
// }

// custom fonts
function add_google_fonts() {
    wp_register_style( 'googleFonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display&display=swap', array(), null);
    wp_enqueue_style( 'googleFonts');
}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

// Redirect function for the SOAER Presentations page.
add_action('template_redirect', function() {
    // ID of the redirect page
    if (!is_page(1730)) {
        return;
    }
    // URL of page with form that needs to be filled before access:
    if (wp_get_referer() === 'https://sonjamae.ca/mrbb/soaer-committee/soaer-presentations/') {
        return;
    }
	// Redirect to the page with the form:
    wp_redirect('https://sonjamae.ca/mrbb/soaer-committee/soaer-presentations/');
    exit;
} );
