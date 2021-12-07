<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define('DB_NAME', 'toledo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', '6T*BNWHu,;$ziQ|mkCYS)VWq5Gj 90U+uU 8F_5;^_#>  n:[Pwt;JjJ(68AS=VH');
define('SECURE_AUTH_KEY', ']eff<fvP?tv1TTj|~rBrsy3fB@OH86uC#B?|t}3kZka 4#k{{t3J,~cHSsO_q?sC');
define('LOGGED_IN_KEY', 'm3Ljy92|U#bm`;@)~q:/oV1F7tHC|:N7S-f5S$YGU)(z[ ].IB`MK`J!T1q,~k9j');
define('NONCE_KEY', 'q>ox5S-D;7)ZiOz3KECO[K%~[r,0l`[P|1yI6pR!ij9I:K,yJWw!93Yky}gw]YkP');
define('AUTH_SALT', '-?S4tJS8H=!$1 6@Sr>ebTZ%@-s:Ms`(]Ph~w>&E-)f<GQ^tcPfd}q??%LD^Kfp>');
define('SECURE_AUTH_SALT', 'g4H{:+;Ew>zV8DU7H^)EepH+OTd_*~F>xF[|Lfe!l.+6>%}ZHFu4qTS*UN sDOo*');
define('LOGGED_IN_SALT', '@&)d^&OIg ^sU%Ers>83:[Nps%ov83f*7t!I=TbC9NLZ[g|_=g<0&LA&>yTVXL0`');
define('NONCE_SALT', '2gzU#|C?gZz.H{||]MdTo&2[V;4Y-g7SQyBQy6/rSa:{jaC4uOEnN}:UGJ?mH^>(');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define('FS_METHOD', 'direct');
