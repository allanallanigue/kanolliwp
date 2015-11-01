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
define('DB_NAME', 'kanolliwp');

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
define('AUTH_KEY',         '>t({_3UjZ?9mSU*-o|WqH*Yr+0V;2@TDGZJo(_q7{58-D7|MpsietzJL3 %o#sup');
define('SECURE_AUTH_KEY',  'Q^(!ok~8m7JCGX9{1ue_Ypm=!4ot7SnSe&.-nU]D+dsK-AB4O)-{SlZ-ck~S^b/S');
define('LOGGED_IN_KEY',    'vIR#5,z#+(-nfLqUbb^<9x5c&jkwwK.;PD5>vfLi0)[Aj`97)pbc:6##{}@TGyvr');
define('NONCE_KEY',        'G8xU v-6}D*w*Nt_pj)z{xOM#(O9X&87RAjgRhS5-*10!CClG19kFSde-+b11~Sr');
define('AUTH_SALT',        'KTf0[gHzE5X>1PsMAy2hWowa}B.vBPFSg|Zv Oxx*l|/Sa&6~k|96~;iT+Jk+uip');
define('SECURE_AUTH_SALT', 't!.Jj+$oR?h}2}+4BtlMzG-2y 0)@_r:&pZh;P,QVz3*+c6dh~I]#a6Mrjlv,e&T');
define('LOGGED_IN_SALT',   '1:_FL5?3`Lq6|f`Xx.}e]WY^e%%p ;_*4<C(A=6av2YMn)k_l=Jrg)Ui!Ve>V>(E');
define('NONCE_SALT',       '188BU=sR}+^|:c-0<)pbeBjpcDI[6I;IwPY-n)6#_)IgJY8jX64jmUv+0}QhN-Az');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kwp_';

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
