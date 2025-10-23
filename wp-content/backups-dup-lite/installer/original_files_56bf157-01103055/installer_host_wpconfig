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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "minet-site-now_db" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'nJBo;n#{@ 5R|`Vyq#.S.%T9$CUZ0kUp:4>J&}fk&c#5w/@qV$HrgDp-Z(= 1-j$' );
define( 'SECURE_AUTH_KEY',  '%]4T&g>tLi`2<}c7>ujO5axGUk{WAfB3-81)%LJE5^X%Y3jml@(V2kkpM6JzY~WQ' );
define( 'LOGGED_IN_KEY',    'Aj|)V#;YC1CXk8WrytaLk.{*uq.I=@%4FR#Y~qc)%j*q$iB~G5^RY9jkh}}C ABF' );
define( 'NONCE_KEY',        'RDC74_|#_hvY$ygr7/L8p;t(Qb[[!h/Gm<:xsy8ur72TA5QhEs~zx@5[cF7FMV~X' );
define( 'AUTH_SALT',        'NLxA4McFnlitw`:58R1|:$73a-NNd%g$q0ERC!,XA;u:.o&N=ZdWMhXFsq)_]$:V' );
define( 'SECURE_AUTH_SALT', 'XI#Hc|fw&W}z9&|]S:a~;J*,6d;@F47W}k)yjF:v_/}oM:Tiv$l4r8Yy-[ZOlX+k' );
define( 'LOGGED_IN_SALT',   'B&Rm0MlV;2u[LEg9K[/SdrZ?ReUl6V/<ePQ;2_yjVZKkF|U:mNwrAEX,=}6am.e/' );
define( 'NONCE_SALT',       '{r6amu6W33E;) tz#%>r@T <!H6|,Pn(H*pj$a-h(L1%sygKeD EgwHV@Z2e&nX4' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

if (!defined('WP_DEBUG')) {
    define('WP_DEBUG', true);          // Keep debug mode on
}
if (!defined('WP_DEBUG_DISPLAY')) {
    define('WP_DEBUG_DISPLAY', false); // Hide notices on screen
}
if (!defined('WP_DEBUG_LOG')) {
    define('WP_DEBUG_LOG', true);      // Log all errors to wp-content/debug.log
}


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
