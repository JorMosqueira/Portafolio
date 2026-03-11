<?php


function stm_wcmap_enqueue_scripts_styles($handle, $name)
{
    wp_enqueue_style('stm-wcmap-' . $handle, STM_WCMAP_URL . '/assets/css/' . $name . '.css', array(), time());
    wp_enqueue_script('stm-wcmap-' . $handle, STM_WCMAP_URL . '/assets/js/' . $name . '.js', array('jquery'), time(), true);

    wp_enqueue_style('owl.carousel', STM_WCMAP_URL . '/assets/css/owl.carousel.css', array());
    wp_enqueue_script('owl.carousel', STM_WCMAP_URL . '/assets/js/owl.carousel.js', array('jquery'), null, true);
}

function stm_wcmap_admin_scripts_styles () {
    wp_enqueue_style('stm-datetimepicker', STM_WCMAP_URL . '/assets/css/jquery.stmdatetimepicker.css', null, null, 'all');
    wp_enqueue_script('stm-datetimepicker', STM_WCMAP_URL . '/assets/js/jquery.stmdatetimepicker.js', array('jquery'), null, true);

    wp_enqueue_script('jquery-ui-datepicker');

    wp_enqueue_style('stm-listings-timepicker', STM_WCMAP_URL . '/assets/css/jquery.timepicker.css', null, null, 'all');
    wp_enqueue_script('stm-listings-timepicker', STM_WCMAP_URL . '/assets/js/jquery.timepicker.js', array('jquery'), null, true);

    wp_enqueue_style( 'stm-theme-etm-style', STM_WCMAP_URL . '/assets/css/admin-style.css' );
}

add_action( 'admin_enqueue_scripts', 'stm_wcmap_admin_scripts_styles' );