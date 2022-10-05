<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u455077754_zx1Jl' );

/** Database username */
define( 'DB_USER', 'u455077754_m2Ufm' );

/** Database password */
define( 'DB_PASSWORD', 'JRGTubVQp2' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '^*>^5ya$H4@6)Mnd6uGXo42BRT=6l4X`k$xf$uR]jI}`j%6n*x6Y0U#42J6.^+`n' );
define( 'SECURE_AUTH_KEY',   'mwc=6^*=T0.T?>|$~}S.s&x(3Q~n(x4${BY_(m~;,L[W?{cZ[azmiwd_$LaGZ+T.' );
define( 'LOGGED_IN_KEY',     '5&xS&KsyWd?khfG.[A;2J:~!g3fHz(BysTv *u3Mt%#sQ qd|78ARAidI[rnJ[xA' );
define( 'NONCE_KEY',         '`5:E)@?p&|>/jI*9CNu).WGI?-ayP7FaO_.)#`XnSAU_S;Fb}DUe@44?k%gPCNMW' );
define( 'AUTH_SALT',         'k!}8q-%~Lb?fFUUYsc_s[HlenBf:g^Ym.!|ae&4athXq7)>#wk&PY^4UN5NVpH|r' );
define( 'SECURE_AUTH_SALT',  'rtu+WH]iaPsx(~~UWt};:]ENr1=%g<zW&Nnw|3L&#h]BO%@hV<u$SH)fS^|`laYm' );
define( 'LOGGED_IN_SALT',    'V)Fx_(^Cx;H>6isIHI~^m=d_0u#1?>hqvSJe6>07DXhOTAJ3F^0$45l<-pHt9A2y' );
define( 'NONCE_SALT',        'Rm6Zjp[=h.j rvw5FI=^uP8wm&SfV5-#sTnW1;mB=Za,8pcgXZh;3;b+H4$T@yC|' );
define( 'WP_CACHE_KEY_SALT', '8Y3Oy=e(yPGwS2- aoCR^0c0Hf(PR%9k.sl?KS74=<B(>:EiM:EjmNM[!LRa!s(J' );


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
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
