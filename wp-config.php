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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'createwise_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1#Ju@4A$' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ']]<&<woE*/Y5<{v)RyY3?@F3rtdX*lm:PUI.ZRyv)?xYy$@>}+M@]Cfqb[6LnNFP' );
define( 'SECURE_AUTH_KEY',  '<d-%T{.&MUhP%:0fASM$5?wT=yWj<VTCt `l8nAgr^4 ez>5K)_*+{2LlR;R]t}t' );
define( 'LOGGED_IN_KEY',    'Zi$S2euKY(L}0A9;?|E`$Bz5(ll4W=N#k)b{Z<yfiY@}c/tzJ[V8B)ozb j&mg^k' );
define( 'NONCE_KEY',        'Q,U<:1K1viV<sUO!c`T[`7P&B`Ha_h6Q(658eORG|> x?KfvV3YtJ-]dK^?a!clD' );
define( 'AUTH_SALT',        'Nbl}V$>+?W;^<tSQ; qn~5J%F?E`fq}!bfttCn ?2d: NQM@%1=;yej^!hi3&v_0' );
define( 'SECURE_AUTH_SALT', 'G+)1)_9AZd||2@j{G?x+[:wu6(0mC@]Mbd+(hL<8c)/>+/)k|  w+c}a+6)&K?KO' );
define( 'LOGGED_IN_SALT',   'C;=h/N$lW!_S%JDI@G,a[bAj6gOv.u*5F5!T<RO [;aU$&<!u2pCmMOc_)zEK)NT' );
define( 'NONCE_SALT',       '&q2q^TfE0n$[tGT~=1nQh5j~X)pR^h<nlp+%-KFw$o2bL48!<nIkKKBRFf*(3QO7' );

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
