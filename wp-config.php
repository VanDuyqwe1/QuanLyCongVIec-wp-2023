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
define( 'DB_NAME', 'thuong_mai_dien_tu_pdt' );

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
define( 'AUTH_KEY',         ')MU=.gB@xUm*OY=3BK9Z_tjM:Da5[8%Ku[_PO@/CG^R__THdxG3 }P8CFZIJRQwn' );
define( 'SECURE_AUTH_KEY',  '-dZOe]68M)8(QIrGf3Y:L{3_7B#yhw>Mw_@T<9-,4i&|^qdzpeKbH,+[<mAE`Ha=' );
define( 'LOGGED_IN_KEY',    'F>($Zk(U.E+mr8Iva:D4L]$c9C=dg/I~OA8Oj*_*]&r] apy=QP{p1`}6<wG!A}{' );
define( 'NONCE_KEY',        '4T,JZ<Dg`yHQ{C3:;$!Bq6RO06|0jO^>_;MWpI/$s=XQ{<*pB;5i0|5e$G^#N}_}' );
define( 'AUTH_SALT',        ':gAcWEC34[ptD**r,{A`M+*+T? -W}XZb9WUs@r8c~{P3vIN;N,48,6,^H9%pfX5' );
define( 'SECURE_AUTH_SALT', 'h[pEjNEtrUy9._p1r)w&}3P?`ILY)0_8nsir$|UJFF*k=|ap.+)}eXOa*~^1FKn=' );
define( 'LOGGED_IN_SALT',   'P[T|w>.V)e9-UlyYDE|kP[S}0Q/!3S9#L4V~GJr}=S~/ilgC^cSsTn,f[<_$%0AI' );
define( 'NONCE_SALT',       ' +[$VnnmGRtuda<=8Y.[TN>M1NCq]B.>DMHZ1A;)Bg8M7 c99fDShqi$@rStM}(n' );

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
