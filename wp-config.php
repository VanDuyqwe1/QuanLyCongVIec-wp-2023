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
define( 'DB_NAME', 'quanlycongviec-wp-2023' );

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

define( 'AUTH_KEY',         'p!2_G.r`5@y,<5HV5$9Q{?6`h(QHQ@G&>7.:X3DNCV dVq3 %%I2?M*jOMZ|7<_d' );
define( 'SECURE_AUTH_KEY',  '(4.,6:bLi$jcSg#5^?4(}iy$aa]oy0l~ldFZZ(LM]KEwSQqyDwRC-vOm~{R[qiuv' );
define( 'LOGGED_IN_KEY',    'QyIYxRC.!!_-PV49nm0n)9A,wh1;efG5P`lo#h)=;o0TvDs_tZ,~/!6T1XGPBtVw' );
define( 'NONCE_KEY',        'd}_u3#,YC$_YZf[,;c]@+{} f!~0m<K.&X_2K{{Y_RaVn_dr^AEJAz<t}N3fyQ#E' );
define( 'AUTH_SALT',        'g_T a+S8ji|C*#eR&PxiU:+_<k]sUs(;*&jJHMIdrq1jqk%$Xb1ZqaTz?1-LQbJR' );
define( 'SECURE_AUTH_SALT', 'X7QV-e1 xQJv7.J$$F#p.xQZZZ-cv);ARgh#n}qx:)TPwI<1*x++9#}b_Pn,`M@Z' );
define( 'LOGGED_IN_SALT',   'Wl::.VOet@%AgP0csYZvi;S(hF0){15!X/|D3oP]O_fH@4M?<q&qWnoI*uU+QzyY' );
define( 'NONCE_SALT',       'Z29YBXl?>1OMg].G6NI:q`B1$P]$w#*6sGg1DB8cLF<p~>MRPlGZL,+Z`cvAl&M3' );


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
