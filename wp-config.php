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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_site_db' );

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
define( 'AUTH_KEY',         '&;UX>GPvhl723YQ3Wbdg[/S+)Q<2H>GTiP@fb/D ?0 J-j[X3o(X/a0TI1YZJ*W!' );
define( 'SECURE_AUTH_KEY',  'vfOi`M~+{[Y#wcq%:T~cP|0J3`1`+#fT#M=D%=L4r6t1p[3Q,QS?i~33E>Nn:??E' );
define( 'LOGGED_IN_KEY',    '9A0T1gxEUJrPoz>O`zd3c34}U]26${}Dr^-o>UvJ;Ug+>:f~g=PNFh(%@qJ*CK.v' );
define( 'NONCE_KEY',        'T8t4}H@?^t{a)A=iYC+li!1f)(6wE(UH<pc|-,J(T&;6b@nkBRhrXE^J<XC8<0|:' );
define( 'AUTH_SALT',        'HQ/yPGV:S,4Ek*QB%3EmQyUbXv6!W*J 6u>5SQMcz1h}h7),#dS/+h(hy@z%us{e' );
define( 'SECURE_AUTH_SALT', 'dnLUOs,1><qDLiDL>*+;N^$cS|@A0h>(6!oo:Yc-~pL0SS{v<D_X<;!W=-3K-> m' );
define( 'LOGGED_IN_SALT',   ',-8N/ze@U(F4Oiv`@V1KYdm1kTZ/^|>x8apU-mGZ&llTr}W6Z*>IQq3&V+f*Y`~*' );
define( 'NONCE_SALT',       'R;@%37fmx/k?`rI/t1`=z7{xSSWp6kItBo?E(UPr>:Y9&64|:[`NCgxb,R_7.89W' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
