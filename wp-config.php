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
define( 'DB_NAME', 'petshop' );

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
define( 'AUTH_KEY',         '-JSm^@VC.)yU2rP[?vD6sN_Y<@#OCX|ko8/l]^kYD{W)S60<m%t;w0-$UI+Ss>jQ' );
define( 'SECURE_AUTH_KEY',  ';p+sBW$t?/NO c:+jal>;qEYc+3DT1`R:YPdljc)X,!0?%rh}EABT<&60CAS?7Mw' );
define( 'LOGGED_IN_KEY',    'tTl^``g=jTJsYAR~`fh<bJGk,N)m|71Rd#UdL:TIe/&/.0$7WXRB%h:]Q<~eg8RC' );
define( 'NONCE_KEY',        '#iJ.:f9vk/k=Q`f2DbPOql%`ngf$8D=KwY;-m|O).rPanXtc$B`ku=mJEo((?1rM' );
define( 'AUTH_SALT',        'TI:MrHwK&O3,bp44R<Gm#dNb k&)=?x&T^q_dqJff!)3#k4 ;mH! e89N6w}MD9I' );
define( 'SECURE_AUTH_SALT', 'h% dlZ?$ua.gNVXT>S9%U.11^aCt7?CU*<lo3?R#H]/}<~hxK$<?j[}t;uqWUCKX' );
define( 'LOGGED_IN_SALT',   'M8kQ(T?b~ 5U|iUCY:xiP6t7iv (^Ga^k4ur*--xM]wq+f^)]wr</=8V.<1A^KQ]' );
define( 'NONCE_SALT',       ',rwmwI|=K^Se-1+CtC1 |=GbY5w+dBZE?&W&Cq{m)pvYu8/(8Cw*s5g  D6xV%E_' );

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
