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
define( 'DB_NAME', 'sih-mobile' );

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
define( 'AUTH_KEY',         '*OE!Xjlk8e,x.2z7n?/Ci(X5Ll` _L3 NE*K0!z@AO82-N(,^Sh#f:;$#+0en4Ow' );
define( 'SECURE_AUTH_KEY',  'N=MH|s6^Cgq[VHzs:u&pb6HAW0n>MNazZn!]X|~=X=:Dm6J;lDzzrDM7H.d9i/dB' );
define( 'LOGGED_IN_KEY',    ',M,<{8uE#{l2jv!bMYT?trXS 7!1b?0dq@<eHGWr}&EsLCWVL^8okh3t/2f~v7I!' );
define( 'NONCE_KEY',        'P}t7zi+e9`Tt5-XB$2:Z5336@#FHqOKrK(Ma[N*.d^$S$ $G9#k0jqg^4,ZKl{n>' );
define( 'AUTH_SALT',        '>_bEKHn%_-=^4e^^|P)=]I.1po)9U?Ky1x^).Nxr8L/-~di}i#:yj?+PcMRY5f+;' );
define( 'SECURE_AUTH_SALT', '&U6-haqX<t_WiDl.u$Z=4h<!n{gm{Oo:Tqe7e-X-A|?tF[ F&>-k#C6ra6t%.1<J' );
define( 'LOGGED_IN_SALT',   'F}I!Z}e[4abN#gOJK{l7G6cj?3aD}7&,xgA}[yZSF[L7`-FjLGvwY=KIV?)T+3Xg' );
define( 'NONCE_SALT',       'tWFw>7Fe;^JXYj&zali(Nt+>VL2eHxK6<;(`jDL)~AD</3n)CI~`|6Kt`*T6HE{j' );

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
