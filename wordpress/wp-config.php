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
define('DB_NAME', 'task3');

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
define('AUTH_KEY',         '2! gQELShZ(X5.dQNI>Y`?plFY[%QB:f@DzU6`wgq|c&Id$[WL:2;zNk.|cqzVvZ');
define('SECURE_AUTH_KEY',  'WqF=~0b`K3;%H[G[]L;|1)!6;Q<z`WRgXA:YQ0@Oynqw{uMr/dSHk!Ub(U/QXAJX');
define('LOGGED_IN_KEY',    'w_ 736^%qi&,JZP<KV@R*;J^s.7jI@<Tz.Cryo;go-u:4)3Y6{A:kJU;s0jHEHcb');
define('NONCE_KEY',        'HuFO[wik#HnW{KC@Ob#twMZ#UGJkJD`zZO#O*DCkw%VVMsMY^`QN%@k):1>!^kT>');
define('AUTH_SALT',        'ay6H?qB7!OO@mtv`^qQ}?9ZAt(R{@!E}Uy{`(cI.=x$=TZ~4&2P]cew2j&!NW!f;');
define('SECURE_AUTH_SALT', 'klk8Pzyu0>]a.j DWSxdYmhYXvB5qu+^g(?1j9bT8e#Ig>)-<%,j|V$)0J[6NT 1');
define('LOGGED_IN_SALT',   'Ll-sIMk&i,M%ESRX*/-+NH.4*{uG$Jp0>_-`;El4G~+9A~XRHVM.aE#T6w=oTsD%');
define('NONCE_SALT',       '$YG8(8=Ny:fFO_eO)FB~JAspPWU.koag*.,5E^/;M-tPuwPX+y(iX6Nf7HaD<=z1');

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
