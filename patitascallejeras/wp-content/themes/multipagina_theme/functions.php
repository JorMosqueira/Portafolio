<?php

// MOSTRAR MINIATURA
add_theme_support('post-thumbnails');

// MOSTRAR MENU EN WORDPRESS
add_theme_support( 'nav-menus' );
register_nav_menus(array('menu' => __('menu')));
register_nav_menus(array('menu-footer' => __('menu-footer')));

// CSS
    function mi_css_personalizado(){
        wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), '1.0.0');
    }
    add_action('wp_enqueue_scripts', 'mi_css_personalizado');

add_theme_support( 'custom-logo', array(
	'height'      => 300,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}



//----------------JQUERY---------------------
function load_jquerys() {
  wp_enqueue_script('jquerys',  get_stylesheet_directory_uri().'/assets/jquery-3.7.0.min.js', array(), '3.7.0', true);
}
add_action('wp_enqueue_scripts', 'load_jquerys');

/* LLAMADO AL OWL CAROUSEL */

add_action('wp_enqueue_scripts', 'mi_js_personalizado');

function mi_js_personalizado(){
  wp_register_script('main', get_stylesheet_directory_uri().'/assets/main.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('main');
}

/* LLAMADO AL JS */

add_action('wp_enqueue_scripts', 'mi_jssingle_personalizado');

function mi_jssingle_personalizado(){
  wp_register_script('script', get_stylesheet_directory_uri().'/assets/js/script.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('script');
}
//-------------------OWL CAROUSEL-----------------------
add_action('wp_enqueue_scripts', 'carousel_min_js');

function carousel_min_js(){
  wp_register_script('carouseljs', get_stylesheet_directory_uri().'/assets/owl.carousel.min.js', array('jquery'), '1.0.2', true);
    wp_enqueue_script('carouseljs');
  }

  add_action('wp_enqueue_scripts', 'carousel_css');
  function carousel_css(){
    wp_enqueue_style('carousel_css', get_template_directory_uri().'/assets/owl.carousel.min.css', array(), '1.0.2');
    }

    add_action('wp_enqueue_scripts', 'carousel_css_theme');
  function carousel_css_theme(){
    wp_enqueue_style('carousel_css_theme', get_template_directory_uri().'/assets/owl.theme.default.min.css', array(), '1.0.2');
    }

//-------------------------PARTICLES JS---------------------

add_action('wp_enqueue_scripts', 'particl_js');

function particl_js(){
  if (is_front_page()) {
    wp_register_script('particl', get_stylesheet_directory_uri().'/assets/particles.js', array(), '1.0.0', true);
    wp_enqueue_script('particl');
  }
}

  //----------------PARTICLES APP------------------
  add_action('wp_enqueue_scripts', 'particles_app');

  function particles_app(){
    if (is_front_page()) {
      wp_register_script('app', get_stylesheet_directory_uri().'/assets/js/demo/js/app.js', array(), '1.0.0', true);
      wp_enqueue_script('app');
    }
  }
  //----------------PARTICLES STATS-----------------
  add_action('wp_enqueue_scripts', 'particles_stats');

  function particles_stats(){
    if (is_front_page()) {
      wp_register_script('stats', get_stylesheet_directory_uri().'/assets/js/demo/js/lib/stats.js', array(), '1.0.0', true);
      wp_enqueue_script('stats');
    }
  }
     //----------------PARTICLES CSS-----------------
  add_action('wp_enqueue_scripts', 'particles_css');

  function particles_css(){
    if (is_front_page()) {
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0');
    }
  }

?>

