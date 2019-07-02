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
define('DB_NAME', 'subdev_asterix_theme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '#a?6|4U&||CeS-_(H0BBeMC}2`?M&ICL4&PI%M+H/DFCcv>0=/WonAQMBE+G<F<m');
define('SECURE_AUTH_KEY',  '%vZ)z6.N2Sv^;MO]_q%/J~b><U]|5_ 5+]*a!0#Zm`l6!hb~I^QZ42h%3/+h]MQ-');
define('LOGGED_IN_KEY',    ']8Nz@s_n^~F(R1{u&s(GHw_|)+a^ QA)Nn5{6$em_C]xhai%o.}fy335:]xmH&<.');
define('NONCE_KEY',        'OG-r>cJx4l$dtr_.@Ru)52~e$*dZ*t~?7p|!PBAkJ_?7pAF&-Q~Z-ItEuX.gM+s^');
define('AUTH_SALT',        'P?N,7sq?b%,`+OMv+?#Z9G-C)xNd3$x7vA-=YG=+<p~6Qx2G`D|<xR8+XkP|9 pt');
define('SECURE_AUTH_SALT', '~{P.=OF<BHX9R]PI`.iN+o.p),@nq-%4YyI8<m!56 SREx[|1;{ce^T%JMIKL8&P');
define('LOGGED_IN_SALT',   '/)1yAmhEuM<zay7VhOEP(ZdI(G6L@Q0-UQw -op#V3mIM:[H*;QP4t_P^XB.~nVD');
define('NONCE_SALT',       'i;k%@d-qI-s@~Df8t^cp7$4`b-rvPJ^*G>-n*O:5du(g0@SS|g;Nq<|{_7GNkPa7');

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
