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
define( 'DB_NAME', 'mindset' );

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
define('AUTH_KEY',         'DB/p|);PzxpI GGZ$?HZpjmGv]T`d~|ShNg7!%|0rktIi`fxLIEn +ZIKarB-c&3');
define('SECURE_AUTH_KEY',  'ti8HA{{Nnc5,{;;~lP;^lag*u!tvn:NP7R=j0.hte ymc&/QVOXz7KU-b/*e^!H?');
define('LOGGED_IN_KEY',    'MAD%K5+e:TnD]>-T0bh(!%t.tUXU`rWQW**K6+c!nc:sO},o_fY@Z%kmjabrIie*');
define('NONCE_KEY',        'Ax4Mp7q2?,6QHo-krrP4tgf-&k7H@n+m?|4J^.&fna-Ud,$.-)$2f]<D6gH|*a3a');
define('AUTH_SALT',        'bhZ;-+=-0Q]srgNwZ?Mb,59%!Mh^&8WNaecrcI[21&SZ?-UVp,3:a[eXzl)f,&,|');
define('SECURE_AUTH_SALT', '5P:b5twe?f|yV]GBKBLlNl~*tVWOtDwd2b@Hx7niQ~uU@GpiqsM,sAw?G!pWy6(I');
define('LOGGED_IN_SALT',   'xrsXM_)r/*-hi?Z$cu:^`mC8lzvJ4+T_v-S.@Qe3)Si|/_ GbgN/A9.rQn:eka1?');
define('NONCE_SALT',       'gqwh(0Ue-,Z:PO|j+G-}t4G`$V-X1*C7t0ru?!lh4&HLdsHg>c#q)1tBue9_]U`N');

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
