<?php
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
define('DB_NAME', 'cornerstop_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'silly');

/** MySQL hostname */
define('DB_HOST', 'localhost:80');

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
define('AUTH_KEY',         'Ju@+,SHrf0=<`W(;~[~-|X=a+LB;3i[ lD_;/zJ0;b##YGZB66DeT+{%Xt9<+n)~');
define('SECURE_AUTH_KEY',  'HrGgP|!VYvtl-BZ72Az|o5ZP-|xY]T`v$lfl$3p)APSUulDT5/2/8&UYv?+:hc.$');
define('LOGGED_IN_KEY',    '[K]c}c%}%PJW}6$/LYRKkzV7.YNEB,-36jBm[^f4Iz:b-b8h|9wVR%)EH9HUs]zx');
define('NONCE_KEY',        'TpyM<j.=&n$SY>.pYO{yN8^UO,nn)V-2;u8N-l2-n}0FH)^O@<&%+yTeXhoy+&3/');
define('AUTH_SALT',        '%RdXn>pcc|L<8L=.O|n^[k_V>K(|fZI?B!/5*i]7*PO%F88~^V/?$-WF.K2z_U j');
define('SECURE_AUTH_SALT', 'R/|Y1IvJL+j-xSZb[g1JDMn]ejAQ:O.P[M*SyKH.O[g-}(=66UJP!?r}s(6|t^+7');
define('LOGGED_IN_SALT',   '-S>obd&|0=h;.xYZ$v+{3HGH@A$CKnUb>aebhQH%{QQ3Cmh:^o]2j76U9Q,30dWy');
define('NONCE_SALT',       '=[j| k+KV&YE4qJexT+jLQ+vZx6*NO4_{+9=`F2sv&Kz}uk6qxcniA5)HC|FP$@.');

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
 */
define('WPLANG', '');

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
