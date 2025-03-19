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
define( 'DB_NAME', 'pluginsdev' );

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
define( 'AUTH_KEY',         'K03/H]wtsgixx#9%Yzl&<9.,}V-F*%yUCa2Jz!iayuetnU;H>d5X&Ky)iD/Xp6*9' );
define( 'SECURE_AUTH_KEY',  'kK_MeP-9l?VIv pJ8N:!2YM]X8+6&l.B$eT3MI1!L-5-ifRwhq~rQY5J|2wb[,lm' );
define( 'LOGGED_IN_KEY',    'sgY_YsAZ)vPRkrAvtM._3sjs<#M<^b<u-v.,@TZ*xNiQg:zF Nze?a|07F@q5VN`' );
define( 'NONCE_KEY',        '4Z_A/$dsgm_<]Oz`_av^I/:,S:Iv)+.+s-d?_H?qv{(A,d<ryJO`)#.qIFJ*>CLk' );
define( 'AUTH_SALT',        'e$.:we?&ax:nC/p3=p(trF$IOnu|FB )O;J3d9g+^.DBH1QU_0/9c!r_bY{y(EqA' );
define( 'SECURE_AUTH_SALT', 'r1z }@>y!:s{({~u34kG{oaWPn0Jf7hHYgCAhiVI!G=s}Z{@!<|)tRHz)g5*5?xh' );
define( 'LOGGED_IN_SALT',   'op^a]YDV$-Uaa^5Rou0(P&m$QyE^y.|a;;7`tKS~9eK79uxJQf6pnYPu}%6hhld}' );
define( 'NONCE_SALT',       '6i c88zYX[C4b0 Xg!RNT`!?sK?yk(m$PE90afN?|fgCtVcB1J&aShh!+AjV1=Q9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
