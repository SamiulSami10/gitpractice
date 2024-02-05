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
define( 'AUTH_KEY',          'GD$DHLCs#*!q% w^=8kHS)y+G^b?w@gmFC`KnsAPp?ih#%lB{l5GT8=Sp{M3??f>' );
define( 'SECURE_AUTH_KEY',   'lt8qI5xd/Uu~}_4Ti`d-2$>0Ce#O9f/F5.SdS1XP3;8~595DzrnS`ptwqL O!&.<' );
define( 'LOGGED_IN_KEY',     '&r)9R8(WHXzs_R:&~VRl;%^t~8G{#2M04:}p<&Q]j<RS1b5ul2)=xI?!1u?OM._@' );
define( 'NONCE_KEY',         '|OB=`b2isRQ4!T4-X_A$}Q%uX9jr}tZRUT:T9zyS%EpTDuM!46gdr!<=GOShaa)2' );
define( 'AUTH_SALT',         '1fCNjeH/*jXJwy(+Wc,6WM:vxaEDz*QGz%:fFnx9y}tcy54*+j^_y8iG`(`Pq$yy' );
define( 'SECURE_AUTH_SALT',  'oH@IK5;_[JY6yDUbP)G7{^;.#B pUb.PMIU;c<^N/B,ophWx3sY9AX[9+jxHxqFx' );
define( 'LOGGED_IN_SALT',    'Vysx0(FX(^l=8vQ48v.!O}+|c1R0U[[CQJjku#EJvq?p:-]~&ilFR/R3kIs2)x8h' );
define( 'NONCE_SALT',        'SDWV,,*=p;sL#ulx/1>>]p2H5q/b$(7{w3UeQYb/3]1d;!y([$?5Qz5pw|f_oq+x' );
define( 'WP_CACHE_KEY_SALT', 'jDl>gGBZOCBriqUP`+nr}r)4W~[<>sqFcO5L w80Fm=ZTE 2T74oxHK3-p>o$v.t' );


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
