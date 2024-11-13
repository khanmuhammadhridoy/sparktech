<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u693732437_bPmGl' );

/** Database username */
define( 'DB_USER', 'u693732437_ekAMU' );

/** Database password */
define( 'DB_PASSWORD', 'Admin55@@66@@' );

/** Database hostname */
define( 'DB_HOST', '82.197.82.57' );

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
define( 'AUTH_KEY',         'T7DzZq^XWO@=c7)3P5fSO,W]znyIt~E)wIk/g=&3OLyZT!=Rx,1z c^qhJ1tbs j' );
define( 'SECURE_AUTH_KEY',  'z.n&v2GYl:!vu(k_x|A:dVy,,%M2yKy|zE8$9W]P[Oi]r~R3UNFcJS+s-OW$z(Jd' );
define( 'LOGGED_IN_KEY',    '-p&>2=k Yk K!Wm#XqcLwZ,bj()$Sz6+oz7]46h-02zPZP Dhw>KQAy2:QumW@x+' );
define( 'NONCE_KEY',        'mZR9Ed~P4y fs`bK0FNgA5f2qs0HDEhld&o?[ Myt9{h1=!A}QPivYCm#hjC[1P4' );
define( 'AUTH_SALT',        '(ogOuQs<eCLp$srDX6K+YsvVnSz1we%c1n3Tt_DnKfrf+j-W|Gi%A%3OvY~q{i$9' );
define( 'SECURE_AUTH_SALT', '[c4B&+KDp`z`Ib?+u|c8iEvF|?TMMvE G1T`=8wG:7>g,0VoJ{q@vA)#WeS`O7nt' );
define( 'LOGGED_IN_SALT',   'd pmR_$Gn?s$AC_1/`GRYj+fic<g(,QE* B,Zssp=)$ULp=nz_q~)g9tBZ[q^$-Q' );
define( 'NONCE_SALT',       '_sugo]qRzumCa[KC<!Y)z>zA@}k+T2{0NEfebb.E=``R(M]z<[*8}?~gCpTQ,cI}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_sparktech_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
