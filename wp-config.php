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
define( 'DB_NAME', 'meomaystore' );

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
define( 'AUTH_KEY',         '4cbZVr$f>rbjJIY{kK8M=+r<!Un+V6ZN!,{QKa ^N6*<1wWp,^G nJU,R?--4k>3' );
define( 'SECURE_AUTH_KEY',  '`]N6($_jNe8U<5mDW.*n&PcxPcmUNZ2WA`Fmx`i5! 3!IfumN}+IH#fhIg=6W{@_' );
define( 'LOGGED_IN_KEY',    ')w664R/Z*lL?5,vk.*qs>uKiK{W>LQe7N-VXQOX%]RY|dPL0<<MeLb$hi9xLtoZ6' );
define( 'NONCE_KEY',        'Oec#:iI|p#PO*%aJ|?Xl-Sd,=5cCssPxY&i8)z/UR_}}hz#=#lw%J8XuEr9y#{,G' );
define( 'AUTH_SALT',        'yYX!Ts`MMN_n,=T0*VrL^7!exeN8n#GX[8 e7yJc^B%?g7igUYn<$wv-Vnw)Kv4]' );
define( 'SECURE_AUTH_SALT', 'QAO_FY~cR>2%?k6z]jR[5Bwo%LiCm*D@&d=E++__:Zi_htrk@8-Jl5L+w;6)7G%3' );
define( 'LOGGED_IN_SALT',   'jA4Wzl|w>~W9$^wKydwAWNPMXM}fZJN:&#sk>>iANXH[j3!u)c$14h}[6fdk~PT ' );
define( 'NONCE_SALT',       '&#&{AL=xC?L 9`Rj102z8KB^y.~zpn_)d 27z=s;MW4L!NN``n9w,3~%a~C&Jb@n' );

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
