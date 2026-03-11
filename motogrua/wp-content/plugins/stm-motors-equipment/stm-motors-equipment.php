<?php
/**
Plugin Name: Motors - Equipment
Plugin URI: http://stylemixthemes.com/
Description: Equipment layout
Author: StylemixThemes
Author URI: http://stylemixthemes.com/
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: stm_motors_equipment
Version: 1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

define( 'STM_MOTORS_EQUIPMENT_PATH', dirname( __FILE__ ) );
define( 'STM_MOTORS_EQUIPMENT_INC_PATH', dirname( __FILE__ ) . '/inc/');
define( 'STM_MOTORS_EQUIPMENT_URL', plugins_url( '', __FILE__ ) );
define( 'STM_MOTORS_EQUIPMENT', 'stm_motors_equipment' );
define( 'STM_MOTORS_EQUIPMENT_SS_V', '1.0' );

define( 'STM_MOTORS_EQUIPMENT_IMAGES', STM_MOTORS_EQUIPMENT_URL . '/inc/admin/butterbean/images/' );

require_once STM_MOTORS_EQUIPMENT_INC_PATH . 'actions_filters.php';
require_once STM_MOTORS_EQUIPMENT_INC_PATH . 'enqueue.php';
require_once STM_MOTORS_EQUIPMENT_INC_PATH . 'helpers.php';
require_once STM_MOTORS_EQUIPMENT_INC_PATH . 'templates.php';
require_once STM_MOTORS_EQUIPMENT_INC_PATH . 'visual_composer.php';

if ( is_admin() ) {
	//require_once STM_MOTORS_EQUIPMENT_INC_PATH . 'admin/enqueue.php';
}