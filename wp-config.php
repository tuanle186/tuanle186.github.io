<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bkgearhub_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Xqr0ek[NjexK7v]QV{{O]@q[c7,N)8&nPR$;,S@Dz%kAQkZGqr`c~nJ@A?z|hke&' );
define( 'SECURE_AUTH_KEY',  'Gb?/PEb0_tkN/q/]7w%=g_B|o8?Hb7QulV-:gw ^ypc]S8J$ZlAFBc#i5Di@=M@W' );
define( 'LOGGED_IN_KEY',    'Hg=x9vL-@$eD/-eJ6,ZEaEX)8W!Tqarq59K4Fqt80DoT/mTVj^b)/rs4h~s5_-_*' );
define( 'NONCE_KEY',        '-a1R]-:KC&Zx^YNu]sUVn}J=i8hH)J^ei]:h6rS[wb^n)-l~`uI#`HWPMVPK@v,b' );
define( 'AUTH_SALT',        'sUH].=#,?3B2].0Xov9B#QExQN$N/+TWr1Hq;.</0H3C?qog[#n9I@ mzFo5W;[M' );
define( 'SECURE_AUTH_SALT', 'r<M$X&NQ/Z0TRWkaw5!&Bf7(OVtaZPtL?4S<jB*WEw.aPc+0bb$V`t25Iz*w$6Q;' );
define( 'LOGGED_IN_SALT',   '(48 tTU>/gAvJYk2!,]S,M7zjHptZ{x-PihDO&J%QHXZN=3B),]=Boyantb=C `k' );
define( 'NONCE_SALT',       'W7h&XP>K@3/<E*mj82vX;#wd,1nJhTCPiU!U.!Ql3[m*<Q5]CSTbcx_3:h e/q:<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
