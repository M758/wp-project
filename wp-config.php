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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '*Hft9tK,)!Y};s~HHRW_8p#tqEuj6nJs^`v(GUb.FfzAV]gVdV@)F c-V7_B)^s1' );
define( 'SECURE_AUTH_KEY',  'VT1pXv4 jc[/{M.l3aN%j~]wWOqwq1[]d}Ol+3;^uD5b]A;!Yjr}<4/8 UyWu5,)' );
define( 'LOGGED_IN_KEY',    'c&eteMJ#<(DkQRusbK|)9jU<&V[KB>r}f~hhrFwsV|Vuqu6>snE)KmCjT6MZsJWi' );
define( 'NONCE_KEY',        '8-N2,ti/joH>sp}|K2II>>Sn|nwXqlo#_9bZafVGmbUCnJ#0a4>;79G8u[ekrN3J' );
define( 'AUTH_SALT',        'dAF,!VHCM.bbM0oT5!rjBcn- c!,=~C5v% 1!DEWj,Ea~Ex7aLT).VvU^rXduZWI' );
define( 'SECURE_AUTH_SALT', 'T^`{W<,io%a1GY-gpm+spF81?72W# T1#m2)],@}I=s?0Z!o2YIh|6@14!V~e<[-' );
define( 'LOGGED_IN_SALT',   'Pl<^Me `:?h:|Zx@B$]>rO;sB8X3F4[8^y@R!_,1U+Es?Qe@nES#$Si%S@:}$(E0' );
define( 'NONCE_SALT',       ')eebw~d6V[=5K/a>>z07:hgGfJL;2f_#^O%n/!grD3.2mg0RCs870Cdb/M;3v)x(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
