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
define( 'DB_NAME', 'MCare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'I0vvwbywu4#083-T%8;-)_#e4>_Sr[PgInepG#d,COM7sl*2b`[.65)w,|w$A^^`' );
define( 'SECURE_AUTH_KEY',  'iRIwFn@1$f$;he*o0#64a$`ST{a8>>uv1(?N0Th;LvFO#?z:Iwp}^2w^SMjq@8?6' );
define( 'LOGGED_IN_KEY',    'lDpacS-?+T[:m?9*Y#{|=/F64Wi5rgWlYY&v]#hML&4>+nJQ6@==dOly1g<VJ|Kz' );
define( 'NONCE_KEY',        'kg#4OUw4LDg,@Pz)){`#@PAr/sk.ZXzVweQx-6+3P ynt]Yii3fS&rh=QDZ7I%$/' );
define( 'AUTH_SALT',        'r(4&}*y`;(Y|-Pv|M|VwsYI9a=eg`2QU&/5kv$k@@t0N#=Gxk~pxr!KRWA_S Q4U' );
define( 'SECURE_AUTH_SALT', 'ji4Di3H]=#A=smc0sav/%=/mE`0BO*q64^5%jaZn2;<ScJdCA|rbbvm+/&i;)t<_' );
define( 'LOGGED_IN_SALT',   'i53x1a[lM!M(=.C5p4Apjuw,$&VWc6;F$p3+O$<6@L8a}or#O,#)#k$M.Xz2W>:E' );
define( 'NONCE_SALT',       'M?Cr.g,0J6d=_R@g8FROAcu9Q[Df[TdcILD~/):~O*U3-EHlZ$/ICYT$.+pq?v!X' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_231412';

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
