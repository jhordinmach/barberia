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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'osl~9yx#1[ebFBc8+x:_sti-.$G^c$B>;r&-|TE1JqShz.ES/j`r`9:%]xdt2$?T' );
define( 'SECURE_AUTH_KEY',  'dJSg-h|jzcfL9!b{P]q;I;?990umUh((8p=?pB6KW~1RbB_X4*o^dJUA/<sCQh5Y' );
define( 'LOGGED_IN_KEY',    ']8EtN:ji@ ;IjLh4N4fJN#t)&2c}Ir.u1-Y,.*(DW(+$?N(f4?3vNHiLQh<v=jZ0' );
define( 'NONCE_KEY',        'cz~IH~h1hu-uxn$9R_ y:%/wsG/:2J6$6JB]Yv(Z7SB+Gu5:xq<!OyqoeE_Q@;~p' );
define( 'AUTH_SALT',        'FXZwu^8u=S8IbqyeNdFezm1=t,ELY&wE#mE_ot{sZ8/^Gt/X),rd,;: GN!NXB?u' );
define( 'SECURE_AUTH_SALT', 'HNOFW+Y6_WcbkhXb;1ok,?$|&V[DVmnP,99G@6o?{zbUetp2q`%7B[,C 1X*AIIn' );
define( 'LOGGED_IN_SALT',   'dV6@)3pAvu[h) cI|Ib;r!83~s1grN{Bg`:qX9kUCgxhTfu@]LJH+.6K]TU3 7V_' );
define( 'NONCE_SALT',       'fFR9 6M<aRE[QA<WZkfV3s)hIhq6BK>cIO9I@,:Yw!BFu^^6bJZm|Mr^8+Y4~G<7' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
