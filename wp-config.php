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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */


/** The name of the database for WordPress */
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpcollaborations' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$47H-|hl<tvX%!tNSC^)@5#gpPN!Wq!0g_Q[]b{;pi-}Zy)`wBo=u4ief]VfFTF>');
define('SECURE_AUTH_KEY',  '%%ar7hgcvoY-?(iCa)c-uzd|tyo^{zOU6?^!d?s,+s4{?2G|wSkY=si$yoRx-pem');
define('LOGGED_IN_KEY',    'H|[.r.rK|jP=45`&o-`q[(-;H J2)r+2$Se?=r}xRWm%K0Nq}$MDC8pk+a|5I{Bo');
define('NONCE_KEY',        'Wj(_0`=%V %@O FoQ8&53=DO4o/q2aq:&-aCtgk6m3gIE4*E_a},D@-2mim)kAt=');
define('AUTH_SALT',        '1[x:hPhKV*EQBkX:5(Sx6@S n5F_MXACkOS;12pT+f?j[](`xi:*-RLV`~2#Ze$#');
define('SECURE_AUTH_SALT', ']:9<q-+HbK/^o)kJeq+N4:+N2`h1dC:Clx/s3d pY@:?R|K`UmLZ+U9M+c+/0|tZ');
define('LOGGED_IN_SALT',   '-<5N`+@tXjB]-iKr~c.PY^}NiD,k#b_AEW}!rO|+Q%N?^WO_IkM<yu[,y+y9%D+t');
define('NONCE_SALT',       'b|&q[|*NJNePYn3YC&Gb-G[ArtCY!aucO3f=%n{GZJD^.+%G,M-Io44;h`Ys*Fhq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcollaborations_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
