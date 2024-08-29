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
define( 'DB_NAME', 'mystore_db' );

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
define( 'AUTH_KEY',         'PkF<!1,^AweU<#qbs+2@}7)iQPuLl#Tfpm%>y*2Y{A~kU73 <JvBzeeE(XdB-Ip{' );
define( 'SECURE_AUTH_KEY',  'Je}q&FAJCtxb{&J,@pL]=.$in:jNGU]SHL>)z.V:g$ChV{uw#;OkbEdpN|*L#Pwd' );
define( 'LOGGED_IN_KEY',    '2_@RqA2UK*w#@ai*H?Cowkn7S)m8xmMrYwO>c4bNF2J@F&=g*98:*LO}DE%F$-Is' );
define( 'NONCE_KEY',        '?0=.SXxFBDTr9r?w@62jpLGlsBC90OhkPir!S/B/G^.#J5}~OIy}E_KS4OWDYeLb' );
define( 'AUTH_SALT',        'DlWP4Wl5R};LDt <_,2l} U^lYFtS_?lJ!e @54M2Utk-#s<($_I9*^t$q-DHJ1d' );
define( 'SECURE_AUTH_SALT', 'b+h|Co4Mb.?yuKl:P]}$;(+W#=_w 9Suc0a?b$}G$>}OjDeA{nP(#/G[]q}z*xy9' );
define( 'LOGGED_IN_SALT',   'YeCN? Oh(mnJ,izU_`PM_LNW(V*F{K*{)~}8WR<4?G&<J,5na@KL(n`iE-AqW[5I' );
define( 'NONCE_SALT',       '@xVmKU0bHrR`jIcS)t${-RYfeqT5K9Scy;H$WYTj<<YE9+{/M@Q[Z~{8f2*^Tf2#' );

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
