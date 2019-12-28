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
define( 'DB_NAME', 'softel' );

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
define( 'AUTH_KEY',         '>}0v:#3cgQ#P!dXM!762`Db[<NGyBj[2=fjKb_`^eV%6F}!czE17]k_,C|%f@Blv' );
define( 'SECURE_AUTH_KEY',  '}bm%^J+:Yb*=/[v&$sH-yVre9j /U,kCFBQFf<MM;8|B//WDaZcK?ZxhiFqWV&mq' );
define( 'LOGGED_IN_KEY',    '=Fwe81?Z7J7eFN[B*`9`zx/ u}&=|Y]lnsFUt65yc^651oS1-eg,^G#kxx}w;CF.' );
define( 'NONCE_KEY',        'I$Le>$ Z14YX2)Z?{Fj:6sk8~Zwy_BF~Au vDNI&Piiw1RF]^l2X`rZblHQS}*,n' );
define( 'AUTH_SALT',        '`3;Anh#L 2WQ>i^PIM(_W6d 1q7>Mw]J0n/=r~E0?U.HK<zHer)#|T?pwRc5q!_ ' );
define( 'SECURE_AUTH_SALT', 'YRPY^#S0_qWS/=?sB3d<5%I:n4;F&&Q5jTw|pJ&EA&b(1~ -)!lD}@C$]|iKioD>' );
define( 'LOGGED_IN_SALT',   'D(IOJ4R8,UBa/9(Q`[lUx4=jBQBgfVUVw8LnN,n?Ykk5iEFcm_&vxEGl_1hh1|L(' );
define( 'NONCE_SALT',       's}[%/>wf~/-4H( Kep| !*@<PvFl&mJxUd=s*_u1()boCgg[%GdMh#4or)z>5JMJ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sf_';

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


set_time_limit(300);