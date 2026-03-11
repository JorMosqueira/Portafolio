<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'viphome' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6C,AG3xYu,z|]y<JTQAfZ,(08)^Upzzk;li#l6}D/SJCp$}*g#VUSg/&v`;;5JHw' );
define( 'SECURE_AUTH_KEY',  'UTiRnA1Q5Yp95E)}~z:,Tn6Z5 ZV{Z/Uqz>?b>[|^q(J`Oy<H=Bn!|Bev~uQA]wp' );
define( 'LOGGED_IN_KEY',    'FiKQ]psDv0dsy+@VxH)XjZ!Kr~*?RC5yn# 208AK3?Qaqm%95D`Io_?]kS-rBk<c' );
define( 'NONCE_KEY',        '563:lptS}!#-` 0:DvmM]IFrHnSx(NA+2MU 7vyJi#65tftTd9w_Lsv_]eg9u3Bx' );
define( 'AUTH_SALT',        '67tn{*}1)<#ZM,[Yvg!u-<,4^v&gGH}saZlxd2]l97N-;/-w1LiaS&:bj=_>9ba&' );
define( 'SECURE_AUTH_SALT', 'ksb2ZyO?-?=numN%erYo<G,uAGJ&f3-do~~dpo$L&.T{Qkyw,,TA7H<)Tmf=@yPB' );
define( 'LOGGED_IN_SALT',   '_=q!#LA+(,@m-5h#|q=1YM`p}=d<?Ty_wSA>PvW,a^vR}{Qh@l8_;2aC2=If}72 ' );
define( 'NONCE_SALT',       'EC,L~0> (UE c~st(},L_O5]x~K$5-_ UOe[5bH)Tg/lrOP!}t{bI_s>B!2w{KE=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
