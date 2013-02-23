<?php // Modified for Hebrew translation
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nili');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pilq@,ad/bKp&xVP7iXVEE+zKYkGBTC7w9@pDRv|ci;anI)uO1m^mt$-|jn)%/|R');
define('SECURE_AUTH_KEY',  '**m3xvW4JhOv+A k+CKg#g)?=9Wj_xBU@`vaHO9isW->w;~nL/LO)?wpH|Fzugl<');
define('LOGGED_IN_KEY',    'uT7rdJB_#wy+gBwx]kx^1o1yXFBU%2TKSfW(-jB93.3@131JH$_V]<lF+a;{!`;r');
define('NONCE_KEY',        'foXd|2K4$-wbMUO-A)>|/9qeq1~}VuEIH)4LpU 0cyLUt>1TxWtBoK6|%MKIyjP&');
define('AUTH_SALT',        '{H^ieTiQKw>e8#>lcAgpBzod-sbMb,b<r N@P4q}ygMf !q5nr +0thd*GCai^L|');
define('SECURE_AUTH_SALT', ' 2B.Px0L+oy1A35g{fFiBFGu1g0$p?.y|#=U_VuR||wd0{q. %FkNP-d+;%v-0dm');
define('LOGGED_IN_SALT',   '=h?N|^H#0xV9Af-~eQs+2*f0@lC%6JL2v4E6@|d>gwf*wEdNa(;(E5IfGRVR-|44');
define('NONCE_SALT',       '*y8F~-DSt^R.TcMv>WYB7P_~85x.|*:XHIh!ey2f73T*87G_i;?SP$5ZOpQ aX=X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 * By default, the Hebrew locale is used.
 */
define('WPLANG', 'he_IL');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
