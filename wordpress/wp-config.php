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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '^( !l]a[E/tSx_v(G!-no [,jh6pC-&g>,?pP*%bY[/9J*VM6PS16ZtELvh^Mtk$' );
define( 'SECURE_AUTH_KEY',  'dX-jv-2!6u06r*$_S,hceu67Lk!,bMv{;t-wjj6C*Nnulh3!$?i_~97*0%p<}s_X' );
define( 'LOGGED_IN_KEY',    '59NDQL%97)ko))9W,l*Cya%D)S>a^a IkOn1;M&;OR3I;q07+/d$;J,w:3E =~M.' );
define( 'NONCE_KEY',        '4qBnHCDzk?026J$e?fDgLt+W24)3|vt<c}NXP0n>J#W}zvMQ?m#4nlLeORX5 xda' );
define( 'AUTH_SALT',        'bT?XuekwFnISmucx7/&[}myS/EpN:Y6`{gj5[t_oM$3Fd(B%&{lRbrd2~~RcJ;5:' );
define( 'SECURE_AUTH_SALT', 'hRoqgD3.rf=TJ`HE{]:Z&s9*<X:ORAy`-W_FRMpkFz@MXN?@rBmy4-G6N&PB~0Rp' );
define( 'LOGGED_IN_SALT',   '[r=(t6:kK(J`C5=P}paHX}~^N`qzZ3v~ )l_Xgi]+G!y35LaHu4,=1pD$!Ci?<7F' );
define( 'NONCE_SALT',       'FW/UhaXm{0w3@(W|hwe2eB$I`CW!gY$WB^msT}2nC8yOd|la0I_|e)YDr._8|foq' );

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
