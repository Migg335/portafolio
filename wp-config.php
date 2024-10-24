<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portafolio' );

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
define( 'AUTH_KEY',         'kBbv8bpg;QOaSi)]vp.%vhW6|c}qAWTZRct/ }Xx5GDII{W7y*}durm6E}MQQeO*' );
define( 'SECURE_AUTH_KEY',  '8P*n0f,}{j+YAEjl(pfUevfDe/m6jbQlffunNFc:1V2hZ<XSN&AJs@scg]Gg%VQV' );
define( 'LOGGED_IN_KEY',    'w2LVHb:,(c~c{m?XU#`xGLe$D(.^ {~hy I>JR3TJ?]=S2N]Jv>6HGacD2]GM~m@' );
define( 'NONCE_KEY',        ';rK5akmJ2$A0pS/aH3UEM6t-;Epn%eyYuYaN/i7v<AvsBFAq>#K,E&HnZ0u~?Y0|' );
define( 'AUTH_SALT',        'CQv0:%,AlsE<9Ak+NTNY<G6.LbDSPC3H3[mX7+$?v1+kzTo(H{jy0Kcn&1@o+OyL' );
define( 'SECURE_AUTH_SALT', 'H_-r}kKfkg;8|Lz$W-.KW7L+(i=Cc_fgm2j>@V&23gbYBK&l- =bnPNB|5x[?~W1' );
define( 'LOGGED_IN_SALT',   '^es=xFEo3UMD)$egA0B+(3)(Gc)7ru|5(EdbZXt:qGR$b;ig7Qrh9df2{R7icCEN' );
define( 'NONCE_SALT',       '&|BIagPE@I25S{K6ke_+{F$;h5)ncDZX0PFes:bu)U<bS+H;~E414e:{/>~|m.B:' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
