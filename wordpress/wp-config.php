<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mcare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!W;L$4:6KH`W5dIBeCXt&9+cqFT@^(/Nv,QI7Y:ql=k<lIM7qCK@AStUR6~ZfoRO' );
define( 'SECURE_AUTH_KEY',  'B{u9x4dYt{GS-!DciIH0=eBK:4EFg(~paQhyhRPjGe=ue*5r[aQxfwVJQdSTp@[-' );
define( 'LOGGED_IN_KEY',    '2OWKB6x_m;B/%%Q*HB=H^&}|HjTqxL{**`?#Tx5vA3b%tD#A(:>S%t-#oC}bE<-T' );
define( 'NONCE_KEY',        'gS51,EL%P?|U7m9b1cff1v.E-l.T@:K<y|s%r~)7_;mu`HIc&HqCE&^0Th_L4N4h' );
define( 'AUTH_SALT',        'gLx3~YT$oPv+3X&E4>ohjSZF}t=t) px-)~xEa+X>)^L*pp>s5dqH.v$^8?`x9_X' );
define( 'SECURE_AUTH_SALT', 'v}A.{E)9.z#_j^BSdG.]$HZ*}$u]_6hR#NJv?ontu&_~<QBJF,tM[J z+r3Bpc,%' );
define( 'LOGGED_IN_SALT',   '3ZjLK2#oK~<`l30^$+|W^qe7s^{?qqv1OJECxDJNu9+lg+@$zycd$+[ G?Xga~xw' );
define( 'NONCE_SALT',       ';gOcF&WNcPr@@voLC1 is$M?82+=Q[9`vw~dR=>nge.5}.x|QXz*aukRO8Twd2S&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mcarewp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
