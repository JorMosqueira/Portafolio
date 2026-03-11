<?php
/**
 * Account my listing
 *
 * Template can be modified by copying it to yourtheme/ulisting/account/my-listing.php.
 **
 * @see     #
 * @package uListing/Templates
 * @version 1.3.6
 */

use uListing\Classes\StmListingTemplate;
use uListing\Classes\StmPaginator;
use uListing\Classes\StmUser;

wp_enqueue_script( 'ulisting-my-listing', ULISTING_URL . '/assets/js/frontend/ulisting-my-listing.js', array( 'vue' ), ULISTING_VERSION, true );

$limit = 5;
$sections = [];
$view_type = "list";
$default_listing_type = null;

$query_var = explode( '/', get_query_var( stm_page_endpoint() ) );
$page = isset( $query_var[0] ) ? intval( $query_var[0] ) : 0;
$data['user_id'] = get_current_user_id();


$params = array( 'limit' => $limit, 'offset' => ( $page > 1 ) ? ( ( $page - 1 ) * $limit ) : 0 );

if ( isset( $_GET['order'] ) ) $params['order'] = esc_attr( $_GET['order'] );

if ( isset( $_GET['order_by'] ) ) $params['order_by'] = esc_attr( $_GET['order_by'] );
?>

<?php StmListingTemplate::load_template( 'account/navigation', [ 'user' => $user ], true ); ?>

    <div id="ulisting_my_listing" class="custom-panel p-t-30 p-b-30 ">
		<?php
		$i = 0;
		$listing_types = uListing_all_listing_types();
		?>
        <div class="ulisting-user-listings">
            <h4><?php echo esc_html__( 'Transport Type', 'motors' ); ?></h4>

			<?php foreach ( $listing_types as $index => $listing_type ): ?>
				<?php
				$count = $user->getListings( true, [ 'listing_type' => $index ] );
				if ( $i === 0 ) {
					$default_listing_type = isset( $query_var[1] ) ? intval( $query_var[1] ) : $index;
					$data['default_type'] = $default_listing_type;
				}

				$i++;
				?>

				<?php if ( $count > 0 ): ?>
                    <div class="form-check-inline">
                        <label class="form-check-label"
                               v-bind:class="{active:listing_type === <?php echo esc_attr( $index ) ?>}">
                            <div class="ico-wrap">
								<?php echo get_the_post_thumbnail( $index, 'full' ); ?>
                            </div>
                            <input type="radio" v-bind:checked="listing_type === <?php echo esc_attr( $index ) ?>"
                                   v-on:change="changeType(<?php echo esc_attr( $index ) ?>)" class="form-check-input"
                                   name="listing_types"><?php echo esc_attr( $listing_type ); ?>
                        </label>
                    </div>
				<?php endif; ?>
			<?php endforeach; ?>
        </div>
        <div class="user-listings-list">
			<?php
			foreach ( $listing_types as $id => $value ):

				if ( $default_listing_type == $id ) $page = isset( $query_var[0] ) ? intval( $query_var[0] ) : 0; else
					$page = 0;

				$params = array( 'listing_type_id' => $id, 'limit' => $limit, 'offset' => ( $page > 1 ) ? ( ( $page - 1 ) * $limit ) : 0 );

				$user_listings = $user->getListings( false, $params );
				//stm_ulisting_pre($user_listings);

				if ( !empty( $user_listings ) ):?>
                    <div class="stm-row" v-if="listing_type == <?php echo esc_attr($id) ?>">
						<?php
						foreach ( $user_listings as $listing ):?>
							<?php
							$item_class = "ulisting-item-list ";
							$listingType = $listing->getType();
							if ( ( $listing_item_card_layout = get_post_meta( $listingType->ID, 'stm_listing_item_card_' . $view_type ) ) AND isset( $listing_item_card_layout[0] ) ) {
								$listing_item_card_layout = maybe_unserialize( $listing_item_card_layout[0] );
								$config = $listing_item_card_layout['config'];
								$sections = $listing_item_card_layout['sections'];
								if ( isset( $config['template'] ) ) $item_class .= $config['template'];
							}
							?>
                            <div class="stm-col-12">
                                <div class="stm-row">
                                    <div class="stm-col-12">
                                        <div class="my-listing-item-wrap">
                                            <?php StmListingTemplate::load_template( 'loop/loop', [ 'model' => $listing, 'view_type' => $view_type, 'listingType' => $listingType, 'item_class' => $item_class, 'listing_item_card_layout' => $sections ], true ); ?>
                                            <div class="actions-wrap">
                                                <a class="btn btn-success w-full"
                                                   href="<?php echo stml_get_link( 'add_listing' ) . "?edit=" . $listing->ID ?>"><i class="fa fa-pencil"></i></a>
                                                <button class="btn btn-primary w-full m-t-15 heading-font"
                                                        @click="panel_feature_switch(<?php echo esc_html( $listing->ID ) ?>)"><?php _e( 'Featured', 'motors' ) ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ulisting-account-my-listing-feature-plan"
                                     v-if="feature_panel == <?php echo esc_attr( $listing->ID ) ?>">
                                    <p v-if="loading">Loading</p>
                                    <div v-if="!loading">
                                        <div class="stm-row">
                                            <div v-for="plan in feature_plans" class="stm-col-12">
                                                <div class="card-body">
                                                    <div class="plan-body-left">
                                                        <span v-if="plan.id == feature_plan_select"
                                                              class="badge badge-success heading-font">Active</span>
                                                        <span v-if="plan.id == selected_plan"
                                                              class="badge badge-success heading-font">Select</span>
                                                    </div>
                                                    <div class="plan-body-center-title">
                                                        <h5 class="card-title heading-font">{{plan.name}}</h5>
                                                    </div>
                                                    <div class="plan-body-center-limit">
                                                        <p v-if="plan.payment_type == 'subscription'" class="card-text heading-font">
                                                            {{plan.feature_limit}} / {{plan.use_feature_limit}}</p>
                                                        <p v-if="plan.payment_type == 'one_time'" class="card-text heading-font">
                                                            <span>Limit :</span>
                                                            {{plan.feature_limit}}
                                                        </p>
                                                    </div>
                                                    <div class="plan-body-center-timer">
                                                        <v-timer
                                                                v-if="plan.listing_plan && plan.listing_plan.user_plan_id == feature_plan_select_is_one_tome"
                                                                inline-template
                                                                :starttime="moment.utc(plan.listing_plan.created_date).local().format('MM DD YYYY h:mm:ss')"
                                                                :endtime="moment.utc(plan.listing_plan.expired_date).local().format('MM DD YYYY h:mm:ss')"
                                                                trans='{
                                                         "day":"d",
                                                         "hours":"h",
                                                         "minutes":"m",
                                                         "seconds":"s",
                                                         "expired":"Event has been expired.",
                                                         "running":"Till the end of event.",
                                                         "upcoming":"Till start of event.",
                                                         "status": {
                                                            "expired":"Expired",
                                                            "running":"Running",
                                                            "upcoming":"Future"
                                                           }}'>
                                                            <div class="timer-wrap">
                                                                <div class="timer-title heading-font">
                                                                    <?php echo esc_html__('Plan ends ih:', 'motors');?>
                                                                </div>
                                                                <div class="stm-row stm-no-gutters">
                                                                    <div class="stm-col-3 heading-font">
                                                                        <span class="number">{{ days }} {{ wordString.day }}</span>
                                                                        <span class="format"></span>
                                                                    </div>
                                                                    <div class="stm-col-3 heading-font">
                                                                        <span class="number">{{ hours }}</span>
                                                                        <span class="format">{{ wordString.hours }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </v-timer>
                                                    </div>
                                                    <div class="plan-body-right">
                                                        <button v-if="!feature_plan_select_is_one_tome"
                                                                @click="select_feature_plan(plan)" class="btn btn-primary heading-font">
                                                            select
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul v-if="errors">
                                            <li v-for=" (val, key) in errors">{{val}}</li>
                                        </ul>
                                        <p v-if="message">{{message}}</p>
                                        <span v-if="loading_save">Loading...</span>
                                        <button v-if="!loading_save"
                                                @click="save(<?php echo esc_attr( $listing->ID ) ?>)"
                                                class="btn btn-success heading-font"><?php _e( "Save", 'motors' ) ?></button>
                                    </div>
                                </div>
                            </div>
						<?php endforeach; ?>

                    </div>
				<?php endif; ?>
			<?php endforeach; ?>
            <div class="stm-justify-content-center stm-add-btn-wrap">
                <a class="btn btn-success heading-font" href="<?php echo stml_get_link( 'add_listing' ) ?>"> <?php _e( '+Add listing', 'motors' ) ?> </a>
            </div>
        </div>

		<?php
		foreach ( $listing_types as $id => $value ):
			if ( $default_listing_type == $id ) $page = isset( $query_var[0] ) ? intval( $query_var[0] ) : 0; else
				$page = 0;
			?>
            <template v-if="listing_type == <?php echo esc_attr($id) ?>">
				<?php
				$paginator = new StmPaginator( $user->getListings( true, [ 'listing_type_id' => $id ] ), $limit, $page, StmUser::getUrl( 'my-listing' ) . '/(:num)/' . $id, array( 'maxPagesToShow' => 8, 'class' => 'nav nav-pills', 'item_class' => 'nav-item', 'link_class' => 'nav-link', ) );
				echo html_entity_decode( $paginator );
				?>
            </template>
		<?php endforeach; ?>
    </div>
<?php
wp_add_inline_script( 'ulisting-my-listing', "var ulisting_my_listing_data = json_parse('" . ulisting_convert_content( json_encode( $data ) ) . "');", 'before' );