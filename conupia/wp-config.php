<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', "conupia" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "root" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'T(4<U.|KRx*]^ZUk<s@){4c0c?N=>FgY 35+7bfW9qDXaf%!lX;MHVx;T.gQuXWx' );
define( 'SECURE_AUTH_KEY',  'OIS; ?:?c3pbV,C-Jv&&R*n>[Zdf2O0ovHmbS!f!u[e,lxjPDn3`&F L[9Kn7?{?' );
define( 'LOGGED_IN_KEY',    'uVA8Qc>gRc{YaH9de{Y?)#oX7h;XFYPB}kjFp[Pb![b?WmOk$DG6{![)Ig0`kyR:' );
define( 'NONCE_KEY',        '=Jsy-Sb,U,w5Yu^LBQFRrYDs|Q{BL)E;Vc?q9]c ~W-JBhet9:Sua)v(*/WQ5=_Z' );
define( 'AUTH_SALT',        '?0!lHB&[NIF e7__IGUJ%k;V;K{6Vr1Io`7p=x;K~m5F2ASs|Ba>{@>}~OVnk`m6' );
define( 'SECURE_AUTH_SALT', '4~2FbLeDur<puyJ!L`!OCm6G7HEm8Dl)M%6~XBLul#`6s9bxq[E3dRJT[$EYv/2Q' );
define( 'LOGGED_IN_SALT',   ':v(>`MTYVxq*<BBag8@Pya-^Q~42L-]B!8{];#W`Oec80%VcV^Z@&MlT!_#BxD[U' );
define( 'NONCE_SALT',       'uWVpKvtUP#5KlNEv_VK<O&TJa]K=UTrqf{z.lTa1C%>[Vc4W{Bs$:9!T?HX`8VQp' );

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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
