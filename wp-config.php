<?php
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
define( 'DB_NAME', 'designcafe' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Y[aDgeF*Oi`[!h?u]XvE<l6S-[ccZEQ:]>r/)-M;.CPw&_Sv$.z*]QuhZ:ruMAVm' );
define( 'SECURE_AUTH_KEY',  '~#XtC<[0ro6s)J-_ON2$4:8mV|@g8HX(X}KR1z7>TY`n}JRi8ScCn5HC%o8-[(D6' );
define( 'LOGGED_IN_KEY',    'y(hXg7le|G>2Lo0ZZF,<bV3+:ln@Fc)?5?oBR8t:(>;K^j+irL{yPR9Xs^H+;c>?' );
define( 'NONCE_KEY',        'i2!-EaTS2TA`%Vs8VPFO68#,ul9!IJqcn>[f&L>w<PPD*[GNFNOcl~2oH%LLqWh#' );
define( 'AUTH_SALT',        'Q>C;M#c{+tJNmxuS=`^v0^G[QWcz&ful^vDE)[Hv6z^U*?(.7!}P)?v){7M?%|[.' );
define( 'SECURE_AUTH_SALT', 'rg-ccO[z8zWCeV;C0/YxA@X#-^fIIZt|@@WH>}7:^_c0[}@tI+ve9?L2!.i}-vv#' );
define( 'LOGGED_IN_SALT',   'A?lMiediAn)aIq5u#;$(b2!T;nijD3%Ly$Cddo#Y-4d.zgs4I[|B+ZfJZv;ZCDlV' );
define( 'NONCE_SALT',       'J,oFGT6;g|m?Ez$</1D08tI_2MVXR$QVKMuAaU[EnnuPp9(7U2<!oYT?8 Mk{HIE' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
