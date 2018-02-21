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
define('DB_NAME', 'experiment1');

/** MySQL database username */
define('DB_USER', 'experiment1');

/** MySQL database password */
define('DB_PASSWORD', 'experiment1');

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
define('AUTH_KEY',         'jUmObRyjh,Hi ]I0aQtjxOt]voVHZ/P+QjVzkyE#;(UdW@twm{=yLe1.ij;5bWmt');
define('SECURE_AUTH_KEY',  'xAS%r;zz&n!V)073k`{-w#qnBm[<O?|Drjd$eENkw<=^B1W$6,|DPuq?Am_ZkT4u');
define('LOGGED_IN_KEY',    'CCXsLnr&n5>h=)ZF2XD,htL=5KaKBkie7E+,O]>*]/,LV]w[tRi}Y}1X N`57PrY');
define('NONCE_KEY',        '-zquz#h@nv5gWMYx5!y=$l8UEuQ6c@+e+.XY7bM:J7/+j}6FnX|fR$w5QkhvK)JU');
define('AUTH_SALT',        ';v8hU^&;eu{G$~o{<<Z)t_W,z .o;}Xt^)2Gz&hSs&*;L:l[Fe{Ft<F$#~Y#6WKY');
define('SECURE_AUTH_SALT', 'tpBnH? Fsm{((&(_gXe<l +Y:!o2jEG^HR{hwZ=F[XGtph*ck,-t=b@42ScOS1x[');
define('LOGGED_IN_SALT',   '6J1f_T)4n&)v|OrwXMXU}E#ojD`5v0z5~9k%]ANHs,^gnRYHX]#lYcay<S;<sZQQ');
define('NONCE_SALT',       '#Mow0X.H^%f[E7(gKnz:v<8,JWt}@4o4_ox1eM>W|shIWT;Q BZSX5]e6b)QW2Kj');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
