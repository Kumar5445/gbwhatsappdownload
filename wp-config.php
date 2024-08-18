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
define( 'DB_NAME', 'gbwhatsappdownload_db' );

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
define( 'AUTH_KEY',         'dc)Gs=l<4wMK[@0g*l#uTJ|S&(!AE7kUI3,A:b}Lv:|{Z|G`Ko{Z>FWIM;+^24<e' );
define( 'SECURE_AUTH_KEY',  '&fIR/0p_JEKFO_/x+ANyQACL{*juQ,aoZ}<zw,YZm5ZjzE5n&r8uBs(D%@anPRG ' );
define( 'LOGGED_IN_KEY',    '<mfN[}_>;9KNo<!j:xsf0v?*eS[v7+Yf=0[ca7-P>`]gF?MLv~AE,5ABBut2~U;:' );
define( 'NONCE_KEY',        'j.FY~ZX[!fhNUPkh!oH6DWZhbTx})w>j-=8#9YqLb66a),;p{lZf]|0{tm}v(d}/' );
define( 'AUTH_SALT',        '#Orv%*w Hw f18RSi:8!ej:,-bVK~+0=dE.6+3 @(x~& %jgk(X,)pwNzYS8;hIc' );
define( 'SECURE_AUTH_SALT', '8sdBtTOL{3qds[?VQjfsfR~gmpQnPE($NHV<ReKJ&*;9>r.29f.J;5K5}^B_j^jv' );
define( 'LOGGED_IN_SALT',   'VrNSFFRtZ?~V#5B:y$?rp,D5p)6E>.S^-*[d,YIe} *p5U0fNl/!P]Q,*EzvT_WH' );
define( 'NONCE_SALT',       '6EIM8dknQ*=S#UmtgC 4rpC3VX+cg6vE3||E+YiW{ C^uM7xWOnw%L,~%,yf/@j&' );

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
