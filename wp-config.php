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
define( 'DB_NAME', 'quanLyCongViec-wp-2023' );

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
<<<<<<< HEAD
define( 'AUTH_KEY',         ')MU=.gB@xUm*OY=3BK9Z_tjM:Da5[8%Ku[_PO@/CG^R__THdxG3 }P8CFZIJRQwn' );
define( 'SECURE_AUTH_KEY',  '-dZOe]68M)8(QIrGf3Y:L{3_7B#yhw>Mw_@T<9-,4i&|^qdzpeKbH,+[<mAE`Ha=' );
define( 'LOGGED_IN_KEY',    'F>($Zk(U.E+mr8Iva:D4L]$c9C=dg/I~OA8Oj*_*]&r] apy=QP{p1`}6<wG!A}{' );
define( 'NONCE_KEY',        '4T,JZ<Dg`yHQ{C3:;$!Bq6RO06|0jO^>_;MWpI/$s=XQ{<*pB;5i0|5e$G^#N}_}' );
define( 'AUTH_SALT',        ':gAcWEC34[ptD**r,{A`M+*+T? -W}XZb9WUs@r8c~{P3vIN;N,48,6,^H9%pfX5' );
define( 'SECURE_AUTH_SALT', 'h[pEjNEtrUy9._p1r)w&}3P?`ILY)0_8nsir$|UJFF*k=|ap.+)}eXOa*~^1FKn=' );
define( 'LOGGED_IN_SALT',   'P[T|w>.V)e9-UlyYDE|kP[S}0Q/!3S9#L4V~GJr}=S~/ilgC^cSsTn,f[<_$%0AI' );
define( 'NONCE_SALT',       ' +[$VnnmGRtuda<=8Y.[TN>M1NCq]B.>DMHZ1A;)Bg8M7 c99fDShqi$@rStM}(n' );
=======
define( 'AUTH_KEY',         '2yC{XoYWdX2[`+.F}{r/46 xi}TAY[67fq4%m8d[%}V5_Cf$.?3l^U{Gc{48V<AJ' );
define( 'SECURE_AUTH_KEY',  'UUqtZiE/uU%h<.4rQ2T;0[Y>&D^84@=j] P])K)L#Nxed_p@6d2r&L^o+Mfn.Wnf' );
define( 'LOGGED_IN_KEY',    '}Er&y$*sb%+O~)ROuD%`K0R`FI!u-?U5[;T$6*.vpMW0j/#`~#5[Mdx-&m<18>>Z' );
define( 'NONCE_KEY',        'MbmRv;|ib|C(_0E eev=wOSs|,&mOuE~aoX*C0yZwI}DgdPo:&1]&)>CDZjnw>d ' );
define( 'AUTH_SALT',        'h<B81/53M*x=cZ-gupJ%dP64qV)fzn`j>1Ta^JR8yUjSIh;PRh5O]s -UX7Mq8Q^' );
define( 'SECURE_AUTH_SALT', 'kh1*zuBr+#O8%6BL%|XD,]%Wphr$afbM8#YE8Xu`[Tt#UigGrdv3(YMPiM~Uh<sb' );
define( 'LOGGED_IN_SALT',   ';Ts7|!LwXOnAKVC!6[M,+2bRbsW|No}kqz)[|iR!#]l(qJZ^gMx^M#pom7zM=j`T' );
define( 'NONCE_SALT',       '=YQXQO1tx)luJ n1yqo&_S2rLMu^L<UBgAb3w~$9p#q%K gm([XtXVu&#s1_n[^9' );
>>>>>>> 1-wordpress-603-2023/1-groups/1-L/1-7-Duy

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
