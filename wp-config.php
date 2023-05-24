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
define( 'DB_NAME', 'myfirstdb' );

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
define( 'AUTH_KEY',         'C^FOKoJdSkat$3t~td#o8BKH]:EPg:Igh1xH}2al-D%=*nm(otR]`J_ce%57F^)^' );
define( 'SECURE_AUTH_KEY',  'dZf 550nG8WI!)?#gdy>:{]~2n8gv*DU W{n_bCKd7Q)xn*j7*&=9I:Nv!7j+4XY' );
define( 'LOGGED_IN_KEY',    '6~96Ge1snBw%@_N)L9a^l.b|ae414Nnj!AVpxU,&,:GFAh*8ucyf%mNcKgB4MMhD' );
define( 'NONCE_KEY',        '3@neEa(*DfUEBjbfr$ qZQ^{6=0w74sRqN.,<.p8z`2tk1*s0-aA?naj<as~p7UR' );
define( 'AUTH_SALT',        'j`M1MXIKkFchq;o2_|&2=-a Ba{u=8ZkM]&toXwO<w_`A~,{18RSi&)))VImL>~%' );
define( 'SECURE_AUTH_SALT', 'NB?2t%9lJm>GFi)Pp>MD_Q JSYGQth3f1ka#+oo*m}cvC#FtfQkl:nTtKZH2@+e}' );
define( 'LOGGED_IN_SALT',   'h/hn5L9CIA:>j7B32(r}0c>D =nlb+A~>tm.-K-fca4v$fO91^_=c3$TohtSKOJ&' );
define( 'NONCE_SALT',       'qR(bAu(O^EWo09qEKUK?dTd1UC)J9t$xd]rSZh8XeHZZ[!wxc#3^}D_vw)A<xO>b' );

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
