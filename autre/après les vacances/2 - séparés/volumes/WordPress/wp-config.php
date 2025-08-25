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
define( 'AUTH_KEY',          '8GRI5`[=dHsOz5[yTMG=@=b(z%+?fh{c}$CN-m2zk&Mfnh?fpguznzER8zZ>w~tI' );
define( 'SECURE_AUTH_KEY',   '$$k@2Uol&g}?D*O=3%c,pz%/TIV+!**Yj~kD(DWE,9xKagPSkC|a1sO- X.+7MZ#' );
define( 'LOGGED_IN_KEY',     ')bbi?lt@KiFb]T)Lt{53*m|;1%1}_]<{#5q!kNC26I([8Ux~-8<?&02k2oD2tNO+' );
define( 'NONCE_KEY',         ':/fbTZTSP0=bne?wfIE[DSDE(Mn;K@/ec}]|z`D]A*;5Dv72Q>wNkpLDR3}-a6K.' );
define( 'AUTH_SALT',         '8^|k&]^Fc1Nm]2#6ZYPys>;XAc+%HLqn:%C&VfiecW2+6eatf=|_HBqTb/I[9apg' );
define( 'SECURE_AUTH_SALT',  '<O I|jGJ AE9m7QqsM&x,%_-;#TYMIFT=dyo:CfeR.w[BhB)y_cyC%*-,JTyEev5' );
define( 'LOGGED_IN_SALT',    '=(29<~BzqSNPRrKKm/-V^o(V7zroG1wCX@$~ 7)#3|SVc8%$.%`k+e8t=2:0Z}Uq' );
define( 'NONCE_SALT',        'nHDK>iQ(+h<qu~).zG&i/+L?129Jy1Yri6Y%m3ToaS6:W!]bUV1UC0n.;!%dvM:1' );
define( 'WP_CACHE_KEY_SALT', '^zym.?4$#E)|PYyfokDic2@/M>hmbY@Lqpk?c3+r:`)KEaL7:6]6k!BadqX+Zfn@' );


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
