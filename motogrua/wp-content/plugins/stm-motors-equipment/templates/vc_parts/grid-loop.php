<?php
$id = get_the_ID();
$dynamicClassPhoto = 'stm-car-photos-' . $id . '-' . rand();
$dynamicClassVideo = 'stm-car-videos-' . $id . '-' . rand();
$imgSize = 'stm-img-350-205';
$show_compare = get_theme_mod('show_listing_compare', true);
$car_media = stm_get_car_medias(get_the_id());

?>
<div class="dp-in">
	<div class="listing-car-item">
		<div class="listing-car-item-inner">
			<a href="<?php the_permalink() ?>" class="rmv_txt_drctn" title="<?php esc_attr_e('Watch full information about', 'stm_motors_equipment'); echo esc_attr(' '.get_the_title()); ?>">
				<?php if(has_post_thumbnail()): ?>
					<div class="text-center">
						<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $imgSize); ?>
						<?php $img_2x = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'stm-img-796-466'); ?>
						<div class="image dp-in">
							<img src="<?php echo esc_url($img[0]); ?>" data-retina="<?php echo esc_url($img_2x[0]); ?>" class="img-responsive" alt="<?php the_title(); ?>">
							<div class="stm-car-medias">
								<?php if(!empty($car_media['car_photos_count'])): ?>
									<div class="stm-listing-photos-unit stm-car-photos-<?php echo get_the_id(); ?> <?php echo esc_attr($dynamicClassPhoto); ?>">
										<i class="stm-service-icon-photo"></i>
										<span><?php echo esc_html($car_media['car_photos_count']); ?></span>
									</div>

									<script>
                                        jQuery(document).ready(function(){
                                            jQuery(".<?php echo esc_attr($dynamicClassPhoto); ?>").on('click', function(e) {
                                                e.preventDefault();
                                                jQuery(this).lightGallery({
                                                    dynamic: true,
                                                    dynamicEl: [
														<?php foreach($car_media['car_photos'] as $car_photo): ?>
                                                        {
                                                            src  : "<?php echo esc_url($car_photo); ?>"
                                                        },
														<?php endforeach; ?>
                                                    ],
                                                    download: false,
                                                    mode: 'lg-fade',
                                                })
                                            });
                                        });

									</script>
								<?php endif; ?>
								<?php if(!empty($car_media['car_videos_count'])): ?>
									<div class="stm-listing-videos-unit stm-car-videos-<?php echo get_the_id(); ?> <?php echo esc_attr($dynamicClassVideo); ?>">
										<i class="fa fa-film"></i>
										<span><?php echo esc_html($car_media['car_videos_count']); ?></span>
									</div>

									<script>
                                        jQuery(document).ready(function(){

                                            jQuery(".<?php echo esc_attr($dynamicClassVideo); ?>").on('click', function(e) {
                                                e.preventDefault();

                                                jQuery(this).lightGallery({
                                                    dynamic: true,
                                                    dynamicEl: [
														<?php foreach($car_media['car_videos'] as $car_video): ?>
                                                        {
                                                            src  : "<?php echo esc_url($car_video); ?>"
                                                        },
														<?php endforeach; ?>
                                                    ],
                                                    download: false,
                                                    mode: 'lg-fade',
                                                })
                                            }); //click
                                        }); //ready

									</script>
								<?php endif; ?>
							</div>

							<?php
							$price = get_post_meta(get_the_id(),'price',true);
							$sale_price = get_post_meta(get_the_id(),'sale_price',true);

							$rent_price = get_post_meta(get_the_id(),'rent_price',true);
							$rent_sale_price = get_post_meta(get_the_id(),'rent_sale_price',true);

							$priceLabel = esc_html__('Sale price', 'stm_motors_equipment');
							$price = (!empty($sale_price)) ? $sale_price : $price;

							if(!empty($_GET['listing-type']) && $_GET['listing-type'] == 'for-rent') {
								$priceLabel = esc_html__('Rent price', 'stm_motors_equipment');
							    $price = $rent_price;

                                if(!empty($rent_sale_price)) {
                                    $priceLabel = $rent_price;
                                    $price = $rent_sale_price;
                                }
                            }

							?>
							<div class="price">
								<div class="title-price heading-font">
									<?php echo $priceLabel; ?>
								</div>
								<div class="sale-price heading-font">
									<?php echo esc_attr(stm_listing_price_view($price)); ?>
								</div>
							</div>
							<!--Compare-->
							<?php if(!empty($show_compare) and $show_compare): ?>
								<div class="stm-listing-compare stm-compare-directory-new"
									 data-id="<?php echo esc_attr(get_the_id()); ?>"
									 data-title="<?php echo stm_generate_title_from_slugs(get_the_id(),false); ?>"
									 data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e('Add to compare', 'stm_motors_equipment') ?>"
								>
									<i class="stm-service-icon-compare-new"></i><?php echo esc_html__('Compare', 'stm_motors_equipment');?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
				<div class="listing-car-item-meta">
					<div class="car-meta-top heading-font clearfix">
						<?php
						$subtitle = '';
						$body = wp_get_post_terms(get_the_ID(), 'body', array("fields" => "names"));
						$subtitle .= ($body) ? '<span>' . $body[0] . '</span>' : '';
						?>
						<div class="car-subtitle heading-font">
							<?php echo stm_do_lmth($subtitle); ?>
						</div>
						<div class="car-title">
							<?php echo stm_do_lmth(stm_generate_title_from_slugs(get_the_id(), true)); ?>
						</div>
					</div>
					<div class="car-meta-bottom">
						<?php
						$stock = get_post_meta(get_the_ID(), 'stock_number', true);
						$hours = get_post_meta(get_the_ID(), 'hours', true);

						$hours = (!empty($hours)) ? $hours : 0;
						?>
						<div class="stock-wrap">
							<?php echo '<span>' . esc_html__('Stock#', 'stm_motors_equipment') . '</span> ' . $stock; ?>
						</div>
						<div class="hours-wrap">
							<?php echo '<span>' . esc_html__('Hours:', 'stm_motors_equipment') . '</span> ' . $hours; ?>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>