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
define( 'DB_NAME', 'langpro' );

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
define( 'AUTH_KEY',         ';7pVDpeQu)GI{1c3.Jdr*[XI7+hY.^U0^to#&/ ByQ>zQT!^Fd=s-r<Z*BnhY7[G' );
define( 'SECURE_AUTH_KEY',  'W=H5NNo8a0gTDrRATMQNu:MYZBvzx+^=nJ_>fx3eRrmPHgNQR/hM}aQ.ew$q6nWt' );
define( 'LOGGED_IN_KEY',    'gz8@4(4-DJzY8GOyZDEBLL?uC=0p>D]9R5H-MMG3w~4qgf0Z_7V-8_5KZFt3`@Hv' );
define( 'NONCE_KEY',        'a-tw0rr{xI-_(li<[<o</N>R7~Wu$J:kWRu(*BhY;JkeA4,hGt={sWi7rP},538O' );
define( 'AUTH_SALT',        ']WK%8|pNH}A9n Ap/ )k@CrfTa%0^3r{%lmz}>HE;W}EwTAuGfF0d{RA`njv{n$K' );
define( 'SECURE_AUTH_SALT', 'h<KuWK}.Oi+7.W08k}}*`ZT w:m }t1qUw!FV{`J(hL|4udSufFkiY{gO2SeE>w;' );
define( 'LOGGED_IN_SALT',   '&4wu>oJAT>B63YzY&<hP5y78xTVO|z9cq50Kc)60]Tf!<Lc&GWo}g2 iM[y;A>l=' );
define( 'NONCE_SALT',       'Svx2C2;KktS.GCkY>I|=1J`[Q[84O=A{%E^<wO8sqi]1l|R=i!{X7/DQEUQ6_>}!' );

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
