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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test1' );

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
define( 'AUTH_KEY',         '*1(7Xl6hVP[+j$w~r%57$<L+ol|Fx]kpcX5wKIWT>@DreuM!6{mD:S;M| Xm1/Uo' );
define( 'SECURE_AUTH_KEY',  'h|.eRZ0@DJD0:xr Z#;I dDI.3fZv*52J;M2A?KPA3MMn/k7_kb{0oLcg nKQH}A' );
define( 'LOGGED_IN_KEY',    'JnNvD]2?l;]jD:ZN%uva;/>?m_vDp-sPBjqfO}9awZViD10y3Fq,J!*`lvvf%DzK' );
define( 'NONCE_KEY',        'W|F>`CmH&As`#h<9&;i%{W,e,yO6kzu.il<3d}M+g+n>w+g@S3K<=+79X__H!CFK' );
define( 'AUTH_SALT',        'MdnL1&jY;3BB#:lG=,af&9,h9#!BlRu+fA]3?F6g^Y2+0<a];6H}aQ![AT`7c0k@' );
define( 'SECURE_AUTH_SALT', '9k`=^b;_e]KJI&5(]@^9vUIgaEg^j7;X<Y O1LqIz`A$(5wKE_<#0b9[6Qa;^H`/' );
define( 'LOGGED_IN_SALT',   '_+@]g,z&U)=>Gd,Ci T}3?UZL&*`-96@pk5jeYDQTku-s&Cdd4R}~QsjNPARl<j`' );
define( 'NONCE_SALT',       '9RzM%<#L#0`!4m3dYv1^_<kytz_P]eZ&~.3jS>}WG6W<o5Zg5uXrnlZM`da[9`kp' );

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
