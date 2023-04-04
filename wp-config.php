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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\chic_dressing_init\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'chic_dressing_init' );

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
define( 'AUTH_KEY',         '#wu8V4t`~yrsVv*,DH&m6-KhmX6Ls3<b<IOhtUiCBlquCe3Y)|q?*vS+W4ZEcVnb' );
define( 'SECURE_AUTH_KEY',  'CPi0,Hx0L#k-hy_{#v065!?fJ8;!{qbRm;n14`Qx88`_fp|na+c4<o}Ax{^^2onE' );
define( 'LOGGED_IN_KEY',    'J?`?|8{f#2ot#k6aTK!$PT>YM6$IgOe9SCT2Vrq>J[-Q-3uP]<$0.*n|lZ($dcAR' );
define( 'NONCE_KEY',        '!j*GiG#vzD3<ldDkjShC&<s _&{Q29.uzVm1@|hW Nng9Km#*jI1D[/{?IlT#9;:' );
define( 'AUTH_SALT',        '?(.iYXT<Ap~uH0LV 1;q1WOBA>&nwr;be-$=$gdW4ZTgv6D:xw1:6pSy;MEeOos)' );
define( 'SECURE_AUTH_SALT', 'rxTkL#P`6LFI*`WQRw4mknz^W Z2Kn*-6$pCL$0KXs@Azc,dP)hA,ZCiw8a/dmh%' );
define( 'LOGGED_IN_SALT',   'auehj8/th]YOy8RdM+0pczWn5)+Jk;~bN*T9%)>y*Eyltn^h^>^[:aH?ZpA5IYYh' );
define( 'NONCE_SALT',       '6~QhPc] Pon6Xpjnv/cb7v1!R`*pmD)thoDdz|A$U!=|GM;YBQM>3,ky@.hQ(Pdg' );

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

@ini_set( 'upload_max_filesize' , '250M' );
@ini_set( 'post_max_size', '250M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
