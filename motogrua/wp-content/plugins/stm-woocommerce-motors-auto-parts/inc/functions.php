<?php

add_action('init', 'stm_wcmap_include_customizer');

function stm_wcmap_include_customizer()
{
    require_once __DIR__ . '/customizer/customizer.class.php';
}

function js_variables()
{
    $variables = array(
        'wcmap_ajax_url' => admin_url('admin-ajax.php'),
        'is_mobile' => wp_is_mobile()
    );
    echo '<script type="text/javascript">window.wp_data = ' . json_encode($variables) . ';</script>';
}

add_action('wp_head', 'js_variables');

function stm_wcmap_create_shortcode()
{
    add_shortcode('stm_wcmap_sc', 'stm_wcmap_get_all_cats');
}

function stm_wcmap_get_all_cats($atts)
{

    $includeCats = explode(',', $atts['cats']);
    array_walk($includeCats, 'trim_value');
    $includeCats = array_filter($includeCats, function ($value) {
        return $value !== '';
    });

    $cats = get_terms(array(
        'orderby' => 'id',
        'order' => 'ASC',
        'fields' => 'all',
        'show_count' => 0,
        'hierarchical' => 1,
        'hide_empty' => 0,
        'taxonomy' => 'product_cat'
    ));

    $categoryHierarchy = array();
    stm_wcmap_sort_terms_hierarchicaly($cats, $categoryHierarchy);

    $class = (wp_is_mobile()) ? 'stm_wcmap_mobile_mm' : '';

    $out = '<ul class="' . esc_attr($class) . '">';

    foreach ($categoryHierarchy as $k => $cat) {
        if ($cat->slug == 'uncategorized') continue;

        if (!empty($includeCats)) {
            if (array_search(trim($cat->slug), $includeCats) === false) continue;
        }

        $hasChild = (!empty($cat->children)) ? 'stm_wcmap_mm_has_children' : '';

        $out .= '<li class="' . esc_attr($hasChild) . '">';
        if (wp_is_mobile() && !empty($cat->children)) {
            $out .= '<a href="' . get_category_link($cat->term_id) . '">' . $cat->name . '</a><span class="icon-ap-arrow"></span>';
        } else {
            $out .= '<a href="' . get_category_link($cat->term_id) . '"><span class="icon-ap-arrow"></span>' . $cat->name . '</a>';
        }

        $advertImgId = get_term_meta($cat->term_id, 'stm_wcmap_image', true);
        $advertImg = wp_get_attachment_image_url($advertImgId, 'stm-wcmap-210-260');
        $advertLink = get_term_meta($cat->term_id, 'stm_banner_link', true);

        if (!empty($cat->children)) {
            $out .= '<div class="stm-wcmap-subcats-content">';
            $out .= '<ul class="subcat-list">';

            foreach ($cat->children as $q => $subCat) {
                $out .= '<li>';
                $out .= '<a class="subcat heading-font" href="' . get_category_link($subCat->term_id) . '">' . $subCat->name . '</a>';

                if (!empty($subCat->children)) {
                    $out .= '<div class="stm-wcmap-subsubcats-content">';
                    $out .= '<ul class="subsubcat-list">';
                    foreach ($subCat->children as $w => $subSubCat) {
                        $out .= '<li>';
                        $out .= '<a class="subSubCat normal_font" href="' . get_category_link($subSubCat->term_id) . '">' . $subSubCat->name . '</a>';
                        $out .= '</li>';
                    }

                    $out .= '</ul>';
                    $out .= '</div>';
                }

                $out .= '</li>';
            }

            $out .= '</ul>';
            if (!empty($advertImg)) {
                $out .= '<div class="cat-advert">';
                $out .= (!empty($advertLink)) ? '<a href="' . $advertLink . '">' : '';
                $out .= '<img src="' . $advertImg . '" />';
                $out .= (!empty($advertLink)) ? '</a>' : '';
                $out .= '</div>';
            }
            $out .= '</div>';
        }

        $out .= '</li>';
    }

    $out .= '</ul>';

    echo apply_filters('stm_all_cats_filter', $out);
}

function stm_wcmap_sort_terms_hierarchicaly(Array &$cats, Array &$into, $parentId = 0)
{
    foreach ($cats as $i => $cat) {
        if ($cat->parent == $parentId) {
            $into[$cat->term_id] = $cat;
            unset($cats[$i]);
        }
    }

    foreach ($into as $topCat) {
        $topCat->children = array();
        stm_wcmap_sort_terms_hierarchicaly($cats, $topCat->children, $topCat->term_id);
    }
}

add_action('after_setup_theme', 'stm_wcmap_create_shortcode', 100);

function trim_value(&$value)
{
    $value = trim($value);
}

function stm_wcmap_get_post_data($post_type)
{
    $pages_data = array();
    if (is_admin()) {
        $args = array(
            'post_type' => $post_type,
            'posts_per_page' => -1,
            'post_status' => 'publish'
        );
        $pages = get_posts($args);
        foreach ($pages as $page) {
            $pages_data[] = array(
                'label' => $page->post_title,
                'value' => $page->ID
            );
        }
    }

    return apply_filters('stm_wcmap_get_post_data', $pages_data);
}

