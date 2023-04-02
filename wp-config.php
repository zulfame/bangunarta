<?php
define('WP_CACHE', true);
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
define('DB_NAME', 'zfm_bprbangunarta');

/** Database username */
define('DB_USER', 'it');

/** Database password */
define('DB_PASSWORD', 'BPR@4dm1n');

/** Database hostname */
define('DB_HOST', '103.176.96.26');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'b ^@BW G3%F3.uYf->>(TG,]7R@Oz6~_5?SAmQXG{@aoklUMb_pVM3vKJ9[xvWy[');
define('SECURE_AUTH_KEY',  'u9I@I[Rh#0mb?<TAIdFzwH6MXuB=#pUvk>h6uo`66Vpc9NffuR)_vJZlq{`u&(#1');
define('LOGGED_IN_KEY',    'Ez g?geir! K-#il1RXBU]OG`6IX?l+F4<a[Ze]-0rLoqv!|d?]3j^171RMZZ$}5');
define('NONCE_KEY',        's5@oaA,:d6MkOJOfL?Rkj`juq5PjA2aq1`Jq%VoW$gFqHU+#SlM)S{dt5.S{g(CI');
define('AUTH_SALT',        '~py4&?9(_uT+bkNRRkyw+htnk{e_4)>bo_FOtjaX9aw Qg#h*YD$NirR6ka{pR*l');
define('SECURE_AUTH_SALT', 'MLj7DLLc+8X)jYXD4,m}y}tl@]ONe8yM.h6,^I6aMo@QvS#}cHbaE~`Ze_#x!sc8');
define('LOGGED_IN_SALT',   'i?4GD2]8[D=(aB&Iv8[myjTr6C_ocree#5A}>[MzcA/y[aY6<zi7rqN+$y]cB#<_');
define('NONCE_SALT',       'so#:*f~%/4*W>@+l4T;V*=kpw3IDJ=*#TdaO)*p#5c!cd8?#4xQ|UeVI^;X^mB$R');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zfm_';

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
