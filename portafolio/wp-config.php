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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portafolio' );

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
define( 'AUTH_KEY',         'CX$:9~_At C-jqr:uXiXR!<4GM>zt~ @rASBrZ&[`b?DlR&fR||tyQQ J$=|TiX~' );
define( 'SECURE_AUTH_KEY',  'yr1xN[wnk ODWWt>OI9vcgfDn<~>0x|dgQ;oL(HN6W[RY}]A^H~)7ix]D2P28Ra$' );
define( 'LOGGED_IN_KEY',    '9In;tsDM%le(ECqt-TE|aK-!%5J`tdI$0]u88!Z~>{6W?WXD$b;sf:tZ096Cox8K' );
define( 'NONCE_KEY',        'h$$.u:G^^s}!K.7APGQ(b]|)jWT*IG/o0i%8JV(!yNW/Ni<2tVT&`yW|E;Ds/NfV' );
define( 'AUTH_SALT',        ' Bh)wR(rUL}NO{X)E {z<~O.MXo#Q9)D=m`Cd]tmm*KI-gQl?d9afkh1Cu{DC~.)' );
define( 'SECURE_AUTH_SALT', ']1+#7E;xt ljG|mQ<ss(6?:OB=@C/V2uHoqz?Bb@_Z8T$O>?VH@+~{!B zJ|0y]%' );
define( 'LOGGED_IN_SALT',   '?Iv TD5F}@PP=b]_*7_=,AHX3m$Lo?!p]z[6X+0x#heWkV}byEMD(7Oq7zKPqowy' );
define( 'NONCE_SALT',       'CcMUZ:Fn<Kz^6B<J*Yydqf{`B2kN,r(=yA>Y-g=-$TW.Zz ;YM;o+/v*W^;;yasK' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
