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
define( 'DB_NAME', 'u722347537_tBm8X' );

/** Database username */
define( 'DB_USER', 'u722347537_6wPCk' );

/** Database password */
define( 'DB_PASSWORD', 'S25mO9123c' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'N,2a$@|Z*U$,Y1L0>oMLyb$TjDTP;,?2]T#=Y6G)1YfxIgX6dY!m@:ql2MBft8fN' );
define( 'SECURE_AUTH_KEY',   '(*#[XKx#O#9t/Oc9PgAQ-!8]>-+cg%gEWXI_~4]N7~MdkL.9e7B#d0USqu97ckKc' );
define( 'LOGGED_IN_KEY',     'i.U@6W=Bz*/`1Lm;3TM*Q><*HyKs%,/lp/zb:1tw4&nM1H;SW4@Jx2vmrbgn5*G5' );
define( 'NONCE_KEY',         'uWTRr$2E!JJQ`-:4?WQ}tT1HG)y=ieA*)D;;O8K7`:}PlNUUnxTXt=I#n_YL*A.J' );
define( 'AUTH_SALT',         'AbZE}u|!`XhG:HANq1*fV}./K*w>^0,8-GEFb(tGp.&<iGX+r6lY[v^XGd#X%--.' );
define( 'SECURE_AUTH_SALT',  '2NfNAp_60~:?d,Hh!M;k,zCgXo-OoA!{}SmngoF2rs#L8Gn f):8dAS6:<-,W*h|' );
define( 'LOGGED_IN_SALT',    'z`419g^P~q8CyojwXNl-7KJ?G0[n7s#J7u?MV+8K*ad]$js.>HD}YBN8s>LuS)u2' );
define( 'NONCE_SALT',        'SF)lbWn}(bWutiy#;i2Fl);^lY(<e}Nk*hFr>?Q.<.N|zH[`3tu4@5<aYD# p~8>' );
define( 'WP_CACHE_KEY_SALT', '[sJ$ 5AWjMW@N0T>;nFS)~RCKYxzsb8|y89@HZo{2!ijPj&Zdhf*8>7Vli>S$X5R' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
