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


// production_server is where wp-admin is accessible
$public_url         = 'http://localhost:8001';
$production_server     = 'http://localhost:8001';

// Settings for 
$_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_HOST'];
$_SERVER['REQUEST_URI'] = str_replace("wordpress", "home",$_SERVER['REQUEST_URI']);

// Use this if WP app is present behind a reverse proxy
define( 'WP_SITEURL', "$production_server" );
define( 'WP_HOME', $public_url );   


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',         ',R9u<JD+nr::Xa(K/>13nubmc+Bq|x|Ru$hd^#ufuC?h21R|Qbeycr0I3[dWgiR+' );
define( 'SECURE_AUTH_KEY',  '-G0<)}O-t01}<@/[Caclk,zH3y$9sL)1-L2k4~%YO?q|P?9z+X%tF}TXomw5)BVT' );
define( 'LOGGED_IN_KEY',    'Dnp3DEg-iRW`GSad[Dp%FURpA7cm3I/MDLT444%gtSga&8]l6]:2o46IPHL^KpmK' );
define( 'NONCE_KEY',        ')&?<hb]}Qy7<LxO1k4u>o9V?O3X/yLeo{qh}lHd1QvY1|*rf7EC2%?r^_rCo [.e' );
define( 'AUTH_SALT',        'fJG[[MiLs{Dz]}dm;]%y9=ybj[QSi%z9z>1trt1q!KuD!U$|OLfxO-t_W9vKYlQ+' );
define( 'SECURE_AUTH_SALT', '$mtv$~5qcI5e_kCV%~A~?!Tm)z|1(6)fbvaQHiHU!<?zp4/V^orshbY3LSF3uOHZ' );
define( 'LOGGED_IN_SALT',   'vrSz~xwFy]w|Y;l4Elb02zFO8g0zagX-*RGO!pUVkIQj4yG|wM<geO_bMKr4h{97' );
define( 'NONCE_SALT',       'k:8aWkjAJb./A-im>[{vFH{20MW|#fhL)1@q8IVO:y1$~R{VTal4oG2Z v:Q+7of' );

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
