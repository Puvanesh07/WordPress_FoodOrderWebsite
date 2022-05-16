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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'cL9^6Mt/jK1{tiipSX4i:&g_.|}b}N]Yw6b2Ie;ghk_uE`dg[B+EN1f-y9iZ;(4h' );
define( 'SECURE_AUTH_KEY',  '[4#-|@A<iYNS>/2B]dt[!7UY)H%TRXY3x2Q^}{>NBMK|y60@hWFW+qx&NUA69T<+' );
define( 'LOGGED_IN_KEY',    't{!SUrIt]a.Yrg@)zfL)O(c+~6g]%c3Pmo}U/c~noo.`8no/7`{pdn7/gYX~9}4&' );
define( 'NONCE_KEY',        '[q&vq1a^K}xuR(r.Ylfo1w#jp{_KMfQ!@IHN{0]ml8<Wcp)].9M[SIR7hOx{e}NZ' );
define( 'AUTH_SALT',        'KRo]3u8TBifu68N6=2O7WXCMN~_lhl8OE&w}j)04M5sUr:PR,SF-Z!#;pW-`PnhD' );
define( 'SECURE_AUTH_SALT', 'G[fCL=Re1P>;TR ]N@D!$28eY3=&Vgc.vN @k{f|runYe`F5NhcsT+VDZ&FKEbB9' );
define( 'LOGGED_IN_SALT',   '=6&C;BVNH$s/q0PQxEGz7Y2%$vkyf!;401 Fz;}pryxx%YY(VWkpQ:EZmlw6qTZ1' );
define( 'NONCE_SALT',       '?0vvn[Gha!g%viy4tQTl0,ZVZvxO>8*h5F=V^ F7ala:e#Jl UaW<Vr(@Z|_=rnx' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
