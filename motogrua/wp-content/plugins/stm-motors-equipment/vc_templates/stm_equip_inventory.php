<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$css_class = (!empty($css)) ? apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' ')) : '';

stm_equipment_module_enqueue_scripts_styles('stm_equip_inventory');

$termTitle = '';
if(!empty($_GET['body'])) {
    $termName = get_term_by('slug', sanitize_text_field($_GET['body']), 'body');
    $termTitle = '<span class="colored">' . $termName->name . '</span>';
}

if(!empty($_GET['listing-type'])) {
    $termName = get_term_by('slug', sanitize_text_field($_GET['listing-type']), 'listing-type');
    $termTitle = (!empty($termTitle)) ? $termTitle . ' ' . $termName->name : $termName->name;
}

$invTitle = (!empty($termTitle)) ? $termTitle : __('<span class="colored">Inventory</span> For Sale/Rent', 'stm_motors_equipment');

?>
<div class="stm-equip-inventory">

		<?php
		$query = stm_listings_query();

		if ( $query->have_posts() ):

			//stm_listings_load_template( 'filter/badges' );

			//stm_listings_load_template( 'classified/filter/featured' );
		?>
			<div class="title">
				<h3 class="heading-font"><?php echo $invTitle; ?></h3>
				<a href="<?php echo esc_url(stm_get_listing_archive_link()); ?>?featured_top=true" class="all-offers">
					<span class="vt-top heading-font"><?php esc_html_e('Available', 'stm_motors_equipment'); ?></span>
					<span class="lt-blue heading-font"><?php echo sprintf(esc_html('%s Equipment', 'stm_motors_equipment'), $query->found_posts); ?></span>
				</a>
			</div>
			<div id="listings-result">
		<?php

			while ( $query->have_posts() ): $query->the_post();
				stm_equipment_load_template('vc_parts/grid-loop');
			endwhile;
		?>
            </div>
		<div class="inventory-bottom">
		<?php stm_listings_load_pagination(); ?>
		<?php stm_equipment_load_template('parts/items-per-page'); ?>
		</div>
		<?php
		else:
		?>
		<h3><?php esc_html_e( 'Sorry, No results', 'stm_motors_equipment' ) ?></h3>
		<?php endif; ?>
		<?php if ( stm_is_aircrafts() ) : ?>
		<script>
			jQuery(document).ready(function (){
				var showing = '<?php echo esc_html($query->found_posts); ?>';

				jQuery('.ac-total').text('<?php echo esc_html($query->found_posts); ?>');

				if(showing === '0') {
					jQuery('.ac-showing').text('0');
				}
			});
		</script>
		<?php
		endif;
		wp_reset_query();
		?>
</div>