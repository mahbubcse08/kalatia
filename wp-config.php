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
define( 'DB_NAME', 'kalatia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'VAOw77<=VZuTHv&IYm6hToMg[01F-i0b]wWI0e#u41q%WD#Q6j6UAhjshV!bg@!3' );
define( 'SECURE_AUTH_KEY',  '?ZUh>Z5~l%Us`fgbZr(#X=f1qGz9X[AECz+5^y,ij22{6hl:#r^M&`:KM e>]W6.' );
define( 'LOGGED_IN_KEY',    '2V aK4)YiZ#_PI+a)m(H+9&n7kw!xHp;qC`v)^YTX?FpB+0$j;QJRW{4?hN?.$FL' );
define( 'NONCE_KEY',        '~;:E{.R7uYzlk32= [0.PLlLMUv@Kg;t1yI8?E#4aW~|u0Q6tnXjrO*#Rf<DY=a&' );
define( 'AUTH_SALT',        'G},O5fL}$<G>M yLz-;g?!LB SBxQ`VsN>zC:i~Ex!;2@W+*|8<v6<l@z I>l}Sm' );
define( 'SECURE_AUTH_SALT', ' .;W!V)XP4Zf[~W)0^=wRG]E>x1,({$GmSX3_lj)m6pzXMbZ1&#`GW,(4G#Ag6+e' );
define( 'LOGGED_IN_SALT',   '2ydt%`@&SCmHy mth9=(Jd6SA0#fXQ<Y6Z(uq%8-1f]]HEU6#fG3hy{#d 4Mt0?H' );
define( 'NONCE_SALT',       '@$4 29,GV+##&GcMn>7nbPANm:nXVndo Uc|22kRm0S1;zXmL TnJXAwG:&S=E,R' );

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
