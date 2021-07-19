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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'beautyboosters_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[Vz9`Gf`d~TIBcTabfZ=rg[6-1Fcdf==~wnfS1ix#}[i?Wfpik#ibqlV4)Ps<UIm' );
define( 'SECURE_AUTH_KEY',  'P,m0Z=`&e=|XP[=E=InTJXTXLe$@S$?%]xT`CpK9VV)~B8H;yE,_6Ti%o9sS%fcy' );
define( 'LOGGED_IN_KEY',    '2ljHx_t~jR^kJ*rD~Y]P-b(dOHdU>}M}^sO=Y6&I#m_1R~o7+:nVioxrEc>c&r@W' );
define( 'NONCE_KEY',        'h=G&t,(rf6&[$Z{b|#7UjT3Du`35WmwA4}e@9 @?5NR2@]A6=fNp25&HUKQ<$0h?' );
define( 'AUTH_SALT',        'V}:~vZda^6WK2PUi9O*Z(R>%qS/79Fftr9} SQszCm1;ZekKRhn>fu:T)U+M%qBG' );
define( 'SECURE_AUTH_SALT', 'ovXaQ >Kwu$khNJJ{VsmD ykF(uX6PYTs7]b28#Q]9erC-=Dr4![(zYg^KhCF5@7' );
define( 'LOGGED_IN_SALT',   '*B^kJa>7$X*%{kw8f3I9Z63fTid)e&T,m!(w=es+r/hLOC>7[NSz13$%*,r!/#j6' );
define( 'NONCE_SALT',       'HqLp<@N&?i0u[is~sods4$$B^vYRBG+tDsNeS4hKgS!<#lz ;*:0Y1Vv/#BdqT5b' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
