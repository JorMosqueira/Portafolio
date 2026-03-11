<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$sidebars = array('no_sidebar' => 'No Sidebar');
$query = get_posts(array('post_type' => 'sidebar', 'posts_per_page' => -1));

if ($query) {
    foreach ($query as $post) {
        $sidebars[$post->ID] = get_the_title($post->ID);
    }
}

$wcmap_features = array(
	'wcmap_best_selling_ico' => array(
		'label' => esc_html__('Icon For Best Seller Product', 'stm-woocommerce-motors-auto-parts'),
		'type' => 'image'
	),
	'wcmap_top_rate_ico' => array(
		'label' => esc_html__('Icon For Top Rated Product', 'stm-woocommerce-motors-auto-parts'),
		'type' => 'image'
	),
	'wcmap_sale_ico' => array(
		'label' => esc_html__('Icon For Sale Product', 'stm-woocommerce-motors-auto-parts'),
		'type' => 'image'
	),
	'wcmap_best_sell_min' => array(
		'label' => esc_html__('Best Seller Product Minimum Amount', 'stm-woocommerce-motors-auto-parts'),
		'type' => 'text',
		'default' => 10,
	),
    'wcmap_best_rate_min' => array(
        'label' => esc_html__('Best Rated Minimum Average', 'stm-woocommerce-motors-auto-parts'),
        'type' => 'text',
        'default' => 4.5
    ),
    'wcmap_single_product_template' => array(
        'label' => esc_html__('Single Product Template', 'stm-woocommerce-motors-auto-parts'),
        'type' => 'stm-select',
        'choices' => array(
            'template_sidebar' => esc_html__('Template With Sidebar', 'stm-woocommerce-motors-auto-parts'),
            'template_1' => esc_html__('Template 1', 'stm-woocommerce-motors-auto-parts'),
        ),
        'default' => 'template_sidebar'
    ),
    'wcmap_single_product_sidebar' => array(
        'label' => esc_html__( 'Choose Single Product Sidebar', 'motors' ),
        'type' => 'stm-post-type',
        'post_type' => 'sidebar',
        'default' => '768'
    ),
    'wcmap_single_product_sidebar_position' => array(
        'label' => esc_html__( 'Single Product Sidebar Position', 'motors' ),
        'type' => 'radio',
        'choices' => array(
            'left' => __( 'Left', 'motors' ),
            'right' => __( 'Right', 'motors' )
        ),
        'default' => 'left'
    ),
);

STM_Customizer_WCMAP::setSection('wcmap_features', array(
	'title' => esc_html__('WC Motors Auto Parts', 'stm-woocommerce-motors-auto-parts'),
	'panel' => 'woocommerce',
	'fields' => $wcmap_features
));

STM_Customizer_WCMAP::setPanels(array('prefooter' => array(
    'title' => esc_html__('Pre Footer', 'stm-woocommerce-motors-auto-parts'),
    'priority' => 50
)));

STM_Customizer_WCMAP::setSection( 'prefooter_opt', array(
        'title' => esc_html__('PreFooter Settings', 'stm-woocommerce-motors-auto-parts'),
        'panel' => 'prefooter',
        'fields' => array(
            'prefooter_sb' => array(
                'label' => esc_html__('Sidebar', 'stm-woocommerce-motors-auto-parts'),
                'type' => 'stm-select',
                'choices' => $sidebars,
                'default' => 'no_sidebar'
            ),
        )
    )
);