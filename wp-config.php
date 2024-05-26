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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '%6qiuy_!7y`s|!sq!8$-{V&~l`{-I{8v;6Yu}XsDv:$DrPr(|h)b~*[czFL#:=YH' );
define( 'SECURE_AUTH_KEY',  'E9A^Ka9*~S]V:3PbP5YqB5YAYY:o?;0td?2T$*.#nqzK6jB?D.RP<A4JX5K9y,-]' );
define( 'LOGGED_IN_KEY',    'voA74uL]+(jx*RnD&Na=H]sFaNn=sJwD}RjIzfm+,D!jCHNi ^BQ8Hn<5~[+E5O9' );
define( 'NONCE_KEY',        'e%|Y1M}8|J/&Uc^,JjYB$X.gRFPw1(`*+/ )sNJ9k5v42QRi@1DY IpT0J-K>U5>' );
define( 'AUTH_SALT',        'd3GY/:MKCuE=#yz}W|YN{5S5#Uau*;H]cVD_~T&--uTY%|6BeeIa$#S]3SB?k>Ov' );
define( 'SECURE_AUTH_SALT', 'H(?<4`Ql>z8 OAZ3kees~S#76l{6Kh*spQ9j %Z,wF*o?.dc4:4N-si0)xQqS5-o' );
define( 'LOGGED_IN_SALT',   'DWt$AAO8&CWeXITQl.:l;y?BUW0( h+M:@S]mZL&}&9Vip~7q1gN58!zJ#uk,6D?' );
define( 'NONCE_SALT',       '#%^_/&U9a>?@Rqey39K*~r!)XWUT&d2 Pd/uYWd[>D-bx^$~<w$eh5Ks~F~I:nMd' );

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
