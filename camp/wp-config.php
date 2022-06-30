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
define( 'DB_NAME', 'CAMP' );

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
define( 'AUTH_KEY',         '=WgcJKfi:7:+.7/a#D-+eo}]@P3yF,~zD@jY% -srd3te2LUx(hD#*cn]KbJM1cJ' );
define( 'SECURE_AUTH_KEY',  'M9yM@T&5n}fzs>DsV<NDr7P-[J:6jQ@Pd+p!K6cJuRfhj$#Oj)@igw!?C2Cm=b[6' );
define( 'LOGGED_IN_KEY',    'y7ST7dB5R4m,mkN%s#.8|8] tYuL1`L}!)cSx4b_Z&}`EdC!-_`/r?,Y17z(MyLO' );
define( 'NONCE_KEY',        'D9`%r/ct;[GK|Gs|^7F+69 2k7k=c&1~t*c*P)9|`,OQA^`z[N:**,p(4]?kO=or' );
define( 'AUTH_SALT',        '0fP}vH(5k=.$B)rM(`F*n27B>ugN{l31#C.FD~3!S%N8?;PGT^1,j`M]l2f[#@#2' );
define( 'SECURE_AUTH_SALT', '8?v)T*:eS?,$,2;[b,J#W.u6R`*xtzJg:zpK)}~oC$l9iK72An+K+fY6qriP{{*E' );
define( 'LOGGED_IN_SALT',   'SyZ*{:JZ5.Id` FbAZ:WaU,j%_H{c&aHf=}j%9sWZ Sby^ ]O85Yg-`wu?,~OgP;' );
define( 'NONCE_SALT',       ' +<;j7s7|+CM#?)|R|n9&>dx+I:JPB2;3Pc!gND!NGPN4zI%{ f):GFFMP~v@9qp' );

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
