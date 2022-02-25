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
define( 'DB_NAME', 'asiavinafan' );

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
define( 'AUTH_KEY',         'UxMJx1.:`,]W5[qo}VzFo24rh(1V5.DN&I+_nGB5>({UHL;Uidp<r+mkR(_OL9gP' );
define( 'SECURE_AUTH_KEY',  '-#&|Y~%wFlflix=rW}#Z7m{QPpE:=6<jbQ/BPJ63m:V51+,ywJ6C1+slGROp%-49' );
define( 'LOGGED_IN_KEY',    'DoUUQK1hkw(Es]aA X~Xh!7Va&^8#8ta3s_NL}f?8xO((Tp*+Tr@Uj=grc`m$4nL' );
define( 'NONCE_KEY',        'N=h[+fW8*Ocf]:_l>qYn-&,c?{fIO`^@YWtKBlCc~Z7bSz}>hEW17,jnW^N6?u2i' );
define( 'AUTH_SALT',        'RKj<LZM+<e@P|}suANXyo!p-bnEN_&T{C%tZp2fOv6d;wG<r5vE|QDM8!~Od~3L]' );
define( 'SECURE_AUTH_SALT', '<ZvgLBMuGl(.FWI$D!Ao4#bL:^4e?k1R}AoY^*Yfu3U=KrL7lrJV)NH#=^[ #=6]' );
define( 'LOGGED_IN_SALT',   '<ifhK:n5/,AZl~,s/.Zm!)&erP!Y-T/ywFq~sO?8-g]MFy&b%/9!_M{7TOsrEj>6' );
define( 'NONCE_SALT',       '@fLA}FBK;eX}K`#O4wI45iit~?js4Y7N_pi#IoT^(i86&I[cXG $2qrqB3r(np<=' );

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
