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
define('DB_NAME', 'sitiowordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '7@@T_Vfl,}/P[ -}lFdJN-|L)+?,UG7;=EP`/X0g.-6I6ju (Qo?mw#JQY/{{B}>');
define('SECURE_AUTH_KEY',  '/T+`V3[4NaIq1HHV`%o7Nw!)*]DiNpa~cjDQnFMK*ST?J!X3l]fEKTr#lk lAo{Z');
define('LOGGED_IN_KEY',    'X@g81IU:2><lO6/VU-QHXkgT-,+r1s}w<kE+yhB`HxQxX>]vG9V}R9&Bkuu78I<a');
define('NONCE_KEY',        'ApR|P#gnl+t6E:lCagb7uU~qSL9Lv,pBF+F/Z[u*.-mW+{Y0zVb[:}Jo3/!sxZ7S');
define('AUTH_SALT',        'V]Z_yBfVlEJgMl2) wr!7MRR{^],v;M+Y./M!0?d>[B53rs!rg~U+&08o-cNzOGk');
define('SECURE_AUTH_SALT', '.uzQM{s{0aTuJz$:g_AvR+0||-oCX$`|:Co$<t94R0p|4Kr[>8q3R^i1)9<xb(Iy');
define('LOGGED_IN_SALT',   'S:+n%OYl.Oos^-YDS=AXo@/7i_=!ii>Y%a^gM#4U}dN8>eeTs#gNGSPy  H{v|^$');
define('NONCE_SALT',       'g?:EiG&Hlzp4sB|-=2rH(--G7&q%@ln#D,)KA@&eLO*.reK:ar.SFOKVYyb%j 4Y');

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
