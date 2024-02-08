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
define( 'DB_NAME', 'easy-way_db' );

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
define( 'AUTH_KEY',         'x!*7R%+RmO_nM>P<{YH,Z-SaG[<B0<U6lWc_5hJQTcQbe6)J/V0~5[jg9C%~U~ d' );
define( 'SECURE_AUTH_KEY',  'P,)GAcGM1<%-q30:wxsH,FN$.>F$0 ly:Tp$52G1sA:C0Gs0(9o]./AE,I&!>z! ' );
define( 'LOGGED_IN_KEY',    'F9@Cf:nu)dJ~1XY>%hM@@+xJZR5ueF.Hjk>WnVBck3<OM dd?sI.?FFyu/8>s8U5' );
define( 'NONCE_KEY',        '^&b3DANmgc8];eiSYt`,w^gw!`Hcp1**8lO4a|bI*cweZx4z*};6Uv! )_mHMy2x' );
define( 'AUTH_SALT',        '#DM%st6)%v&vl#9R/h7z hX@_lpPZvwqn[d{F^@WQ^$:LMl@oS{JgmRO|X8}8+St' );
define( 'SECURE_AUTH_SALT', 'qRrMN9:^OLys>eBC^F,9L]rRguK*O_ d)dU!HOV?U4$/cYpPzZ6/8?6wjCB<^L1Y' );
define( 'LOGGED_IN_SALT',   'G-o+7O+AM[>7k<$[6TWiUZ&f8{zi<^0y9U3TZpt%~GMI;96y<D7PYk=-TQ1;%Lb-' );
define( 'NONCE_SALT',       'Cz0|wTHy_t#m&7z[^{qD<Jxy3$Z{EM~Eaf> tQsG/o;H)t[wL(u)b#Me%j0n7jeI' );

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
