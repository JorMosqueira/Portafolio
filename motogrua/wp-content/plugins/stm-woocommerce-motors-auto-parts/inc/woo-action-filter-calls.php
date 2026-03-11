<?php


function stm_woocommerce_form_start()
{
    echo '<div class="stm-woo-form-wrap">';
}

function stm_woocommerce_form_end()
{
    echo '</div>';
}

add_action( 'woocommerce_login_form_start', 'stm_woocommerce_form_start' );
add_action( 'woocommerce_login_form_end', 'stm_woocommerce_form_end' );
add_action( 'woocommerce_register_form_start', 'stm_woocommerce_form_start' );
add_action( 'woocommerce_register_form_end', 'stm_woocommerce_form_end' );
add_action( 'woocommerce_before_cart_table', 'stm_wcmap_add_cart_title_box' );
add_action( 'woocommerce_after_cart_item_name', 'stm_wcmap_woocommerce_after_cart_item_name', 100, 2 );
add_action('yith_woocompare_popup_head', 'stm_wcmap_yith_woocompare_popup_head');

add_filter( 'woocommerce_layered_nav_term_html', 'stm_wcmap_woocommerce_layered_nav_term_html', 100, 4 );

function stm_wcmap_add_cart_title_box()
{
    $cart_page_id = get_option( 'woocommerce_cart_page_id' );
    ?>
    <div class="stm-cart-title-box">
        <?php woocommerce_breadcrumb( array( 'delimiter' => '<i class="fa fa-chevron-right"></i>' ) ); ?>
        <h2 class="heading-font"><?php echo get_the_title( $cart_page_id ); ?></h2>
    </div>
    <?php
}


function stm_wcmap_woocommerce_after_cart_item_name( $cart_item, $cart_item_key )
{

    $catList = '<ul>';

    $terms = get_the_terms( $cart_item['product_id'], 'product_cat' );
    foreach ( $terms as $term ) {
        $catList .= '<li><a href="' . esc_url( get_category_link( $term->term_id ) ) . '" class="normal_font">' . $term->name . '</a></li>';
    }

    $catList .= '</ul>';
    ?>
    <div class="stm-categ-wrap">
        <?php echo apply_filters('stm_wcmap_cat_list_filter', $catList); ?>
    </div>
    <div class="rating-wrap">
        <?php
        $averRate = $cart_item['data']->get_average_rating();
        $reviewCount = $cart_item['data']->get_review_count();

        echo wc_get_rating_html( $averRate, $reviewCount );
        ?>
    </div>

    <?php
}

function stm_wcmap_woocommerce_layered_nav_term_html( $term_html, $term, $link, $count )
{
    $advertImgId = get_term_meta( $term->term_id, 'stm_attr_wcmap_image', true );
    $advertImg = wp_get_attachment_image_url( $advertImgId, 'stm-wcmap-210-260' );

    $imgClass = ( $advertImg ) ? 'has-icon' : 'has-checkbox';

    $html = '<a href="' . $link . '" class="term-link ' . $imgClass . '">';
    if ( $advertImg ) {
        $html .= '<span class="term-img"><img src=" ' . $advertImg . ' " /></span>';
    }
    $html .= '<span class="term-name">';
    $html .= $term->name;
    if ( !empty( $term->count ) ) {
        $html .= '<span class="term-count">(' . $term->count . ')</span>';
    }
    $html .= '</span>';
    $html .= '</a>';

    echo apply_filters('stm_wcmap_fc_html_filter', $html);
}

function stm_wcmap_yith_woocompare_popup_head () {
    echo '<link rel="stylesheet" href="' . STM_WCMAP_URL . '/assets/css/stm_wcmap_yith_compate.css"/>';
}


