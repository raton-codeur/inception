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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'TyIhCsuDj7G*[q{SiAwNs=wF?vI;<%El(QEHWsL4OHVw4zyY3~FY:GBdF)l;dUb$' );
define( 'SECURE_AUTH_KEY',   'FU/mfr)Ixx6W(mnu.e99*C3bCt5f}CD}SjKRH-vJQ_<d0]`0IVQ=v3SBL|,]JsQX' );
define( 'LOGGED_IN_KEY',     'js3vgr7#x>jtOJCf9jYtBthX#05an6059vcQU6sBUpC5UOzq.e_6HNF7E^$h_p`[' );
define( 'NONCE_KEY',         'MJl(8Czxjz7TdbR.z_#c-#W(q|PQi8WpV/>1Qox%S.9=vzZigN@hX</mV]=C`Lre' );
define( 'AUTH_SALT',         '?U*,&l@_%R[so)54$_Q4A#=,PzKFqVPdn{YUXI-Xi==MY$+WNv#U?W%#zAdWj!vK' );
define( 'SECURE_AUTH_SALT',  'y96T?SlJWiM[`vABKSa]MMKUIN|Op~$:OcJ-$]ED~bSa2Uob~I:$5;79 (k})>b7' );
define( 'LOGGED_IN_SALT',    'mzaL7QsxJ&[a6pQ^~lz7#D&i71ZckdgxHqXpFL@_v@V.9vk#Nv4 Uo4y|aFoU0CB' );
define( 'NONCE_SALT',        '7_py?I,3YBh^o6p8eww9m{F^FGMg !xgRPV&2KnhaP8>4&N[FNnde|4d9&lD@5,l' );
define( 'WP_CACHE_KEY_SALT', 'Rm#,R8`4h6P`6c2R+Vt|MgD1&8mb}K*yT0VT8fO@o91rNv8^ymrawo^J80F9<#E7' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
