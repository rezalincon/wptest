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
define('DB_NAME', 'lincon');

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
define('AUTH_KEY',         'Yl8#/+U8$;&&j^FdHQxlN256/G/eK5V6^ixil6 i/:ohO!@6iJ5s_>?.Yj|rv`(R');
define('SECURE_AUTH_KEY',  'dxd`}B~(#)&keLm$0Q#Pxmc]- f -.5AOLd/3i RvtWd?![fD7z5b^YA^3,/w1h ');
define('LOGGED_IN_KEY',    '+BTP;PR|soxDl48lCRn5;J-s_U:zn V(FCiWU/i/A9$T5lfS Z%*xAiRpNDYvLGY');
define('NONCE_KEY',        'l/8dahAQSzXWFoYQ|/}8?NNWDP/`&?KIyViM_r8H=DNQ uL:kQ?xztLK:%U%,@L@');
define('AUTH_SALT',        '@?3ty[>kM,GW0A3)7yW k:6qt9!VVjS#5xZ1%oD^<J_1<%Qca1Zh<%k+?ojp7ud8');
define('SECURE_AUTH_SALT', 's5QNQySsMa|$r`OacX*H47(Y>E`~q.;:WRT(.Q9.G|weITr6!ZnT;?Q# QsfzYzJ');
define('LOGGED_IN_SALT',   ')w)$9rQ*_=pK1X2L<VP!<a-WX @ns*-a|,F7mm{9pKwXLy3BDaR18g%)|kQx]oMc');
define('NONCE_SALT',       'l>*VNzdpV&m`4?#B+-./!;)5mz3-&pgFe.CKFJNp:lWJ,;<PabLA?_sB.(;?8*aV');

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
