<?php

function car_enqueue_scripts(){
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css');
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css', [], 2022, 'all');
    wp_enqueue_style('tempusdominus-bootstrap', get_template_directory_uri() . '/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', [], 2022, 'all');
    wp_enqueue_style('car-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], 2022, 'all');
    wp_enqueue_style('car-style', get_template_directory_uri() . '/assets/css/style.css', [], 2022, 'all');

    wp_enqueue_script('bootstrap.bundle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', [], 2022, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', ['jquery'], 2022, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', ['jquery'], 2022, true);
    wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', ['jquery'], 2022, true);
    wp_enqueue_script('moment', get_template_directory_uri() . '/assets/lib/tempusdominus/js/moment.min.js', ['jquery'], 2022, true);
    wp_enqueue_script('moment-timezone', get_template_directory_uri() . '/assets/lib/tempusdominus/js/moment-timezone.min.js', ['jquery'], 2022, true);
    wp_enqueue_script('tempusdominus-bootstrap', get_template_directory_uri() . '/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', ['jquery'], 2022, true);
    wp_enqueue_script('car-main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], 2022, true);
}

add_action('wp_enqueue_scripts', 'car_enqueue_scripts');


register_nav_menus([
    'menu-header' => 'Меню в шапке',
    'menu-footer' => 'Меню в подвале'
]);


// Добавляем свой класс лишкам
function car_add_class_on_li($classes, $item, $args){
    if(isset($args->add_li_class)){
        $classes[] = $args->add_li_class;
        return $classes;
    }
}
add_action('nav_menu_css_class', 'car_add_class_on_li',1,3);// Приоритет 1 кол-во передаваемых параметров 3 ,без этого у меня не работало
// Добавляем свой класс лишкам

// Добавляем классы ссылкам с классом active , то есть добавляем класс активной ссылке
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {

	if ( $item->current ) {
		$class = 'active';
		$atts['class'] = isset( $atts['class'] ) ? "{$atts['class']} $class" : $class;
	}

	return $atts;
}
// Добавляем классы ссылкам с классом active , то есть добавляем класс активной ссылке


function car_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}


add_action('after_setup_theme', 'car_setup');