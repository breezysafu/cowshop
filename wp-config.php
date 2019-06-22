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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cowshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'y41L7RER6o1S=T#&ShC8bb5M(}h5dk%z:J1eFaY$G8J=pAK5W4W.J]E{B8&Pj};6');
define('SECURE_AUTH_KEY',  '3j5@v%N*P^=C12`DcAF6Mr-<Q1CrorG_=[HluqKQUOt!lXW?fyNgQ<v{X:Ws~K}O');
define('LOGGED_IN_KEY',    '7$x{t&+gNtbx}x*{fg{1djr@MJ/;yab E+;*I0sbTE9Y~1~O0Q[Un>Yc!zvJxxXQ');
define('NONCE_KEY',        'E]9j9}LgortA9wH)}^Kv*%TP({(;Z95f,7wO0xX3YU686Ui_h;E;XR?Mf2=c<-p{');
define('AUTH_SALT',        '{F[P@`*XiObkyCu{{N(Nw#iRFD?6ugCmVM9eq^N?sYZ^A:>5ta5>q+b5I(0w,Gle');
define('SECURE_AUTH_SALT', 'Im=oH3 [iN!:M+xrGMEg0{QzScimz*X%/?Eg>}<:MnBCh0p5uxE5 G|6M(~{TJE2');
define('LOGGED_IN_SALT',   'qfsgayJ<Bt-9+aYljOiUr|&MvVA$u&w{y8BTWv2Q;9l(&o#1Va==ByES_7<El gf');
define('NONCE_SALT',       'Q_S?]3ktuyO%_BxG.D$W`.D(y@GOLjbCl3n3VdDW+z)GeIt_RhEvzWa=bYoqwEYP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
