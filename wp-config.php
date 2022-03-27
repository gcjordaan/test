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
define( 'DB_NAME', 'db1' );

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
define( 'AUTH_KEY',         'n@w}VMty43N.?pL6RqxB1_Zl #[-8)2|2w{Ncb@NlVeroBL(nTpXwd1+!JJWJpeP' );
define( 'SECURE_AUTH_KEY',  '!2bJz]tu?PMhV=D(-6B8V?dt@(}#dSoX:IlFq,U$IH49/JzX.IjVg*%jo5oE*+yE' );
define( 'LOGGED_IN_KEY',    'TSAy27#(M>wTa01e5&~}Lx>gduMbVL3G:G-|g$>v73g>)INA;1`xy?wc+E2}SQew' );
define( 'NONCE_KEY',        'G)dx63<S]J%N{K61J:[Cp$1b^D]AIh]@=-?{$WEhs0*EdYg&nI Vj4naj,]|<%vk' );
define( 'AUTH_SALT',        'ts)/sdLmQYLK0$TIF46|}/cm{f].L;OFL1U#o59v[2/nl/NmFs9t&X-G$0JjIRyP' );
define( 'SECURE_AUTH_SALT', '(R?9jhmepEu^+t08_@|hJUQ<pz]1@*Y7Wer>Wcs3;O?tKg}88cL]qk@`P*Dieizr' );
define( 'LOGGED_IN_SALT',   '*+&z|pE:kzJP$[#:9P<WoaEr>RR,VRlw$Tb<umncC3|jGHnda@dAV!*vq[z*c{G1' );
define( 'NONCE_SALT',       'bc{tf^OFXi::t>Q` a98}VkHqf@sB#HjW-w3=:t:Ir/n_}hl,w+1x{PN((@M |%*' );

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
