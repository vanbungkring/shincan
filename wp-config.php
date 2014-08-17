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
define('DB_NAME', 'hope');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '#]-PNL3}|r*6C+GGs.TnrKHJy*!1`K&EL~9|zvw`4iO555rDR[tD7;=kN_VPvYIC');
define('SECURE_AUTH_KEY',  'c)XVLsM]kyoiq[y#L_mX}.Uq3r=P8lbtx_bj9#3p%qMgcLn~8Y;Z6+s7y6 n-4K,');
define('LOGGED_IN_KEY',    'F5w-Rhy,`(8H1.v1AuBwv)Jrg^[crm^)D&~(G-N8/iJM+xIFOaP?z<;|E.d(<b7!');
define('NONCE_KEY',        '6+HeYm]uTBmtb9.PU--7Grf @vDt+nmxwwdKBWJGwVoHgC|z!{S*|*MoqV=oHB!0');
define('AUTH_SALT',        '+iGnJ]av,@ZEO}%7%1QtbGb)=BmJ_<~C+=bafp,|PBfx,WTd]lu6S=|==oWh9+p~');
define('SECURE_AUTH_SALT', '#6F_b?1<R|W#oJ}VG]tM!ENxtOr?Ai,Up5-dA|`A?bcy+4h]<=TX >g~-7+qB&VS');
define('LOGGED_IN_SALT',   '=`S`3Ik)<!J,7a&/4hs=3FRO0H,n}Jz$N,Y-21/*=}|i4-ih2q;)o7,5i*_oK>i>');
define('NONCE_SALT',       'Pzs4@-Frfj-o+W*8.!&<PL}GoE+Cj}E%=v,cc@cit1Iia8>^Qw/`L,5@{5<j aw~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hope_';

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
