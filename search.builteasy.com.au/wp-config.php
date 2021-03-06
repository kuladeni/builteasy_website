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
define('DB_NAME', 'builteasy_wp_search_live');

/** MySQL database username */
define('DB_USER','builteasy_wp');

/** MySQL database password */
define('DB_PASSWORD', 'lk4lcAkGsPlX');

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
define('AUTH_KEY',         'I}H-0jO3ikGu|IaSsD*B#%MLuAep^yC#R1h{65O.g->TC:+b{6EJ24aC*UAi.,.-');
define('SECURE_AUTH_KEY',  '_bMy4jC8vSDf0t_=B_g;aa=J9s?>.H{BxQ(?QJ~-|L5bY4wj:QRcL#<h}W0&eRB}');
define('LOGGED_IN_KEY',    'gw.q]i{P|g[`8+YH2IhXI8q)mdh0*SZusSS0E_IB<z|-Z}{bAg6d_LvQ|G+Z1YsB');
define('NONCE_KEY',        '^ mzDb!]y~_C)8.oo4,}G>;L|cu:]MSt%Q|8$o}p] nxD5,AJ$F?X^LCC1)|@,s5');
define('AUTH_SALT',        'E&p^2Lt}+$&X1NDMHQK.l$dGq@$*_3-!GO^+P:+gU#AW2Prt`Q5>VC9>*>3-LU|x');
define('SECURE_AUTH_SALT', 'mbT+`ekU*sT,^IdybPf(c>v:9GtlTQeQ9k,_Cwc_-|c_8c0nw`=+l+exfL)1k9&x');
define('LOGGED_IN_SALT',   'c0gdxo$erZjdC(B9q|3r=>KtT*|$u+]z8|d23.D~zxd|cSy[Zgj?_^9&zN;xqoZP');
define('NONCE_SALT',       'ZOUzgJa@BKBq]@*ORaR_a1dvy-%[>W|ZWzpJd+;6o)|xT.9H>SA35)sl0,+1mc>F');

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

#define('WP_HOME','http://search.builteasy.com.au');
#define('WP_SITEURL','http://search.builteasy.com.au');

define ('WP_POST_REVISIONS', 3);
define('WP_POST_REVISIONS', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
#if ( !defined('ABSPATH') )
#	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FTP_BASE', '/home/ec2-user/');
define('FTP_CONTENT_DIR', '/home/ec2-user/www/vhosts/search.builteasy.com.au/wp-content/');
define('FTP_PLUGIN_DIR ', '/home/ec2-user/www/vhosts/search.builteasy.com.au/wp-content/plugins/');
define('FTP_USER', 'ec2-user');
define('FTP_PASS', 'BuiltEasy123!');
define('FTP_HOST', 'ec2-34-216-116-4.us-west-2.compute.amazonaws.com:21');
define('FTP_SSL', false);
define('FS_METHOD', 'direct');
