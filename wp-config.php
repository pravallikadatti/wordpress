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
define( 'DB_NAME', 'mydbs' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'database-2.cnnaa6lhzq7a.eu-west-2.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '[+g/gbR<#xp%Zy#*0XJ8BL!W!W:deR*(T,L:W2%>+WRV7L(F_s(qmrIIKgygs3Z=');
define('SECURE_AUTH_KEY',  'N#_|XgM7G+t=d<A;qP<ZU-)e4KLPUV }[PD|=-m962<y0Uv2vEqA+/I,/xM:V${*');
define('LOGGED_IN_KEY',    '}Zfjh7m~+o;2.jxRGFkwe[d ul5g5+]zo[lu-{tz@<bi;(yv+iw[2t$DfoI{jt/k');
define('NONCE_KEY',        '|| *-=G*2a5>2X7!F;F6$)Gt6dIG,6Z|go8+w%@{,,%n-/D9]GkplIOdq`E0NG,K');
define('AUTH_SALT',        'j_elcT_->;-CW-D7n8B9W^._lL<cl;J|adQwN7DkG&&JXu*NR|>[(*R}[+BX11dI');
define('SECURE_AUTH_SALT', '}kC&GC;~R-~;s&@9H`yt~/F0e&sN(MSYXEa8~%s<7WghjAb&ZQ$faQeL;D]Hp.0j');
define('LOGGED_IN_SALT',   '73p+B[;@W*fKF-}j=8?DnDajFOv=6#7mH5M#B`YxVa75/|-4>UgaoD[#|+PJMc^{');
define('NONCE_SALT',       '{XJEoST[U+]r7[m<lE+&7EGp{Oa_`}${huMQ8uxIlCfT5ec-N:sBT?U}*5TV/^lj');
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
