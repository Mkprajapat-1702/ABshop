<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'ABshop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';u`157=}J`uAF(vAh:g/:URmh#A$32h{S=^[n@*N@?-_Q}0:`Mg&jD%rs/Y5yuqB' );
define( 'SECURE_AUTH_KEY',  '7Kv[ e+Y4VQ%<Zx#6tKmPQC,mK%)<vXV<!HclaeeYf@9Y.1B1*4!:pb)Mg0d,2[P' );
define( 'LOGGED_IN_KEY',    '7nNQd_MLc1/Y%Z*/W|S fB 7qZs$T9w6KxGpgx=Cr!qD$w5^c2J=ba*`rBY=2DCG' );
define( 'NONCE_KEY',        '<i-C?+0:V@x@h7kLu;|zY4?7g]1#GlKWn@rvV^6vVcEB6/g&UnHOc6m2aP3gO+R3' );
define( 'AUTH_SALT',        '{Om`z}!n3LJ[@W6wQ`<ylm>dWcn:dbL?|sj1:Ml7 UJN>s,t08[r1%lPubq4G:{(' );
define( 'SECURE_AUTH_SALT', '(esgcqF]&O<R1cFvAU:!4Y+MwNw<n%C6O?.,ac1#+q50r6J*Lk78ANg?{Uh/pMxV' );
define( 'LOGGED_IN_SALT',   '-OeA%%;YNhC1Ic22<u743=u4RnAc=eFv8^7gjv4,Uw~gu|nYftt1p@(-XR( ^l*8' );
define( 'NONCE_SALT',       'gy%M~R/0uSfw)Q%B+nJXOxB9Gjm%%%1TeCp+y0#z6izx)tmxAjHi.B/z49W}YbjZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
