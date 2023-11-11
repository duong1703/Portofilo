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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Portofilo' );

/** Database username */
define( 'DB_USER', 'Portofilo' );

/** Database password */
define( 'DB_PASSWORD', 'Duonghk123@' );

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
define( 'AUTH_KEY',         'H;IspTZMgCE$(F|v>%vy77`I-:v*mu[E1QUK?gXh<Sm-iO|u?[|el#OWu`[3jhrs' );
define( 'SECURE_AUTH_KEY',  '~pi$Tp4Kw@duDa*|t{q66BQs)&m!JfJW6$M4i~LZ!c0qU0Gu2dRaMH|NGc-=pw}p' );
define( 'LOGGED_IN_KEY',    'LKyWQD9k?Is6kp[vhequg[AStm_tnP[xLUKuX<jMwL$Gi%Rm=Uq9(Qd+xm=Iy({^' );
define( 'NONCE_KEY',        '>Fj>Y_ZmyrSAL5hO.)Af-oaOaikB<_Al:ffGA0~_NZ;?Cp3qaWCVV8DoKGkeA`d^' );
define( 'AUTH_SALT',        'U8(:B+EZk0kt5`,wG4Z0tAm8Ncp41,?|)/,RBwk-z#; [8u[kC@-s-S6WE%WK*=U' );
define( 'SECURE_AUTH_SALT', 'w|X$D<Vex{b=q9U(nYwrn3Qw]vJGpH<:q/O}Rx.C!#ptHC~Y~CxM,q#_~_tuU,s1' );
define( 'LOGGED_IN_SALT',   '%Nb=5fq0KK60e+8mmjZ+q&y=aeT]]$G5G|nwP0z33TzNn71.Fm-_bz=#wh(PRx}l' );
define( 'NONCE_SALT',       'D3|{Ev%iJc,jqSS,Z,4*lVupoT}9]Uo[R6u72q<.ZrZ]c^T/[ta(F_`<Km]3UhmB' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
