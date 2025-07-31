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
define( 'DB_NAME', 'ladies' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'mp--]tji-18@r/c0yJ.jW<s1JA-b.TdN/VQSzTqHGC:7`hC;P/@$H4jZwfx1=DXo' );
define( 'SECURE_AUTH_KEY',  'x?4a]Ae-7_4}rP8)]yS`>/:I]L24|4{i`L2q=/hYRQyk7AFtREQ4Gv{fUT}dt4RI' );
define( 'LOGGED_IN_KEY',    '?6*oD,f|T7^qm?U@nfMJ)8DCVV|^I^@oDBWsjy9Imiewk{_Vvb5v+zh$!vH|RB?V' );
define( 'NONCE_KEY',        'EhJtnqL1T+u_~&lRKx@|m.qd/7uhQ-!QG:n9 [._4A+}iE}P:P<`{j#jig64!U;?' );
define( 'AUTH_SALT',        '#ty] uqZvOAPNaLEOeG6O3E:aLgp{z jOJ*G^:bX]%eRUq7lK![DlsBdn]pfs[%s' );
define( 'SECURE_AUTH_SALT', 'KE(R5R7#k~BWbyW0EG]dva[Nl$&;`>s&s/0mI]v3TPD{L,o0$?f|-4Xt?a6*4I1V' );
define( 'LOGGED_IN_SALT',   '6!LAi-Qsg%ub&VT&Y3yP%R*w=uVJH4wK1{A#^CK[bJ8 9)YoL=Mo>]%*(S$,W5mP' );
define( 'NONCE_SALT',       'RimgX1h2;^y@EY.%>|y-N xGfKX!/hJ v::2V0r70 9#/, Lm[H?g12r^eW}!C1Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lad';

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
