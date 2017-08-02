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
define('DB_NAME', 'wp_multi_lang');

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
define('AUTH_KEY',         'z?#TA9PobXYVGf2HYqKVfeLka-(p Id$KdYy.NS<5)U@S^wn+k-@An.PcYU5nC/|');
define('SECURE_AUTH_KEY',  'c]eb5[%6xlVt&ogC>M&nb&B8q#~k3W-Pt@#iRRWNdN`u1r9fRqY|=!Dft 4 >P_;');
define('LOGGED_IN_KEY',    '4X}U8Ka!L#];eYfe{](L4o@}Kh52gU_mo},g:dT_9=s^}))OElkON4;b/^,8X3;*');
define('NONCE_KEY',        '(IE-CU!n:5r)7^X?s}qMKdwT1vr0L[nhdo/<%Sx~#:7d{8tr~n?>/B.}.iJwP_rd');
define('AUTH_SALT',        'RXqKfsr5&c{<:JM[teD1}65_-tFoD59o&NUM)me_^?qQ9WxT)TlW:|3reSdIxA9,');
define('SECURE_AUTH_SALT', 'E-SQ7CiZ%WLFe5NDk9ld6)E|NCNG]=V%<k:LJ|gE|[X0YCY1RK*+~;* o:.`=gY4');
define('LOGGED_IN_SALT',   'f2JBW}UX7;rqs-q?z}]P(Uhf4I+)VZ_tL)1:/7*JI@B^,9Fh-<@L:Cm|GbV!^ebV');
define('NONCE_SALT',       '$rKj Q*/:/ gg,>ly#8#(O$ `1>Bb`s*DmB&]b7y5g4/a.jgN3c5s[zKOCX~}?uS');

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
define ('WPLANG', 'fr_DZ');
