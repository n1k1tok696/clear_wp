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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'strongPassword' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         ',qyS[CPv=4N@dddL^Ky`fVy>3]@f&/nT}=CXv0G8!`$p$L^x2([!QI9{u</&QHeD' );
define( 'SECURE_AUTH_KEY',  'r#7uS|O+JL0zt0/.u{+Bgc]xxmgK7qK#C1@4lm%FFIjE=M|;k#QvQSms?[BDC8HD' );
define( 'LOGGED_IN_KEY',    '73be{ [w4YrT`z_JAeRu|^xMhtc[q[_J3u])T=GQlz3l}v1%X5lV2:2OfMZb+/Yh' );
define( 'NONCE_KEY',        'w`_PKl9O*RZ5fpoOZY$?rQR?ifo|uH2x.2dR%}#T0Plmta 7jF6rF8r{#].aXJ|!' );
define( 'AUTH_SALT',        'Sm6~%N,q#0`Q37R$Y3H!tY{-J=ZLW;HslmlI*E(ct`w5{4!j~f4V1uI`pK@pD {&' );
define( 'SECURE_AUTH_SALT', 'c7%Y<#<2uLaHsHpt,qny0c %?59cd/N/vEqAqW(z)dw>[H0HB..Z9 _d(M_oz]&w' );
define( 'LOGGED_IN_SALT',   ' h*b1,TUx(q+nip{OwSNV+K]H8AZV`gN}Bl3C1VA?gShMxlyH*09nJFWZ8sjoP)@' );
define( 'NONCE_SALT',       'Sv#Ot^b`W7~jZ!=,$If50/:0L ?^^9,F&ljG#,ib}%/NY4wgx@l.pt]1&QpJIbZ5' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
