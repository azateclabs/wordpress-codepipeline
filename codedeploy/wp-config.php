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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define('WP_HOME','http://52.16.208.148');
define('WP_SITEURL','http://52.16.208.148');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpresslab');

/** MySQL database username */
define('DB_USER', 'wordpresslab');

/** MySQL database password */
define('DB_PASSWORD', 'wordpresslab');

/** MySQL hostname */
define('DB_HOST', 'wordpresslab.clqicui1v1t5.eu-west-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9KeH [yA| 3CDyBD93_r#I(z.&~:,B.hL3gBH||R~O)62Yp^#>9Puq=5a+&XPuz7');
define('SECURE_AUTH_KEY',  '74;XEeP2+J0iTug32T,#`=:E0~A[)q|o}[hy&Q5mPTX;6TmG4Q@tQQpVPFg ^e7,');
define('LOGGED_IN_KEY',    'ck#aGI(a}TkGKRIh%(};W~FD40h5<tn&;4-k6Dm9/YoEGYAS?jck9D%P1vr(vb3P');
define('NONCE_KEY',        'ZMMT|KLDGw21)ZM(kK@>-ju63siuL/v.VH=<p]*i0k/y`q7{l~eHwnl-<[Z7vK&3');
define('AUTH_SALT',        '-O(=ZbHf$F0r>A/um~$8!K:^*1/*4.[fGH 352?D IlQ|z*g/_K?_H07~C~_^yTo');
define('SECURE_AUTH_SALT', '3V?cOY?PAOfTEUs.&X78 v7.v:hp]S4RO*$x_|+DDjhRHco #>N14$*L1kr|,Ho=');
define('LOGGED_IN_SALT',   'eTlfvFigP4iHsbxkWYf09x4f*os!2CO,.k|4i6Gp!XNqJGp d6*H,/2AZutW,Vjs');
define('NONCE_SALT',       '_bLyE0wO*iW5TgAj`NJ0*d(x^&l9C&h(}Oc3F,vJy)&r,WlOsr*Y >c2^KT?[/e1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
