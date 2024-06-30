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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '`_6T1$Oki]<Jt?)5{*9qXRhA`:)Hm+>P9BIE9qWUU*%:FYC7zefHAX/G1h0;J.l1' );
define( 'SECURE_AUTH_KEY',   '$K.DM(Z$on((cwX:I,a3)U7~c5xBbgd-TemVW v1nh2[>l,Tb|`q%/,k#*_da;CL' );
define( 'LOGGED_IN_KEY',     ')w:`,zqH?X`Pj5Ty?20WqbfW>); m+xI0qJ1daG$:Ft9n>(zg*[_(.dDpI;)f$M%' );
define( 'NONCE_KEY',         '~(JpApUv.372Q4^<ZJOGW2+E$~[uPa&}xF@$< oBZ5SeBX{UXBrX=g)XhY%3[)LX' );
define( 'AUTH_SALT',         ':#rz6a9OjaM~8E=#<:g~QqSK9{GGl =>fc<]@Aius8H<.LKc~0$BFF@poiL*tgcB' );
define( 'SECURE_AUTH_SALT',  'Dx}pi&TBYF5EJA3#od&sY01_^68ruz<Tv.b%_3M4J.C:23Gby}1Y</-uv9mI=#U~' );
define( 'LOGGED_IN_SALT',    'p!-CwpgH^nq}Sns,0hE)iT_OEYxMHCMGoq?ohHVqD7]Sl][-6n1DpJd{^rsXenWI' );
define( 'NONCE_SALT',        '>Yz/_VV)7^g#Lwh;+hSTpX$37 s10@P!K~qAO3QK~R53=IgZb/[J!3i5jv[1(|Co' );
define( 'WP_CACHE_KEY_SALT', 'rA#v.LSi+$#9YnT(an8$-4zmh>CjidLTs 9~WmQ7vT(M`*NfkwtfqLv,2^w[PmXx' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
