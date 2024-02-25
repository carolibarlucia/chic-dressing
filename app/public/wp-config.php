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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          's`Nx,w(%mz6v@=?4%/5P,]FYs4v*oiA@x?U4}+W+>.v,F_XlOg?c9u0?7%M8(+mK' );
define( 'SECURE_AUTH_KEY',   '3`1)UwVFn%`KS$aQxW!QQLRM]z/]1Z|a1f0A6 u7sN=HB}.~{^^W=|07Gojv#J0W' );
define( 'LOGGED_IN_KEY',     'HuE/65]ze&X0n_qjVV$M&OO~So2UEyZflC%*VB?Rm}rm$uR$h R6<h`$]J!DSsav' );
define( 'NONCE_KEY',         '1 :Li*pk(>V|n*,X5Z9L-);I3=tr>=q~Ru6~<SiuUTO`l~EDv:8[QkdaymM9b_[=' );
define( 'AUTH_SALT',         'y[YgwMWpffR{[b.3$/_,eY.h5^YK@{9&gZNCXj=OH>>]xB4LEd&z-)kcB:t= Pvm' );
define( 'SECURE_AUTH_SALT',  '=2a%=wQYy/@;#]?QtZ_E7;~ir:[x;Tc?p:dyv;^)!*:2 UH):KQutE=H&re/q q!' );
define( 'LOGGED_IN_SALT',    'u;5hK31e.2DK>5vX95/`i^dpF)7F;HXh4<HR_eljS:7:*/7K4-C7K-@teVOS5fqV' );
define( 'NONCE_SALT',        '7|;#TBRP*/?/_Ee14ItQC*E5{gwdi$:=}CxpUd):y#FSq0>!_t4Svw;!A>7c7qmT' );
define( 'WP_CACHE_KEY_SALT', 'vv78-;QPOqQ9qVUFo/:Nvy<Cb7XxwKjpBW5j9W?s<oMaOnXbbET&R=Pf%aLG}Vzp' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
