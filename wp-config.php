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
define( 'DB_NAME', 'timeking' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

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
define( 'AUTH_KEY',         '[]%/{7V&%#*[B[a`De?wZPL,d#=_Y|US(R7,P8);6`C`y@qX1VI2[:?qt y6D{0I' );
define( 'SECURE_AUTH_KEY',  'OWals2?LLpF8A&iVOVF_2ia~$5vV>(T&/4-W}nt{d/!;s,mnDbh{):@sZTWr00QM' );
define( 'LOGGED_IN_KEY',    'YxFX?6jf7_={~zkW.[AiVRD)3a#W<E>&k$xH6Nl1Y1]m??ZJww`0PdZne$3Q`* 3' );
define( 'NONCE_KEY',        '[~Xj;zdQp3&@vl6SOX#z+MCNnncAdvl8g<+<gzN-lx E JrH)%j5H*@fL!Zr&&au' );
define( 'AUTH_SALT',        'dZ]Y/Yw%S3$42N0sQ<5`EcWPT>13{EDROh`hhA3%S>_A}_L~I?(~dCBt,YXdBqBy' );
define( 'SECURE_AUTH_SALT', 'ExA];J;<EMYz_e^=reO?3G1%I0h!+x!?PWwPF)#V{b.krjKz5(|O~L>!Kl>ln)_X' );
define( 'LOGGED_IN_SALT',   ',ESQG&++d<5`GSg+A2-{3<*KoFc$oqE<J;n 1Jq(`{*i/aYbws8WZGeB&k@pt4BQ' );
define( 'NONCE_SALT',       'o1UqOtQ*St(<l}#!YNhTmFS*!YTaM!HhYfUAPL`,<Tm/onWo7({m50C:Wba|okG2' );

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
