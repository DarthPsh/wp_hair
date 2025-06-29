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
define( 'DB_NAME', 'hair' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '>c@7-_% q*] @=!gRww3%U;zS_K8oqK|Uh^] $jiH[rf{gly{1naeh5aCptG0~ig' );
define( 'SECURE_AUTH_KEY',  '|#:.1_QEMlpan:H?/8VM0~%A 1~#LE_6)j$fn)J)Pzj@c&r(`Ut-+t?*z}wp5vfr' );
define( 'LOGGED_IN_KEY',    'hdhl]pv*b9N*~tj~,9nDGyaY:u[%EAnibafuug9!T@<OJFoWv}-?bs@+?B+:@6j8' );
define( 'NONCE_KEY',        'Ry1<>I9w$-HFn${]6=!:tkNS|&!pad.Elk5p]3P2|,(!Z_1V,K;<xE!jC$495^Dg' );
define( 'AUTH_SALT',        '+oN)pRQu6~7%u^E5)+$TRO{(akW>{DJp>n|DE*10Oku9_RYpwBwt=!8x@~TI?sc^' );
define( 'SECURE_AUTH_SALT', 'gf,E( RA6!!Pj/}@;&=y}{1tB,^8iozh4;1gC`Wm`;SV/)C_<RIpbYakBef3zHcr' );
define( 'LOGGED_IN_SALT',   'Louwj){X^Gmn1(b~l+&:of0wSZ@sKm%Uan2bK|2^`w2BIT0 9HN=V*}qV/KKJdWC' );
define( 'NONCE_SALT',       'bxGw-W[Mp]OtyngZ,>)q?T@;/fW-J~?m+dHh_m8I>k~KpPVgR~R,rd!MU2.9S):;' );

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
