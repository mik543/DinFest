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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/mikkelch.dk/public_html/minfest/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'mikkelch_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'mikkelch_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ECCOhund12' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql94.unoeuro.com' );

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
define( 'AUTH_KEY',          'n&jJBIm8:sLngr$NB-VHXuegNWQq@M?83e|I1Qd=5/ qDqC_P_`7)zI,/*CpQp68' );
define( 'SECURE_AUTH_KEY',   ',{+?2E+$)~gGM=84JLN$)?x<5V-rXclMZKEk2+`IoEas,$VhXs_v1+UtJ+BD*ZeO' );
define( 'LOGGED_IN_KEY',     'T4[m-p1pT%L-A*/remGDzn8FJ?Mrr<ksDEVEJPt&DzolIrC@od-i~0aG5vu*qK0V' );
define( 'NONCE_KEY',         '14u&vBZk&~;Htj[!qEN:zuJ4@(AamwM;1r.<YQ,[uRZcbE/%sa0nnGyiR59jb)@K' );
define( 'AUTH_SALT',         'W 5^KNKRyulKTLqs|W_yEO|YQud]YxtH_l9`7YU9~t6=z}5)z*M/eqJaA+Rg5_?0' );
define( 'SECURE_AUTH_SALT',  'y/tT^_1#=l8W@-eX}K8Ll]G}xEv4O&8|_Le<(bu^;9IX>NLTPC:|~YDGNg%S:JK<' );
define( 'LOGGED_IN_SALT',    'KXBF%Ds=:eW:?:#-LK[K54a3%Ufpq#F2?Z|M C*nNX+h=E#2H~aADW8xUI{56C{b' );
define( 'NONCE_SALT',        'ks%.Jb{BAv:,4N.I5SL5^,j<..-aHj+qv5;Je@<$yU)83WAc*9AMt1pralGgy?/T' );
define( 'WP_CACHE_KEY_SALT', '`+&9auoF%]W{?v];ya9%;buS)v;$=B,j s vRPKr^Y19p|eYTUW(MqO>D)wq4{mC' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'clk_fa2bdb7c40_';




define( 'WP_MEMORY_LIMIT', ini_get('memory_limit') );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
