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
define( 'DB_NAME', 'demosite' );

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
define( 'AUTH_KEY',         'P&oPWgHPjTftg,7Hr$fF=OI*7r<|)g@tRn,|*xUh-Rx%=X[&-a}>U~gcL)QZ+>~/' );
define( 'SECURE_AUTH_KEY',  'q`@]XNqtwcQyugyI>3[jjER!rlzOtJpum`KINYO^-O8TC%[^3jo%a9W/Cg4pHhIz' );
define( 'LOGGED_IN_KEY',    'I2R<J]N]x)Uf+twGKmgN2gO2yQ#*rsm7|q=|Rz1Z&L_NQ5:#4?a@;Wh]/=.zX/_#' );
define( 'NONCE_KEY',        'z>gKo:-:S*(W-ww2.192%r(X.WLDdcE=L@)dD0EE``av=[;[VTn80{R7#pzzb7~&' );
define( 'AUTH_SALT',        'Z;/waqJp7(%7-%*I3#r@g?6+k7F@s/ys[)|5@M,$XR{!pS~)ITSLq%j)%@E+JB/c' );
define( 'SECURE_AUTH_SALT', 'p[M%^$UTxH2r(DWd,AWn8;bAI`ojvl3z$o6z_V+XMJz+pl)8X=3awCfZs5Sq[nfB' );
define( 'LOGGED_IN_SALT',   'U(/{zo[BI,`qbp0 d4t4svBdZZy4Cu~lcVJ+1[`C_Aq gWR(~M87U-&7xyg0fKG?' );
define( 'NONCE_SALT',       'Xs]h%zF>-HyJ%0X/.tte*-ipyK2a6:6_78..h|2>%-1o|Ge2c&3a)u/s.4nq.RH|' );

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
