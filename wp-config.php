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
define( 'DB_NAME', 'nhomJ-wp-2023' );

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
define( 'AUTH_KEY',         'xPr&GP^eq_l-r#p8of{UiD&eio-Y=Sx uA:byr.;x[$h-fNGn#KR-nuJJ^`pRA+^' );
define( 'SECURE_AUTH_KEY',  'x{@#ir,oq!=^nitC$X`5ca=Ta]r`PI(O}HJq7K95tU|/QpPK2X^l9rbN`;^=..PW' );
define( 'LOGGED_IN_KEY',    ';GiZ:_S5.ZhZM7|h!9!rDb:R1|@T?-Sks{q/s ea74||VCy~@L14PEp:DngG/=Md' );
define( 'NONCE_KEY',        '|97|(k:oaA)My XHj=F$_n6 !hj 9(IMlvNR$wDhOKocZ]1WJ^`&3WtI1`S7tR8>' );
define( 'AUTH_SALT',        'Id746>8y4|sH<7,u;=~f!-c)kIj;~>2iZb:YZxs>iLE1pd>^-N<t2w960o^P)%#<' );
define( 'SECURE_AUTH_SALT', 'CvaRn~  ub?4EnDO>?|y4>8oBIc(PMxkbfRXWM8S2y>3T#@}3y>Cu+=!`VO >Z7J' );
define( 'LOGGED_IN_SALT',   'I2Rt1o)1c+u!P 8IQ|%>7cUZ@/L8j&=X9IgF<JNT%E@Cq]f&Lo.%>GajW>AT3Qm%' );
define( 'NONCE_SALT',       'kq5#E5B3>g)BVkYN*37PE>V5O7(<;a{C/vrcIcEc&@8;_U>p[GlO.}1%#I39xQfT' );

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
