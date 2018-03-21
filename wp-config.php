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
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'simplonco');

/** MySQL database password */
define('DB_PASSWORD', 'simplonco');

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
define('AUTH_KEY',         'KiHiO}@ H[c.8!=uB>yvo7+m3B<SwF6rn;?m:x:Ylz7a%vyPt#z2sbMk,d*i|;dd');
define('SECURE_AUTH_KEY',  'qN<UT>L#tB^IL9n=G2<Pa,F+3ks20XFPvStY%;zcBDjaf^:#!O m`%fQ54xhMkLH');
define('LOGGED_IN_KEY',    '?_miX9kP5m.}`2lr&m$c_ew=+a&ROg, O8c2PfgJ9A3.`@CxB BQOW=h(6grVw3h');
define('NONCE_KEY',        '(fd!qhbCw2(q4jD+-b*V=3<X5EEjTiG0WlKJJ@s`%d[vn!(Ub(WpAmOdhQwscc&8');
define('AUTH_SALT',        '?iWc6rQhPP:=Lcp^=|(!F`Sp~jlE9*t$M[bEpOGE)M?rR:Ol9WT[`.in&&!KB}L8');
define('SECURE_AUTH_SALT', '2SL!s2-<R(p#= _T~1}JGgS*84TvJ(^GbSE:rjkhkx5q5#+$gsq+*$mmB>H;S&?a');
define('LOGGED_IN_SALT',   'O&kPBwrGu=vs1jRA.&{8M7gAkBjx7JRXGMz{l;%tmdRM_)!ZfjKM3G.O(e@6h6=&');
define('NONCE_SALT',       'GL=LXpQ5iPTYG/ww_nSyVxrKY}U%8)s4hS<%~i;KTB+IW|*pM <:rCn]MQ^#h@.k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_1';

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
