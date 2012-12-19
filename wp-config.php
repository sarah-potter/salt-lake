<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'site_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'W5CfN(=G(c118CNE22+ZS?TeF?-|T7{I+8S^98TI,Q-(]+s)LpA3rm~]Zz8#].qO');
define('SECURE_AUTH_KEY',  'z-6z7BXvSYJymiLN{noQh<F+{-Gf|-i$=vcy-B;= Wu|?hsUz$JeVMdZj-)yr@x{');
define('LOGGED_IN_KEY',    ')|8VNI=s|=urydnor`NhO7!l,M+U<Y5G[) @,;%fAh]C uLy tgaL.B,/.#++1)*');
define('NONCE_KEY',        '5Tm{(-k?7ih]p{p.1K*xxIH3[ Ve=arxb7^[I!{U{O%2s$/M5)YE(Jm:8!vo[6X~');
define('AUTH_SALT',        '[_KU<0Ya=%{|6-NgR.j(fa?Q6R+UnK-D-iTdSzYef<Z>Fo%!|^2}]i=z/VQVuB^+');
define('SECURE_AUTH_SALT', 'CsN^i%I(8X7byAhmvm}|7#L^p6!Obh++Nedaj?crM{cx35s*Mr>?t:s_xl=13|64');
define('LOGGED_IN_SALT',   ',)yw,^)MYJ<_R Pnz8;&/v?DfoS,.@z=~Y5p35fGI7#|;8^IFRH+9iurjD-a#!+9');
define('NONCE_SALT',       '?HUYo&c+93+eo|&n t*|P2D4g.yUaugy|W&^Hbtou7xSzt*/@Ox_~p)i}2W_y+Ve');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
