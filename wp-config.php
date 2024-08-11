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

/**
 * Database connection information is automatically provided.
 * There is no need to set or change the following database configuration
 * values:
 *   DB_HOST
 *   DB_NAME
 *   DB_USER
 *   DB_PASSWORD
 *   DB_CHARSET
 *   DB_COLLATE
 */

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'x^1<{7y7iu?*Z.=G.-T!<Uo$6:M*0{D|Z}_bhdO87$b(^8zauOm!m*hk<nGENLR*');
define('SECURE_AUTH_KEY',  'e>-#:QJQhVpfLO|.u=30%NX+TrPT;7Ym|E4@dR)fvp(Nv~6!6)@psl<oIa9%juF,');
define('LOGGED_IN_KEY',    '4*HFd]Xdz,q_M!i]*6d4ISLzu>jZDeT@];W]oJeoDN4:^^V!XODs@t}@!Q%s.%XY');
define('NONCE_KEY',        'DlMG={i[yLa01EUFA+~JC8oUPP;v5@#m7G*};AnB>pHuQ+i3U1]pnfh04:eYa1~:');
define('AUTH_SALT',        '~h@_drFd|[CWV#zxt:fzs!zm^xp+X^7S(bLgZ-.(6-%sW4RWY7!En,QHZ=u$-6})');
define('SECURE_AUTH_SALT', ']A{t~Y-i=hB}brk?qKTG_o#2-mc5yuz>{P<([|CF5eg$GLP#{yri>m$zsJe>$dFu');
define('LOGGED_IN_SALT',   't<Bzwbiz-Y@ZmpG)lMyWR*QJXGwvOfWLTexofK~fgMv*F{0?Y=wo$zFyA?Nx.N.O');
define('NONCE_SALT',       '1G:dp=4OsppytM6jgXm@|(_[#.z[OiFgJc6R06d6V;Axh6:y_3w:MR#**DmV)y9l');

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
if ( ! defined( 'WP_DEBUG') ) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
