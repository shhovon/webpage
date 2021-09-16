<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio-site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'p@NBFVg+;plUO%C<=iUUsSOBVyJFpvt?WLg1Fg4F`V&3^`M[Kd/Td!!/d.5P2?i5' );
define( 'SECURE_AUTH_KEY',  'mMVU2{mBzP/=X.^3}BKF.SCPslq~LQZ7ZZ5e+Cc*.d= ]/*o_f0%5Gh7gIm$-Xqd' );
define( 'LOGGED_IN_KEY',    'N8,[$<i~lpqZfVj%U~5d|Ht^,l`_f(49r/hYX,$qF.k]Bk;5VuiCd+}{aO_aUcB.' );
define( 'NONCE_KEY',        '=Z41_J?q^_+y]*z{b-eZpr~#=0E$7Yc*~$ 5j!e(]bLgW$>~[Y?3b3D7>ay$kZ$x' );
define( 'AUTH_SALT',        '?DFP U?kr3e&Cqcj`dLa`__xDYZQ4nYRcCv`,<YqlybTl@53>r}Kor>(x^e0V}/Z' );
define( 'SECURE_AUTH_SALT', 'RC${O*(rTy9yii=|$AE1D<DKcOIp_q3=gUxEaW*k-Q}09@tg|eOZzu!>=[m]z)Y9' );
define( 'LOGGED_IN_SALT',   '1Pf,zP~ADXTai1]- _klG/qH!HKnt=NgjCgYIkDo:uTEcR|}$nii+Z?a6@Zu5z=A' );
define( 'NONCE_SALT',       ')C=LMIsJ`lq@I3{O&t@X9vDk/5vEE+1aL^6ih@wW 7 a[<b-Y>x{v]7},`h<|HZq' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
