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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'git_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'c32!8,hv3:BC`B<AmNY*ZA,:}t6WiDbs{Rq O4YE2BJZTgN)]0`w<`e=DO/.$<vu' );
define( 'SECURE_AUTH_KEY',  '+~4dn4Ij;),N@$ol=Z?eAJUd=#(-4znnATFSVuvd{bx@IhOC:4Hxz)?1|pf)kWGx' );
define( 'LOGGED_IN_KEY',    'q~hlD0JTM}ZKSEh>Se_yqwvEU)a&egWPiZ?bY(eO5(WQQ;IFPeg7e}s^sLf= ,]B' );
define( 'NONCE_KEY',        'J iZE{o>_g6WvlA :kEXb^=tGp};j:JE5H1@xME@BQOT?rr9ZQ {u}UteU$H7Mef' );
define( 'AUTH_SALT',        'D<jWdmZ@NRDEIaX> woSqpPF0BCub2]8&?O&W|E@9b@(0P=~. {}:<M4gE=%mWgU' );
define( 'SECURE_AUTH_SALT', '@sz,13t[fHO~6BHN%)f$V_fb:z=%$ZPI-h]wE4<~m{)Dmd~!gn?8h`etG}qI~vx9' );
define( 'LOGGED_IN_SALT',   '[~7a12q$a }DlJ}CX E#U&)~u{h^6<f:}5HHDj+TDR]9m)xBzPv3X i+G>{WS4i<' );
define( 'NONCE_SALT',       'ndZC(,HWZonlO^&ZZb,qX)FV=dM:%LFh=.FBa+C(j,^XXEpFCde4CT-q^a8bZIvz' );

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
