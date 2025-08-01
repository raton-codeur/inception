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
define( 'DB_USER', 'qhauuy' );

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
define( 'AUTH_KEY',          '8`%ufho|JCzTm|9FdK%WdAi&<tya]>OJ ns4!jm^;>)rT7R}*xmtov2WoHLSy[v`' );
define( 'SECURE_AUTH_KEY',   '~bW6G|om2q!pFtI7MeA(I>&%<&P!Xo6y[N]N9SBbmod3Mm4qL %BvBd<m>x{^,K(' );
define( 'LOGGED_IN_KEY',     ')88*J_%.7EWKf$_}[5]0PnOD(A{I2As0}5Y]d>:jz&{IE =B$ma^e;fgY}mMg+n5' );
define( 'NONCE_KEY',         'Em,NpcdC v{A[.!u:C=j3y+Sm@6v46-A{a^40+0k):Q9s-,UuS#MO6y_*jnd]FK1' );
define( 'AUTH_SALT',         '^vm2&o1HtIor=?=/> !8AyggQ2Z`xEV7}qSP&d@O/iFG`0]n;x-T`F=}8T/X)hG_' );
define( 'SECURE_AUTH_SALT',  'F5(E;,L2PyG>W]zZP8~~Uy?5V*r|nzFZQ!VfP|Pf+1y#^5`@[jhn&jkZl5DY)_*g' );
define( 'LOGGED_IN_SALT',    '+C}0n,y4Y|v{247zKpM,8%Iw!S3[:D#()4R/|Tm/b*sn$29uT_-TJ;?t)GlQHk-0' );
define( 'NONCE_SALT',        '-Hxdab0gI}+8%Jka79q#s[y_}_N]OacV8_?j -$XEY&ArW)sH}[Fgp/5%]HnLr[3' );
define( 'WP_CACHE_KEY_SALT', '1$Z=nRlf(JpUvW&!v>_TOHYva<eWJBeg$=vB!@A^TDOJ8`Xxb/Qv<vWw)60uU`xn' );


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
