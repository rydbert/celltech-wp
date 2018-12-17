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
define('DB_NAME', 'celltech_db');

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
define('AUTH_KEY',         'I4p*|R[19r1<4]U6k0|02SV0b:SeO +0pcXgo^4Cam4s6yJJ_kjD^t,w7GtRmlk|');
define('SECURE_AUTH_KEY',  'xs@[9lNtZC@9uUT;$bH+fQ51{BmPPU`T&>i1-dVb:_<!;c8HUCv%aLTHTZ^xhy[x');
define('LOGGED_IN_KEY',    'n&0el5BRK^un+B%.]O3MUp g4KkfdT9lusN26h:VBfM<3IjJjdjMW1Zd-t1}s~f?');
define('NONCE_KEY',        '-Lk09&9Z1Mi3=BrY8|V}^G/LWSxF5<8*Qp>Fj!979pD5MrV|!]+l/@2Bj;*WnnKZ');
define('AUTH_SALT',        '|aoD^HX,d[IvrLFBxB$0}=c77}HXt4dapTRkN:t09+cP}#s/;_;D#zE;R[*Tv`8Z');
define('SECURE_AUTH_SALT', 'S@*M}[1QH/F4-_J~8@FKM57S6,8S=48.%_tz{`BSjclV7f>@4KC1=S|^MLkWJaN/');
define('LOGGED_IN_SALT',   'Pl@;Zo!UV):k*n}K ne+Uuya4yUt6`49Y@)k^?1foMl$$l17M<yosoa7ZDbzr6%6');
define('NONCE_SALT',       'a}v+#5]{zdi}8,;2 666@!E2vTVCJg@fgF4Iwsou.-V4}P]w>~se:B@1PD@pX/Ks');

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
