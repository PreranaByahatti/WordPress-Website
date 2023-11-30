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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'Prerana' );

/** Database password */
define( 'DB_PASSWORD', 'Prerana05$' );

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
define( 'AUTH_KEY',         'vfyRDm_#`F5*1bW|j<$|PyR=!~aBW0n* VkE=^0/`kCa^G$*:LBVVm;G=n8Ds)i)' );
define( 'SECURE_AUTH_KEY',  'hzF98|n.D~AW$v?^ OVmI~d`APIP`=&clGs<n]Z5-&PN_<mM}&<IArHc;?>Nt5%=' );
define( 'LOGGED_IN_KEY',    '@^?V,=4~/}]HPe4s`I)ntm+I*HCYI-:C#+zjY%e+M$z$>6/z~gna`g1>kvE_ q`O' );
define( 'NONCE_KEY',        'BL =NpgY@rcQy6^<)Cl!6-p*3i-hF{Ws*af]9o4u>c~Hea,sX!Dgg*[l^CJ3l,=_' );
define( 'AUTH_SALT',        'qnZk<D,Am;yfJ -WIp$05zzBAcfFUm!#%$~p6s(_-B|AeIf6WPily7%L-S|yCI)r' );
define( 'SECURE_AUTH_SALT', '48,6w%m~T?7=.tHVIRu vORT~h=TjKwKjaTx+FIBe`io@s1s&SCXH,IF>_t]$BOd' );
define( 'LOGGED_IN_SALT',   '4wUq$O=A # BGK%uDE!6f$<HfD+(a>LE{S$IreEfgtLq(el>C=u`R[b)fcrN~6!e' );
define( 'NONCE_SALT',       'QETfD:O`wwD-3;n3uLbMu86kGrA~M+hvaDnX(LBvshZltL}1* Kr%>s~6lw7P5mi' );

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
