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
define( 'DB_NAME', 'creation-projects' );

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
define( 'AUTH_KEY',         '8#HV!7E6G$%Bx)K>X<tF>!4,AaA3Rf+0S4 <>&;qn~;=E-B*#{%mJmCW4FEJ#<|E' );
define( 'SECURE_AUTH_KEY',  'WFQ91~Q$G+^QlaQEL(8h>:p|O7|t4?yc9SiB]aX/hxMG ZT/o?Gg-+j_mjgoK7hK' );
define( 'LOGGED_IN_KEY',    'vo@v~kY-/?a7hy5cDEjUVaXSX#d_E8EehE$oj9l4BfkI&`V>>TM~YiSY/pA*2pcS' );
define( 'NONCE_KEY',        '*JQxw$Lvvk2|2NgjeOwYX:^35_[cAk73+6L$|M(RT%%0By]no4UZpX~|WK[F!|OK' );
define( 'AUTH_SALT',        ' ;0SYYo]B}l~A%(0E~Tplp{@GNynC4dZ&GYZ.sMA.r6QhT0:t0[#g{ZfZQ6q!td|' );
define( 'SECURE_AUTH_SALT', 'NSX7vxt%9R1H+x$iH}i=lM/ym9j+Ykb-MpNTnrDV4a|+Ho|Ani9:qfHZ%16CTJ]Q' );
define( 'LOGGED_IN_SALT',   '~hI~W8?}%$c4)S/s3~(&~5vk+-s;:507Gxz)$*ggZG!5pJ9eVcV^?5dDnv_oC[jr' );
define( 'NONCE_SALT',       'swZ!z5$]AONd=]Eg/ZX,o}$|1Jkwv7R8O{UC%vP#4}I&8;1L+!m)//5vdhGn,,2u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cp_';

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
ini_set('display_errors', 'none');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
