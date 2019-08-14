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
define( 'DB_NAME', 'brackIT' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Bh`^B ? ?cC3ESv`wSk?A4P<~`<Ec5^36dJL--^%eMCGB meUQFO{xFS]%g?<&r/' );
define( 'SECURE_AUTH_KEY',  '7T,FYFj/B7.349metQ.+bHh9nsO(m{1|C.1h] #S$DV.Ixg]~ IZ#l>}mq3?h0|#' );
define( 'LOGGED_IN_KEY',    'O2OYVBVIe^$,Fjz~4U_/@6)L%),BS#h-zrf zps<Jj+NZ?*:doA[fzlQLILyA+{5' );
define( 'NONCE_KEY',        '|:P?)0Q-_Td|XZ/2rKMA_B?Z-(yPMOD|Bd+`z5$rdzUw2c@ji9t4I[EXhHOYcg#a' );
define( 'AUTH_SALT',        'b/#mP1>0R%O5[Z[~#J+a~B$P>P*?{WVOWfkML&Q_H!6g*ZW#R7M-).y&xR%#_f)J' );
define( 'SECURE_AUTH_SALT', 'ZRI|!Q,0O@Ecv{ioA,K,X nZB3L^hV8Z_W/m/_feZ=COl:f3PvwbuzeE5e_.rdmk' );
define( 'LOGGED_IN_SALT',   'tVeumI9|SN)(X(^GvWxxu@~OcD)k)2B#hEnG#+e8 !#k-fLs;N(3[Q8#&^I/261,' );
define( 'NONCE_SALT',       '[_U^9T7Gi&Vi 42b@_<DM F[<wPgLWqvF s=<,*icD_|rYqL#0+l&F9lw%ATOdYQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bit_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
