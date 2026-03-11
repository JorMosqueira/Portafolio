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
define( 'DB_NAME', 'bomberos' );

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
define( 'AUTH_KEY',         'Hnb$D*|fi(3Z+C*F2E]k?.|%[`h#U+dO&h~zGdK@/sn VrSL+F<@|WVL=jI&u--^' );
define( 'SECURE_AUTH_KEY',  'cob2S/<VHb/G~xgt#X,vnmFXKUhO8K&?Gb.gw`?tp6%U-3iTya1LA?7UO4jz%Ccy' );
define( 'LOGGED_IN_KEY',    '9Z=FCT^xN2^!CGugtS@h)-v]d@wl5]ga6&7qlwQNQPmUW`c0C4*S2OEB/&MyJd0j' );
define( 'NONCE_KEY',        'Ls6-^x67J>R[^kEoRgH~_;=kfW:w|~vG;= 3hJxL`Ddw@gBi8oF>x1.7]b#na[Z2' );
define( 'AUTH_SALT',        'OxW|2H`{?Q4a.~@= Hj(a;&DZhFc|E]&9GeWJT=UBu>SegfYtknQ1?-biZSEc1lC' );
define( 'SECURE_AUTH_SALT', 'W!$=kEy8(XdT#3oQ!7>i/4!x#,7L#Kv^!uR iKm_Nv$|F|I Ui32d5p<}WB=6hdc' );
define( 'LOGGED_IN_SALT',   'XW}>5FcQU<<qb$@$R QG-CL1C$&h^Z2`#SUi}=K}M3P]t0KOqcQASMHU1+(~[UFH' );
define( 'NONCE_SALT',       'lLSRQswU9[K^KhUIlm+d)cW5Qp|s}Rd0w5;U %:=!nkG$}}P%;2JjDr./(hN+k7f' );

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
