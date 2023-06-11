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
define( 'DB_NAME', 'net' );

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
define( 'AUTH_KEY',         '}xbqbVTw>_6Wov!r+HKzg&T@87DQH+<|,8MJzW24zS5PW=}0~t4kA#>5V=Bi;CY+' );
define( 'SECURE_AUTH_KEY',  '#/?S-`xt8W#M,R$9%0$TZrTiUPtM4{B^6AU})jla8z5va[YIk1_vAWRGbb3&8@O#' );
define( 'LOGGED_IN_KEY',    'TR]%1;#-`~v&D75mtA{NKzcT=~0.i}ZCAKE: _B*dTohD{=me=b`A9~Zd=(~<45A' );
define( 'NONCE_KEY',        '}`0:WZ{CRoFs3AyUjv_#@7uq@f?r#-1iE6>1r5wjTM!+a.o,|,dfW|u-h2{q?UW7' );
define( 'AUTH_SALT',        'o_3[@[Eamwg_-W UI)?A@d1{h9BrwF/~Ue3*Ef)WI6/k>GX{3eF;<4vS8>8%D 7m' );
define( 'SECURE_AUTH_SALT', 'A:dKWqIC{!c2vV6qd[)cN%R)G^tP} N;W%NI6$ejGiRu-chAth`dQ_poE`7d}]!)' );
define( 'LOGGED_IN_SALT',   'V*-*04My_(N#oE&da=>zk?iU0q2,Kv$!25tf!+{r~,WI0fq,NQk$1]5PeO:Jt7&#' );
define( 'NONCE_SALT',       'fpiCBNi4Hq^`}TY0^BlmBuEr{^M|YUu/+~ F2=,GpSG81;/=P=9`|k63=5-AO=aP' );

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
