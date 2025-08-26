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
define( 'DB_PASSWORD', 'blabla' );

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
define( 'AUTH_KEY',          'x=mzV[q:ahg+Q[$o#DJ/SwWz$ml8P8Sex9/am#=@|RHJH6]HQVu8] 9QR]p##.Zy' );
define( 'SECURE_AUTH_KEY',   '%xzss5K:^a|.-;Pwd?]X`mFOz]vRxB)oek1*xbvt>0:N1G.gM,Ig-TnC](q><:oO' );
define( 'LOGGED_IN_KEY',     ']@,Q2KDHLj!fltv:><,~a~]q2JdIVp6m3a9Zu+Yw6t$upQ1FxDpn)_L~]^v7]Ez|' );
define( 'NONCE_KEY',         '4IA_&K@>a=;v0&+kups_(_(_&~M7@Df]pN(N3%=3}/bBf[FbjL|pXdjVLKTO^wMl' );
define( 'AUTH_SALT',         'Qv;rrAluNM=_99O#}smwv=@2p9M2-V!vIju.hv7Hp!:F z9x+?a#YBq.CIMt;<|G' );
define( 'SECURE_AUTH_SALT',  '^QJfDw=M2Iyw6)/_7/g)78JU@#+(pj%M?H]-4G5;gdU03f!{T!BqakWWm:ehRrXK' );
define( 'LOGGED_IN_SALT',    'z> sLD<&; Lj{6Y.n06Z3uyMJ8[-D$ifeu4)(a5s]s&_zYpzIp-S@DJ/NFel{/E:' );
define( 'NONCE_SALT',        'at~`cuTt[r>`S`]]]fg8LHZB;]PG`:?Q`G4P`ODxcO^x_0/s_]#LHgTo4LK[S F}' );
define( 'WP_CACHE_KEY_SALT', ' +WPrP/o0lb}_Das4m> -=7i89@t)37@0*j]:`nF;0AC U5Mj/c82VhCD68jo|v#' );


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
