<?php//Begin Really Simple Security key
define('RSSSL_KEY', 'za3XHmUTgbpA2ulUDYF7RJ7cldN4q6jDbjbbGTO9GHaJ8KwU5iOnOFWwRHf0tN3v');
//END Really Simple Security key

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nose' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UKc$-ppKYu3`O4zWyWj0wC&%@8bg7PL_mY@v-wpi1r>s}<F#82^o|l6m,rbL!NBM' );
define( 'SECURE_AUTH_KEY',  '1YG`D*T$o#Sw/)bJseTm)?i)IZ`500=MHq<YR(0 HAMY*rO94xV*2g5E;E~?Q3>(' );
define( 'LOGGED_IN_KEY',    '}TrI7rw?aohL %[WQ#g`t:a7r7cKpcnufJeF~,i.`Xj8dZffFtnM-Ihvj65:c}tG' );
define( 'NONCE_KEY',        '0Qj.!052.0u*;?&/aIsI&${x{0fvU|gKBk/)m;2Z.$kH`b(_rK`qT_)<E>-71 `1' );
define( 'AUTH_SALT',        '$uYN>K;D6Y.1vOMx9/MY6erR%Klaix)<bI #)vTGN92|F_cGT3C[a>MXNd.1BTM+' );
define( 'SECURE_AUTH_SALT', 'XSDtDA/^ekQo3k7h-yt8doo# `r|6TkaXQO(@+,}V-SZR[-ndz)I6#CnZ3.gf# a' );
define( 'LOGGED_IN_SALT',   'a[%2m~jXHH/szat~ZuvMmO>?7ysOKgPDz)F&;3o#BN/f=DYcMq ~c*a1U7i(?|Tn' );
define( 'NONCE_SALT',       '0?C(|k9m^ER)dJX&$knt}MD1=9jP;&&Q*+Fp/U,D8ojkt=PSKUpCv7GEsYiFYygY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define('WP_HOME', 'http://localhost/motogrua/');
define('WP_SITEURL', 'http://localhost/motogrua/');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
