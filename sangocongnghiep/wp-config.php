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
define('DB_NAME', 'sango_db');

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
define('AUTH_KEY',         '|@RDv=%nhh9JbgIb>j%/G&91/r4;m#ANfZHBwyRR~fr,KaUBH8y#f7SFZ6R3}ehk');
define('SECURE_AUTH_KEY',  '[}<U&MrR3GDPn~?#fGGDQBZqd)+qw!bSze>_v{3.r@omI$[+9Kz9w!>mHMmG4-Y+');
define('LOGGED_IN_KEY',    'kkT#_c?e`9W^p.>Q)Xtv=Xxy}p%QRgBSDpeA[u+&o&Z$r$AwrW*lAr,UDp9mK p/');
define('NONCE_KEY',        '?>^hM`BT:7b2^H-e#h9k]3Rr<)w5Vb.aeUpjW:ID%cK4l*HQ=%Tj3p6!WqEm&mm-');
define('AUTH_SALT',        '|l~tg{N/c <%K1_`84}k}e2WCvuCnW[ri@yX}{LIL@G_wPRQq<Vq#SO=d0*x({gG');
define('SECURE_AUTH_SALT', 'tY%CS+WpGIvkYX1WvYRL28T>cj6~ZH|:iR?dT:sXQt{y*,l8at/i/ONtqD2vE~@P');
define('LOGGED_IN_SALT',   '@L:$@(~7A2a#3SY]mfqu}hL51wcW&%Ah#* 2&p:*,4aVaHC&pG#D=>umt!kv82s&');
define('NONCE_SALT',       'uvX(9yUyViOm[mn|;l-9&Wjct4RbG[v_mGb)&w;YG>9Sdq{w#1==_|7/g B`(jMD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sg_';

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
