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
define( 'DB_NAME', 'proyecto1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Bruma2020*' );

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
define( 'AUTH_KEY',         'Q_66r5VPJrna+oN^z,o7JSXf/C@!%n0Yd1k}?Bz7q#:qD:*mhQGBzOk.{io/^)q4' );
define( 'SECURE_AUTH_KEY',  'AsA=/}X31kmmiBZ%WrR @ovvt uw}45^-Z`d|XF>;>YEmS#P$iVKpV{YFtb@9-J:' );
define( 'LOGGED_IN_KEY',    'Bd?a9;|x(.=kMJ9Ce]5p-frTj-M{eB>!c}n=?CQ$v@F_<U7HLg|`v}U972G;ZRVG' );
define( 'NONCE_KEY',        'p?*NEiIBn_0xhg$x/7^-S@%5xla/:?5RYbOV<]YJd:o>mt4Z!S&tM8<l+Jd>}W c' );
define( 'AUTH_SALT',        'e#IT 2&+<]h2t1E1;.-LSGu_dDyVj+eI>oVgaOU] pNbvtm+4)_RH3?SMRy$q{&)' );
define( 'SECURE_AUTH_SALT', 'W2oo=y0d+q;<4t:=wCob![~uXl,e3wC$BR^EdL}cLe]; -Ra.it&tw-ZiGkW-K21' );
define( 'LOGGED_IN_SALT',   'ml^PN1?=4Wi3{+jGTOF<Br6]#D[Q]H?c}?z;HQ}P~vA5@7`jU,FeV<i5*vzrJ~qH' );
define( 'NONCE_SALT',       'U%vKX-^iw0LzecHO<g+l7l`(oQLxUVfe{FCfTXcd&b`~vdoUO4Y)N^J~ny$jeX]-' );

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
