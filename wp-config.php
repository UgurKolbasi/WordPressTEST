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
define( 'DB_NAME', 'wordpresstest_db' );

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
define( 'AUTH_KEY',         '+P>f3RJ1NwVByH1`9iBQ{L7JliW78SJ;Z]^}K7,bb07Z{ M~KI)EGmQ0Oqyj2mY2' );
define( 'SECURE_AUTH_KEY',  '{xEQPSXvOlkVblY1g}J{|JN#dT`tQ[SU,ddXqzuoYZ@|t L$Hk&9F(0n5=Ojf4_[' );
define( 'LOGGED_IN_KEY',    ')Wxry$P]IHm(vMv,6vENgA},is6cX/2BsK$>LKBfe=1-5r-p~xK^yTVz%=W(z[?[' );
define( 'NONCE_KEY',        'E-K-LM;Gjl~*bb2!vc`D(iTk[!RksecKjQOH|U!&3#w&ioS:3h=n,NF9T?H <GQS' );
define( 'AUTH_SALT',        'b<,A_Jki *v8EmS/RVZ#TzGa(r=O0 Mb~QF/6g1+uqP3;$TdaO6jF1+-d/DStUl=' );
define( 'SECURE_AUTH_SALT', 'l~>%O,/>w[LGjb<RAMNa;8=+gi8i$_%aA9,o{=&A3Bh?e.R03eV[>ye8m7r=$5=$' );
define( 'LOGGED_IN_SALT',   '&,[=62F3qJ|t-/Ul2XxGgbp2(QbX@&EehEJ@L0[vr3&W<V,4lkf=lKVj&OP&pZdO' );
define( 'NONCE_SALT',       '[)tKjc_H9;Tg|)<wBst?1`*ZMsS/{@6W;z|NK^)ExaXA4JQ6[@{b.~P`6G4T<XpW' );

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
