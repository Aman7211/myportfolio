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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'jW!UE?cU8/xHx[qfe7%oaPVR9rdv5eX.N2uDbwu=:IREGi@0n!R@)[?3sTb,!c5T' );
define( 'SECURE_AUTH_KEY',  'g>Yp.3Rk,zyt!M|I9Qy?e/I~HsL7^mJtm:fQ!>PW}amp,e{0J,Rd(C1Z2ykUny}5' );
define( 'LOGGED_IN_KEY',    '>fA-{rbEk2q4d~~_[Ah! ?5JqS[#VbDg,u}?-Tq;eKDV&_!G5B3jJ,PU.5+Nb9.q' );
define( 'NONCE_KEY',        'T,!SKA /mzGP_.#,.u>ZuJ&+&[*0Z.mz?m!P?0]M#l1yI#`ufUN_mz>&Mm@3R0*$' );
define( 'AUTH_SALT',        'X%-6IfKQ0`dn2]H!b1XI?9rWd28A$tB}/;I8>J2m3Zb=Sa_<x?LG,fG1@/TEB01e' );
define( 'SECURE_AUTH_SALT', 'P&?NvDysvXy%CzWEx42=GDVhT*e1PWDB3X#d+5A#j{/;6e(3:]z3W~F+;EBVA9w[' );
define( 'LOGGED_IN_SALT',   'Q2E`Oc aDwpcOG[#IS5>I:_T49y=wuXKr#0.<frx|{!WDuH&$nlf4JSa]axzPW-3' );
define( 'NONCE_SALT',       '4/PDBdzmZ[z0I>IT/7Cn56@^C,y3oL` $m<t7q1K%zHTE..QK0jnKH:3y-/FT#i.' );

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
