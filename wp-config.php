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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'c*JH5G,SDkmT&o8~RvG|^:!UUvQ8PzPGx[bQrx#6JYw!-H;3vOhr6.G]w)cD;=Ft' );
define( 'SECURE_AUTH_KEY',  'h(yQDsSE]{513|XgY&%(@i2n_U_/PmcSBa[/i@i$49!U Z3 _Sw.i?%HU(N%:jo5' );
define( 'LOGGED_IN_KEY',    'k-I-TjZIZu.#yl6Lcpk;_?Kh5^orJ1XI)/<AXkEs]b]}|a/NU^D|!j(K/Gr;+gpg' );
define( 'NONCE_KEY',        'xV|W^D=Qy1TEcF(RpM7A,EteUe*_Bn^}mH:e1LtA6twNDVitY*.lIl1$Ch45JrsS' );
define( 'AUTH_SALT',        'Pk2Vs ]K+S=_Hpga,nvMr AwnSO`DY10 =.(RPZ(RU[wYfMl,/S3d_MwGrT!rcFZ' );
define( 'SECURE_AUTH_SALT', 't3~h]dM1XBbK)qyc3/lsCvJ~l&Vo2p~?rU z(:-I^AX9ykkM>zYplQ9tbDoTX4SC' );
define( 'LOGGED_IN_SALT',   'nUWJkA%jI >rJQ.T^_*-`1dZWtpl}/MnWSs`jWS;*mxojYWaa#I`Qm%dpUha~mki' );
define( 'NONCE_SALT',       'oW@>Bb+OSWzJ1zq[Z?pE,5v}PctlucTF7HgcEgv?#P,~rR<e18Y|5pbAj[2Sc9Tx' );

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
