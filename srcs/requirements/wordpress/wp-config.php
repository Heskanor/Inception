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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wp-user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp-password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '6+2{obbR9!_^.GklsYOYK(!u/;..PaB^)aU[+k2F|?)>Opt[Q3.>h{FBMsf5ti+5');
define('SECURE_AUTH_KEY',  '8Z1n,GKz=Eb]6.^H);g]OzwXax+9r{tQ>|E2ns@ZWTeA3-lw{>V{5sD50IcAVj, ');
define('LOGGED_IN_KEY',    'c3T%5QYIcz8K dg!Ew$.yf:.05~>({Q9fai_/NZ9X=1JVOiWa?s@RU?q>R)efjg{');
define('NONCE_KEY',        'UL&x[`4-Tmd2!e^4.S}eX%OYr45nrU%>b3(a%EHzlL]gh@E1C7)L(du6{gPCH@}=');
define('AUTH_SALT',        '54xH9W.#or-1Tk5^^_c$0N%ie_37#Lj./Yey=g$/x#_`!6UPG|eNN7=jQh_N|`H4');
define('SECURE_AUTH_SALT', 'KU;`]pj;MjOWTlcjkR[E[D4Bn|i-_c~/E+W[Y^fQn?teM,Cr[wA)|>+&Xi&h)BIT');
define('LOGGED_IN_SALT',   '>A@GNE$3>[e2kNW7yDW?}03Mo3Glf+$dl*#I5X/z%XJ;h{|-E9`}thI@fa}d=>0Q');
define('NONCE_SALT',       'K[;g8MOay)Kj8,+RflqwE0N)rDF7sO8t`}fmM0Zy:hI)D^GYv}cB1ym6_5F4y`.O');

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
