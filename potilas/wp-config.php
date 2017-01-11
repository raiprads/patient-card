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
define('DB_NAME', 'mkingalsuo_potilas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '|*|M.J0Lh8<z#T:8mMu.gr BgWsEp@jfGWn5&Fo*Yn&g=M:%y|BNh+>O93vs_}1{');
define('SECURE_AUTH_KEY',  'JOlq~X%Kjt}A#>H;nd!1&Y3_@glDd]4l9 1!#{wwn_[-cyD| #:hJTBYWf<_wS/7');
define('LOGGED_IN_KEY',    '[1hY-e,4rE7_5J=5&]6l%NZP,yPc7=k2sJEDGBe&QXS&7yT9logy0i!*_:L8r04P');
define('NONCE_KEY',        'pP@uvV{)G+y,wuNP)@&RC&Q)0x2.57ty:7`h6oEX,,mIm*6<pO?|Um5zj?R(M86L');
define('AUTH_SALT',        '2o6^q(T_3B Ycz#;d Y4=ZX>NSi!+g.dN1|a6MJsHnY;,IO*IVwv9q:KMp?z0OVI');
define('SECURE_AUTH_SALT', ']0 auxu&=^>z;C(2d!Pkw!q3[xepT:RDt1PZm(qG*5h_fzTW&>`owHpUkb?+Y8]l');
define('LOGGED_IN_SALT',   ';AZ7tZjIj?%iHRGmUOGbaE&u#@.o)@Z3d9dIU3uQUDz[zWFau)vw6Yj%k@]_E&Qj');
define('NONCE_SALT',       '25wdmS*Gr eC<6t42dLu8JFW[a7#Q *D>ZXdp>+sI}JAvg3z~~6KPDTX(Ff)EjBt');

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
