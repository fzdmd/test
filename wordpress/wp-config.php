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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'O!()h~~^FFA}jSR/(}P}d_Bvm7+BECMN3Sb)tvGYyMy~$^{#nfRc@0+F5<t|E1}i' );
define( 'SECURE_AUTH_KEY',  'FUbU?/{#0)tZ-fc7C xB<1K+ver9rqIr8P^L7J=dxMsYiIE <CZumdk].mZ<-Su-' );
define( 'LOGGED_IN_KEY',    '%k X5IJIw@KwBjJW>a<#odu`m-G3^,Nq3g@{?20N?J<e5[,kM3rA@=sDcFIATz!]' );
define( 'NONCE_KEY',        'W0& #<@_:Lg7GKC8k?51$gL>b.;`yx$p1}mO,N2xOk2Ws}%XWd8s~4JAt1tgOwsr' );
define( 'AUTH_SALT',        'Xz4a<PR;!9 )4&o/|Xo- Z>3c}K]aW&!_>:Za3-NW8}kur/q<m{6{#~>3>/VX`@L' );
define( 'SECURE_AUTH_SALT', '~RR-N12H9,wJyDX-+1lC`8(f=p{MDTWj&}qI:?C=hnp0#L{KqBh~x#9lzbH(,U(L' );
define( 'LOGGED_IN_SALT',   'Rd]Q+2niVA>009I.Fpog?0^V4$*;Z}s1[D~i4IF#][.y1Bw,[P-d~]iX.L_^CnTB' );
define( 'NONCE_SALT',       '3c;05TspNmTr_hef,b@gkqzWf6+oz}x/K54 bZfDw*#i_n0i| |G.GGR]xM[c][a' );

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
