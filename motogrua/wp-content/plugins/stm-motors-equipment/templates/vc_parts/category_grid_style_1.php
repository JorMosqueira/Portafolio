<?php
$term = $__vars;

$image = get_term_meta($term['term_id'], 'stm_image', true);
$image = wp_get_attachment_image_src($image, 'full');

?>

<div class="cat_grid_item">
	<a href="<?php echo esc_url(stm_get_listing_archive_link() . '?' . $term['taxonomy'] . '=' . $term['slug']); ?>">
		<div class="wrapper">
			<div class="cat-icon">
				<?php if($image) : ?>
					<img src="<?php echo esc_url($image[0]); ?>" />
				<?php endif; ?>
			</div>
			<div class="info">
				<div class="title heading-font"><?php echo esc_html($term['name']); ?></div>
				<div class="count normal_font"><?php echo sprintf(esc_html__('%s Vehicles', 'stm_motors_equipment'), $term['count']); ?></div>
			</div>
		</div>
	</a>
</div>