function stm_wcmap_get_template($template)
{
    require_once STM_WCMAP_PATH . '/woocommerce/' . $template . '.php';
}

function stm_wcmap_get_single_product_html()
{
    stm_wcmap_get_template('main');
}

add_action('stm_wcmap_single_product_view', 'stm_wcmap_get_single_product_html');

function stm_wcmap_add_prefooter_section()
{
    //prefooter_sb
    $sidebar_id = get_theme_mod('prefooter_sb', '');
    if (!empty($sidebar_id)) {
        $prefooter_sidebar = get_post($sidebar_id);
        echo '<div class="container prefooter-section">';
        echo apply_filters('the_content', $prefooter_sidebar->post_content);
        echo '</div>';
    }
}

add_action('stm_pre_footer', 'stm_wcmap_add_prefooter_section');

function stm_wcmap_title_box()
{
    if (stm_is_auto_parts() && !is_front_page()) {
        require_once STM_WCMAP_PATH . '/parts/title-box.php';
    }
}

add_action('stm-wcmap-title-box', 'stm_wcmap_title_box');

function stmWCMAPAddPostClass($body_class)
{

    $sp_template = get_theme_mod('wcmap_single_product_template', 'template_1');

    $body_class[] = 'stm-wcmap-' . $sp_template;

    if (is_cart()) {
        $cart_page_id = get_option('woocommerce_cart_page_id');
        $show_title_box = get_post_meta($cart_page_id, 'title', true);

        if ($show_title_box != 'hide') {
            $body_class[] = 'stm-wcmap-cart-page-has-title';
        }
    }

    if (is_shop()) {
        $body_class[] = 'stm-wcmap-shop';
    }

    return $body_class;
}

add_filter('body_class', 'stmWCMAPAddPostClass', 10, 1);

if (!function_exists('stm_wcmap_sidebar_layout_mode')) {
    function stm_wcmap_sidebar_layout_mode($position = 'left', $sidebar_id = false)
    {
        $content_before = $content_after = $sidebar_before = $sidebar_after = $show_title = $default_row = $default_col = '';

        if (get_post_type() == 'post') {
            if (!empty($_GET['show-title-box']) and $_GET['show-title-box'] == 'hide') {
                $blog_archive_id = get_option('page_for_posts');
                if (!empty($blog_archive_id)) {

                    $get_the_title = get_the_title($blog_archive_id);

                    if (!empty($get_the_title)) {
                        $show_title = '<h2 class="stm-blog-main-title">' . $get_the_title . '</h2>';
                    }
                }
            }
        }

        if (!$sidebar_id) {
            $content_before .= '<div class="col-md-12">';

            $content_after .= '</div>';

            $default_row = 3;
            $default_col = 'col-md-4 col-sm-4 col-xs-12';
        } else {
            if ($position == 'right') {
                $content_before .= '<div class="col-md-9 col-sm-12 col-xs-12"><div class="sidebar-margin-top clearfix"></div>';
                $sidebar_before .= '<div class="col-md-3 hidden-sm hidden-xs">';

                $sidebar_after .= '</div>';
                $content_after .= '</div>';
            } elseif ($position == 'left') {
                $content_before .= '<div class="col-md-9 col-md-push-3 col-sm-12"><div class="sidebar-margin-top clearfix"></div>';
                $sidebar_before .= '<div class="col-md-3 col-md-pull-9 hidden-sm hidden-xs">';

                $sidebar_after .= '</div>';
                $content_after .= '</div>';
            }
            $default_row = 2;
            $default_col = 'col-md-6 col-sm-6 col-xs-12';
        }

        $return = array();
        $return['content_before'] = $content_before;
        $return['content_after'] = $content_after;
        $return['sidebar_before'] = $sidebar_before;
        $return['sidebar_after'] = $sidebar_after;
        $return['show_title'] = $show_title;
        $return['default_row'] = $default_row;
        $return['default_col'] = $default_col;

        return $return;
    }
}

function stm_wcmap_get_sale_icon()
{
    $saleIcoLink = (!empty(get_theme_mod('wcmap_sale_ico'))) ? get_theme_mod('wcmap_sale_ico') : STM_WCMAP_URL . '/assets/img/icon-sale.svg';
    return $saleIcoLink;
}

function stm_wcmap_get_hot_icon()
{
    $bestSellIcoLink = (!empty(get_theme_mod('wcmap_best_selling_ico'))) ? get_theme_mod('wcmap_best_selling_ico') : STM_WCMAP_URL . '/assets/img/icon-hot.svg';
    return $bestSellIcoLink;
}

function stm_wcmap_get_rate_icon()
{
    $topRateIcoLink = (!empty(get_theme_mod('wcmap_top_rate_ico'))) ? get_theme_mod('wcmap_top_rate_ico') : STM_WCMAP_URL . '/assets/img/icon-popular.svg';
    return $topRateIcoLink;
}

function stm_auto_parts_stock_label($product){
    return ($product->is_in_stock()) ? esc_html__('In stock', 'stm-woocommerce-motors-auto-parts') : esc_html__('Out of stock', 'stm-woocommerce-motors-auto-parts');
}