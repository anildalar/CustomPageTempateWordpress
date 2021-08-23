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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '-eR HJ(B&MKwNd^/o&9Q-E0o|q*UJlq5W67u}%ZCi0D77<hkk!MpT!xI`|[M,kA9' );
define( 'SECURE_AUTH_KEY',  'wTRz ]$fA%]uGq58KG:<QiV T?~gyHF*`i*;m(0C#HNBY0VI14yd[0Xu2V4H27O%' );
define( 'LOGGED_IN_KEY',    'L+GVq3B[MdQZBURj0EWe$K$Ie##H,jk#h]xLW3|=Ek=R%kV24BAKyyiJ<R93:=:c' );
define( 'NONCE_KEY',        'Vgd@CJG1O?6)2WrL23rp.MLNTK(r]#,H_B~]uDT2YhtX{Rd6&8bj[$dl {wogg|~' );
define( 'AUTH_SALT',        'X7O{`*yyp|-NHs$I4oY(l]Q.~?qvRltkHdB9b^%#TP7RR4aG`Wr#UjdfO(D. ,,g' );
define( 'SECURE_AUTH_SALT', '4{HgPRMjE)?qr2o(,hB|Ji%F,*7*r>n&*QMv7O;0j3ITQ3~(3|BoV6(o7*agdb45' );
define( 'LOGGED_IN_SALT',   'Q8_E%NJ8lCT.);p<IdpEM<W]uovOzmu^x6]P4,XA#zW,=8|{fKl/]h/<zV}88>]9' );
define( 'NONCE_SALT',       'DYiE(!lrK{b]BCn;?/l.n^MYol6<eS(O)SC+Y~e%QAUX;AD6t,D3hX PZxTEGv/;' );

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
