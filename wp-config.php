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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '0000');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'M{4-e(mjkbC$}XZr94k2BLhvirf3L[Q*`V8rZ{/s^`(z5q+H/XK`>/>IjP!U/nw4');
define('SECURE_AUTH_KEY',  '?R/hIbPPvYR3$aX,H!RKx,W1%[)F3(~TWs.QF{r<}m.5Ye$z6tI;AZQ]CoKp9N`}');
define('LOGGED_IN_KEY',    'YeluG_%>_QnO)b.2sMPINlB:VcQo9BkW*F7^}A&)vYl*gX4NQ;Md8%C$FhQme,jr');
define('NONCE_KEY',        '8a>saEIjd1KdEn`4?6|B^usvOSJ$bIY]{F 3V`^Gpv2%6}-qb7]A+zZ7:W`D{~ 2');
define('AUTH_SALT',        'f|zYC9T5rB^BFZXjRQ]rZ=[m&]Y]O1V]|}OS9SYCQa6-au(:E0I|o;fOb-bnG=[=');
define('SECURE_AUTH_SALT', '8b1U 0p H7oxUq(B|TPz+ccj|.Tzj6Q<x0|D!v>?UUq@zgXyc{vF)u~=^2f!78;<');
define('LOGGED_IN_SALT',   'P44:Bp|xsJQM{?HK#+*E#FqiV{C&T:Nb}_7|5ZzJA Kz+a!$iKXSY=KCG9Fn$<[<');
define('NONCE_SALT',       'R6)L#=>nb4[lT$c?RRP73J,WpeQ+sJU;{v>Ym88Tos/[b3g`FIRVXF,X>6Bpi(1Q');

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
