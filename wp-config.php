<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'coursesource');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'N&x!Q{`xqt;&P+7)h|g-3>/OTkQ:-)[S+-Y<Z(>{0V}(D+F*uo/EdivR!HB#Jl]r');
define('SECURE_AUTH_KEY',  '[5hD%G@?C)ne8U3=-@LL5=:`h,7+IR{dp+6O|o=(9f!d6--jfYC9zCxU3]8pCw=G');
define('LOGGED_IN_KEY',    'lbdGw>tKZmOXQTSMg+eTFW:V0l&~XNYK]a2}U|+]:7TyY@4lKZ|3NN5c3D2]?ME4');
define('NONCE_KEY',        'YI0XxUYuREwbbl52qGR ;)y&4aw5vAQoy;!esfBPd3wMjtYLc2zAs1^%oo`]D-WB');
define('AUTH_SALT',        '{=D1dyVUs3hL~?f87 B(+u:bfUf[YHFp=h0m<VWb;Yx7+:|Mo~r8I(Ad+7(a#U/R');
define('SECURE_AUTH_SALT', '=Lb%#[,iVhZ^w;^;s9r;YjZqU1EPdXiz=pPLK%a#ponxhwA>pUF(YY3v~zpqjoxU');
define('LOGGED_IN_SALT',   ')bv|@ogk#l8{0scqL;-Sv5+er-8[`bXRmEm??L6sG,@n0J%unS]}?Rn~;$1dBo#|');
define('NONCE_SALT',       'F:36}=YO!U~3H1pPQ+0!Y1z%;&WO$;+W1`U64bjlj2Ln=n~/{A-6r,PRuM|D>||1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
