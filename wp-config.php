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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '9zl>:JMUqXi-@EjM8Fk5n0V Z|y[FvYMZa5Gm^h0FLOl|/:bFh,N OVdgh3SarP~' );
define( 'SECURE_AUTH_KEY',   '2?7} )>C298(Gy~,+RnT,8}m/hC{1m2tm=0e?y^(UBsb)c^hd*O,WQ0p}/}l$<p0' );
define( 'LOGGED_IN_KEY',     ' :/(bd9yIM 9u;r*^%.O15lvKa~$tpv;Ni[CgNq`Z^T2cv<GHV,HDz$3[HxB9|fP' );
define( 'NONCE_KEY',         'hoSzQ#m+7G^4;:X|^#M]I_vsoA0~vOdX$Q$R$#m<OLb[V)GcyR?18cd<=W=Lw}&s' );
define( 'AUTH_SALT',         '<qb76KwXTuzYKW@r(UQfnaZI^}/0?`o~wi(GdTY-pTuMti*/Nzv#.;w=9E?W0f*F' );
define( 'SECURE_AUTH_SALT',  '8q21:|Z7Py9YdQ-!]=JEFllz!)VX7$(QUezMU8DW:?|icy*uTi[M<5ypNwUkX:#D' );
define( 'LOGGED_IN_SALT',    'Rcq/6uXKB--nM[G]KSH!bhS-Ze#cYX2(=V#r :qKm&EK?,(wP9,=+;Ifhvfrp# b' );
define( 'NONCE_SALT',        'An]eZ;oYo3YSnr_@&@(8j8u&whnFF:ZKgil.RP6S=;qQq*SkM_:hea u}Jmv$UOA' );
define( 'WP_CACHE_KEY_SALT', 'zu*F -.-W{@)%l+5=fqmz[4euQ]R.=z3x9HRiyPn`m9%NHbx6(ZxoDP;iif6r}+w' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
