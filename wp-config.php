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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '<5{snG7[Ne|+T*p@nyi4m~1nBhl]>Br iu)GQ>V|Helpg-Zm6EyU~.&Fx!]l}?kv' );
define( 'SECURE_AUTH_KEY',  'l(uogZJA,90}2./g#SOfp$e)m?nspdEcTf8XoI5/e|RxCv~^50&^VaCaJ/i+v%m,' );
define( 'LOGGED_IN_KEY',    '1w!:_t,!%a^=ZMXQD~>6m+v FIbLwqZeYZ,g*8/~#)m(-%2V5p2bc+-5WSHaE%#r' );
define( 'NONCE_KEY',        '!2-,AQz>E;Kc2tpZ^m5Nh;z%hiENC`$?(OPs~(+Dw&7*&xdp_jU%S-#Gl~CZ`:5S' );
define( 'AUTH_SALT',        'I&K#_-XuP+WJOI]5Z^efjF q4. CqqbqFIBP*,T<Joxd/xn3tn2~*%;/[hF91_.h' );
define( 'SECURE_AUTH_SALT', 'i4+J`Cf0Ij-!LgVL.UcK[Ik9Z_<lu7#a|>oxY50-#8c;,>|O}0qdfXlD8qi/@~Kg' );
define( 'LOGGED_IN_SALT',   '&=^VMLv{v)61KXH~7sc0?yGbdwIEIh1qfXzmMX<2-9()+7`9[v$[xd(eR]Q:^>yS' );
define( 'NONCE_SALT',       '(O.TO[tkRj9>8l;D`?l/7j|T]QA&Dcz9_]Ruj1QT2Ai|(~{/0}5#V6KP&_$tiw6C' );

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
