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
define('DB_NAME', 'spdv_db');

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
define('AUTH_KEY',         'gGI|Yd.Ud9}*<$yG8]uFwo=# K7l;6w}TaQ0:Hd/g]:_u=Ag-E&~> p<d|{ut`u]');
define('SECURE_AUTH_KEY',  '(HZ?X@wH{tPD&fbOpA:)fnElm=:4RQ{mttSB0JJI9p }~}*<U{=j>re$RDgKdk?$');
define('LOGGED_IN_KEY',    'Lo&2`~);5I)iWC+UMp>K^T=Xg8 4)}z,z9M0ECyp3<t_ff{FL=z1$>sK2,E/e%tz');
define('NONCE_KEY',        'jbq0/mY:y5tF|8ud(rnz;jTe]=[|_`qql3^&9gwki[Z7 yA@)m#g_zpxl|xfW5(2');
define('AUTH_SALT',        'I.F`l4Na;:{k*Z@4Kgyv8xi)04pV*Oye9}:P`X(pK|#bGSi)=#(!L&Dq7@bH:F`U');
define('SECURE_AUTH_SALT', 'k[>X$D}#+#;s=tMmojaKF]K>HLYR`cb@-,> !Hx)L94Ho3}&;WIn=LOZB}p@w(wu');
define('LOGGED_IN_SALT',   'CHA(PTx$yBO]w7IN5i%O)+VooXXl^%Po1#[fLzn-eTDUlgA7r;yHDJDE/FvxsS|y');
define('NONCE_SALT',       '9]1aod9/>s&bK8O0;3!&)~agvAqPQq6J#*i<?E5$1,9)^3@!n3%ScJ;V$`b!NXr*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'spdv_';

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
