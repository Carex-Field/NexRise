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
define( 'AUTH_KEY',          ',!N 3lp0m}G>lM{T=)Zp[/Hq^NGpF2t;N7-){p76w=JisKjb=c^S+i2e(u%V5Mkn' );
define( 'SECURE_AUTH_KEY',   'NtSCsoo!]&m)z:2O5uunwC{catuuOq.&q,Mgz.AWQguc32K!H0+N9[*CrGKgr/PK' );
define( 'LOGGED_IN_KEY',     'G,,R@&mK:c HmpH^jP9`-m~1F ~0ptiO]8U!i~IliNFT{YjAL:s2M*VT5B:$7]Zm' );
define( 'NONCE_KEY',         'o!u`*W<?VC3wzCJ$m7cUTrkb_^_o8 V? vs34B;Y-Np]@cZiqZ>HbI!UVo9_UBW:' );
define( 'AUTH_SALT',         '@CHNeZ$KFL]XwK_@@+O:NkH2-&52AnvCVG4roxoy8Wj*eLJHhE5%6w-(,,1!T@~i' );
define( 'SECURE_AUTH_SALT',  '>g1`~;b:D2fyuK?~*f+1p(!hP&^LlU(y$?),R)K<rbbiP&8nnmwKku> $TwKZukK' );
define( 'LOGGED_IN_SALT',    'FD!x2)UF5L;g%~_6|32Ei-CC,vU0z%J-L:H9;m}5c-T6jyE-[0Y]B^$G%wo[pZ8-' );
define( 'NONCE_SALT',        '6ca-1_!qULw:cb:O[P;S*3FzV$Go7$1t~TnKPDjzv-TaGNGRV+iteFQd#^HF@H;r' );
define( 'WP_CACHE_KEY_SALT', ';Lcnw-]c<rW:u$hD3o$eDSM&vy7h7~n($=;-Z1.h]]~BeIo.,WkrN=?x@UU8NB}z' );


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
