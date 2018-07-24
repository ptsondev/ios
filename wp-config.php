<?php
define("WP_CACHE", true);
define('FS_METHOD','direct');
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
define('DB_NAME', 'wp_inoffsethcm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysqlHaoilaHa');

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
define('AUTH_KEY',         '2c8c8Y]0.k^uiB^e%3?{0AkmUAusMKb?!5p*`.BaS&lXidyVoOyEBW?D}2e+m)dS');
define('SECURE_AUTH_KEY',  'VvFf#t^YY#-]Wl~MG`Kzrs2Zs|B1Y%ngRWF~9`oW0ANw3=~|Fz_$ARYiVKW3P/M1');
define('LOGGED_IN_KEY',    'JzMaSly,t$4=y~7]{[mb-<>)9O.iL9]o|tV8POoVbbj:g9hTblD?}{f.4>2jh)s|');
define('NONCE_KEY',        '_V,Nlx?Njxn1i+g<<T?2C}[+0=$iXriXA}+:N9KnPJt@fH<i`5(<2S.ZNkn1P]7G');
define('AUTH_SALT',        'sHFz.{CDt0xlkL:8jTb_o]-+^>8 SK+xTm}y`V:j+9iyvORDp`eTc*f%cBI]ShnR');
define('SECURE_AUTH_SALT', 'Mws2zd`cO[!Nb;u:J7oU!NTI9Tfs,1GY?X0E/hWIGC:9i(a+9D6_g*ml!:vI0_5*');
define('LOGGED_IN_SALT',   '-7Qt(}N{?0v:GG[1`83B)?1H(_;A~*y-g+Q+Br^zf4!~ge|3gYqo)cp]$;`2Dmd!');
define('NONCE_SALT',       '<Rm=6@;5auhNeaj2KT&=enhvfyeXOPnq5Y]P#,&)v2`2xwN5WSuv L&-8):%)sFc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'off_';

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);