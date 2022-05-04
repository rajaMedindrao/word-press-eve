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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', '172.22.0.1:3306' );

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
define( 'AUTH_KEY',         'v5/C.W8ro#/PV#1A(bH5=8hfu9{W|.0j-&<fm7KMJd|@85w31lQSi8{.$ $Mjsc6' );
define( 'SECURE_AUTH_KEY',  'G#f a$_C-9hlvD@rnY%ap45V}gdZ}51`0RQ3lgaQy<oaOpYVFhSWDy0z^]^<aZn5' );
define( 'LOGGED_IN_KEY',    '-_ykb=`eW`(%;Dmx[pnJWb68gJD-y>6QRn:kL@xJXO!vr6F^^7sZk<pD%)VbFh0A' );
define( 'NONCE_KEY',        'nI!M4wW_^oUhsIR.~wfeXWJC3MPt~Tt,pOkXU$PLrR>oPY<DCgy-91!<^74;|hFK' );
define( 'AUTH_SALT',        'y`n-VlU@0CzvKCF@0),2%apHMWAQ*Kch}DTz;[ -S+0A ILjReuQW~C=8Q:H{043' );
define( 'SECURE_AUTH_SALT', 'WyHOi2<+jUbZL=,G7pHWfyV^OjP#!m/Ynplp3)U!$q;ZqXE2^PO6Vz+eOvw`#lmu' );
define( 'LOGGED_IN_SALT',   'Q6B nE{G^-CAwN3KH_^b^)~tkZ6xvLKCA%k(Eo{m?hHH+i;bvH7N)B{vU^_E $M?' );
define( 'NONCE_SALT',       'X]DjIj<-+!!DO:3xdO+$mUa9:Ouw.u$Y%{f}%9H)8)@}-_3rw=Lb~&5hBw-|E) &' );

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
