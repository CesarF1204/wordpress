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
define('DB_NAME', 'MyGame');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         '2H|aSg>E?M3_NG8%/>ZZb%}ZXg~B0?BC`vas}Z(2Omp6$GohB!#rI{Juz^=84Q#8');
define('SECURE_AUTH_KEY',  '7EZc5lF=tA{BRu8F1NC@68qG=YW05L03eGE*]XQ+CQ 39?=wQZ|BH<S2ZlA=Yl(?');
define('LOGGED_IN_KEY',    'n~S=I48#gzP5`uVeX6lr-MnPTrz0AH+.o[p-RGMVAb~joh,q2uru?yR3=#*;2|H:');
define('NONCE_KEY',        '&=O0s&N6</f5~R7;!cPi7)EeJ;e#dPEd=c$nUHr`8V;DK{P:UT[8{i<`hUH[v)ri');
define('AUTH_SALT',        '1z+`iInN?+MLu7<Df~cFrYf+b<9ajz=)Ue%aRmOM=tT =ae)E`|:{8;i%3RK5y$i');
define('SECURE_AUTH_SALT', '*^W*7hBAf^2#IEjDs,V!~hc=pCWa4+ K]F3VUW7D8|Q>)uzPNx%7I6B4Ozj5!X]x');
define('LOGGED_IN_SALT',   'PH>.2`]SO-s2u;>>@k,ya4Ihfr=jbKBZmbfh}^il%VH.;jnp9J(6XQc~sDj&2K9o');
define('NONCE_SALT',       '(?$#AjT7. :_mg.FJ&-t:h5aUGZw[zI#qQO]y6k(_QjSBvTC2%UKi?.fj+YDW.E,');

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
