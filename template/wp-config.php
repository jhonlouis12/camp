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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'template_ojt' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' k[5-#$eVx{*/EwI~RsV~At=iY!z)}z3CK*LU7e6nlL}xK}YO8i@sGjF&jPxp>^{' );
define( 'SECURE_AUTH_KEY',  '*9[YhOf;Y= OyB@|laLJITxS!n[ R]Ys%O=.<J@BgbplLLCAiG?er<3wjXe^nUOT' );
define( 'LOGGED_IN_KEY',    '@!@Cap*Ue?x1s03jDu$<X(_YAHzzXg~;ctldAr&s;7X-IWj|2,?3]?CDla)fxhC[' );
define( 'NONCE_KEY',        'z>hnwGg__x 3*h%k}2yqwT1O_/|6]dp4b8-_tXWqod7oMleIB I-RY8V^%J5kYb+' );
define( 'AUTH_SALT',        '-VL>~-8RAYQ-n&B1y9K*; G>dCMSX9>5Cw`V$8gb8g>3VRv8<7}a*: Kh*(te!Ys' );
define( 'SECURE_AUTH_SALT', '[m.pvs;lKja?KTcl.({v@LH5-H$vbQ)&S=4_N[%I]Sm77dT&AFFs|+z+^b{8%&h%' );
define( 'LOGGED_IN_SALT',   'ScB^dHp{s@E8>i#D1`5|X!}>M/Y<UT5QCtS[ 2/ds:.)1 ^`A}|W!su9n_LU7yVY' );
define( 'NONCE_SALT',       'tWze^?4NRR%PAWZe%%jZm731ce#w:o[9}Rn-oO<Ppm8k?7{s&b(-0h4G{uv2}+{N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wpop';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
