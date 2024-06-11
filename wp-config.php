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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pro2' );

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
define( 'AUTH_KEY',         '-Okg,e(#Ak$P2;^bR,!PJh6x-mhex&+,%]]f:h#&|<H|MbCtt`v{zB}mlJA=ZeeZ' );
define( 'SECURE_AUTH_KEY',  '#*EdsZEA^FdJ9g3BV/hVGazd!cq=:~Sf)*&jWP)^a/yZv!  &b(@>|,$GfVMH$8m' );
define( 'LOGGED_IN_KEY',    'V($?vHkW-cp>/11GhFD&^2`4jt6AFi(D+eQoS^vV#ysIK&9Z7Nzr7bLiNe3*hk 8' );
define( 'NONCE_KEY',        '?KtccyE`Z`O8&xY[%]^/)!}>;*b^epB$$ogy`s<z)HD]bnu b<;.0A*15U?/joII' );
define( 'AUTH_SALT',        'aXDXNxcesIH6tIKA|Aa]N]X)gi{5i~gfV-$qUJ8t18p|&}Wwp6`1nz-^M482[9x_' );
define( 'SECURE_AUTH_SALT', 'aQkcR,.5S`.6jbKDQ9}x96o@kTMgs[`%RhfNA<73%dsg)K9ugc^43y:t5>F6%b*}' );
define( 'LOGGED_IN_SALT',   '@r{BpekLbGcy >l2AiOHri+n:h`.TP&8j$X$S6gFmq]IOSP}Ah2`L3{GuY:(]%-V' );
define( 'NONCE_SALT',       'AceM_x/QB_(bRS;1>WB48_u>iv.fcMKJ{KLDR9p2AhAgP4PcUcA{WCaBXfR6==^h' );

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
