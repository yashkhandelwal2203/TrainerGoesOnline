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
define( 'DB_NAME', 'TrainerGoesOnline' );

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
define( 'AUTH_KEY',         'u9$AH)jodIVZndU!6pU!lA[.V,VjUikX=`@SP1<ZRa^fbnRhi2[9q0fL08Zz/I^C' );
define( 'SECURE_AUTH_KEY',  '0Vi`W6%)Z?BlBHn3Qg_0r]C#xVP8dq16_r>*628+gA4qiRC91.7|%lFQZ2px)k$z' );
define( 'LOGGED_IN_KEY',    'iQx}n3nyJ,cr/;i0<cPyQUHR0@1N-6*q-i`$me,y5-~&bYpBA/vC,`D{:o:RgJcB' );
define( 'NONCE_KEY',        'f@tq69?53&^K06bF>}KLm&DSP-t|8z]pcn*i];}Fgt.s[qAwo<tL+;Navg:>2w#(' );
define( 'AUTH_SALT',        'j1LfawZ$ yn[-Oj?BrW7zcm~[6$1j5G+1KBwM#U~(se^F%q=aJ!4&yA%caoWM;{W' );
define( 'SECURE_AUTH_SALT', 'c2OXnP72ngiA>Nx7>K2!_-G5j6fvJ_l|mQi/yQq+XhQ>vX7{*y4+$,/9~Fa iAsr' );
define( 'LOGGED_IN_SALT',   '@ieO9<yCX|f%Y/psK-G uI`J/%f2p<tUh4bNXL=~}$:We! i:4|b74!gsGEr)C-t' );
define( 'NONCE_SALT',       '!}F//|}(RZc ns(ib=7X@D7B;/=aP2pSod`;UuO_AybqC_^6}pjLIS><KkXPV$%Q' );

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
