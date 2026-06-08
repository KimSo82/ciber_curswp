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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'K&4F&.lo+$7];YP67*MFQsHWC}Da[Aev`5ES)V4VS]3/!lO,)%A7M6,I+8LK e7l' );
define( 'SECURE_AUTH_KEY',   'C*%II0iCl>}rIV*g0<Vib_WM8=[.Du8yQm1P u1W{i_NB6B6.<l3w:0l8bP-c^{=' );
define( 'LOGGED_IN_KEY',     ',8mU~j 82_C&0@+)J%S^Ua{*#Ps4p$AcGwlPsIdg+MOBR/o9uU!#a3meW0|rc X@' );
define( 'NONCE_KEY',         'HSL&dlZ{$8ay{+Q0:VZxz0ZO,/FygnmO|pY0B1~ArE%RWji$TumufA!TXo*/#(.y' );
define( 'AUTH_SALT',         'OWF%[szQ]|Ot+YA}Uba^%~p%w-[dCAh2+MlSmC!N!F7cxsYy(1iG<m}_r80(TyMr' );
define( 'SECURE_AUTH_SALT',  '^w?%/*XF_w#M|<c &JOi(1v,~q-$2JV:i]P:.8%u3h DW^~5?NlDcZX9u//$AHoQ' );
define( 'LOGGED_IN_SALT',    'zlcKU(-lu7.p<{/{Rc N-7>DY$6;U W$tQak;V5^SDmp!cn@xUENg-|xR[](5<d+' );
define( 'NONCE_SALT',        '~=qAxK@z i=i:AXgB-F=]44+,P2ohk0GuM/d;P]$+Z<TBFvCz-6Md*);{I^!g5F&' );
define( 'WP_CACHE_KEY_SALT', 'V+.Wc= Ot[Clu63ysLD{u_L4rUGolT>9U0kB7Xn7$>7ye%(7dx80<|WI=ash9pIH' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
