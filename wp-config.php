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
define('AUTH_KEY',         '8+YXh,4HX6+A5-aq|~*m;t+V|ia91Dx`~e+Tfhr+w#BB0TuozBR0hcfXK<a]`+f]');
define('SECURE_AUTH_KEY',  '>F/^jpaPI)7CB;[qMiDv-4:JuP,Vg7f}3H&2lkC08gaE9L1ToMz@gj<|4_Bx+p49');
define('LOGGED_IN_KEY',    'oc(AP1<0p>7!Xm$ZPcB{GDVc-Rv(5d& pY-PyJ!t^.H$Bnuh[8$$Y#)on:`eNM7M');
define('NONCE_KEY',        'hpP=.`=jFX{`sT]h8[>Z2{xJJRBepeo?l-T2T-// Pm?CZOhl;HB0-xwUND8{ME:');
define('AUTH_SALT',        'IxWA/_o6kFvxN:lO!tR=>YkPB rDhzE?PIYn=$ffxY<:mi/&4=&t>,@^AX0jT%8M');
define('SECURE_AUTH_SALT', ']>]N4.tB<^?ok,PH)+q@:zPm$6J++Og-VC0mL(&{=wyTt,ye0p^N` kZ86UY>z_&');
define('LOGGED_IN_SALT',   'SXxE|NTzutaPuo`/v{7J%#+y#jlIlO[bjomg/-CXeJsp@@R9 w#/8vs[Y6AgvNO#');
define('NONCE_SALT',       'GnWtlLxr:^EE8uvd-DSeZxWk#rx`K69<]^BOw*bXT$|Qk%Phc`K16rR1mZN:e@ux');

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
