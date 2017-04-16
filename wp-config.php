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
define('DB_NAME', 'sarapdesign_se');

/** MySQL database username */
define('DB_USER', 'sarapdesign_se');

/** MySQL database password */
define('DB_PASSWORD', 'tEXyqW43');

/** MySQL hostname */
define('DB_HOST', 'sarapdesign.se.mysql');

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
define('AUTH_KEY',         '#%MmHCy0uPM`y.$m &GY7B&7~|B3Lq)7+SDj(Z0ph>vp%~YhTIVL(BaR>_WSzyxT');
define('SECURE_AUTH_KEY',  '$r)<<Z2nmR,q-V@P3;&<5)nW556PcK<5XU3Br]Sburmz$SeI#0iY7PQ@l-6GjsE$');
define('LOGGED_IN_KEY',    'Ez[==f~T/O+Xjb%1}%w;rgz_9:$lge+:f4FDqvemVC=T>q7KH1;,f.qv6k1=mg)K');
define('NONCE_KEY',        's7rHwy~uyX}4MV3)d#2=vJ@#^ F:LQ-(O*bv9PVHCvS:t,E}!v7du85YcFI6VmB2');
define('AUTH_SALT',        ',M79J*(.pI5E t+lwPzEQp`/fIHRKG1MG;msJr}sOcquu8L04Xg67k+`-OkfTZ}>');
define('SECURE_AUTH_SALT', '%I{1BaW$jOa;+ic/M7Q]tR0KdTDD7vF*#V-@Q^sNLpiI%p#r_fK(YUc/{wsT/:X/');
define('LOGGED_IN_SALT',   '```NwQD%|g?JiOOSH -Gx~vll!80OFn9LQot~m2eAQ7%#;hmaX]K[P91%8FrRq[s');
define('NONCE_SALT',       '`:<d[2eH/9B8*LrCiR_[t%X>u|}F;~>_?a7<63U<;t(K$K7BYPoCZW1okE(q^? _');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pf152_';

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
