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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_learn' );

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
define( 'AUTH_KEY',         'D2iD<kIA+%`RE!iv2{99gB1otyT+C,|/hm, >/./5H7RIgh!si<i:)tUDppX{S<x' );
define( 'SECURE_AUTH_KEY',  './optXj?}32gnxC#.96z*V/mq@5wE1nApk~W{AyP=V8_&x/:U4shhU!#%P`%}piE' );
define( 'LOGGED_IN_KEY',    'gF-<vooX2(9rgn#_lS.:J*36Q>U</yH 4y@Azj-$m=XZD6{xNe_#NdpQBeF5,`y9' );
define( 'NONCE_KEY',        '*6de,S$z}JD:3WaNeg)Vd7ZF3=/kz8Jp%:]x/o,4O4=JA9+KUSbP/Ra7R.<O)JOF' );
define( 'AUTH_SALT',        ']g[,K*r$Bge+_=Gz?}e5y[lmEC?KNeGUg ^9rF*+_OV+ambUyE=Yd5lP/H!77GcV' );
define( 'SECURE_AUTH_SALT', 'Tuorh|H}jV(6^3<}xD:|a]ZQY^?zCX3hh::W<=)EWbx1?S*3p?EO6=1aV6#oRGZ,' );
define( 'LOGGED_IN_SALT',   '`(H]+l-x{h!8q}Qe7:H&Tm@*2~yfXN2M e!)_4Z!-f6bv]`m,I#Zs#p7i~-..U3V' );
define( 'NONCE_SALT',       '4FiM2WyzORuG{`/DCGBv)b)Bv$js8]_1U~e3P|-BxNb,j>@x;1wsCFZP /5G}t3!' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
