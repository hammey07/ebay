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
define( 'DB_NAME', 'ebaydb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'X?;5k5/$!U;K2D{Zb-&M09pj><?0x+|nwi_(biB0,9Xy6q+P:K.jUHcB<Y`!l9HU' );
define( 'SECURE_AUTH_KEY',  '] tW87Hw9c5d%zv/SY-*hh:) 8AYQ{>koH#M55&m$%c<`KJP5/Pzx^nLLz~FWdkG' );
define( 'LOGGED_IN_KEY',    'N^+-i2D_Dv+NP9i147m0x?Zf;Q+Ih{|T u~J(y^}yW;wj|2a{%p3;`WauolNaGa|' );
define( 'NONCE_KEY',        '!T[n1*$ivr`q@c=jRlo.nJaYB^UF{xZM6O*nA^YIIGfGp?g(<&XXd|*Ej1T^^2Lf' );
define( 'AUTH_SALT',        '2I-iv`[}}a`l}w5G3sUpC?|c7zsr3rE/[b mmN@!LVz$A#?~SLI/%QnE}trl=&C#' );
define( 'SECURE_AUTH_SALT', '(@fYgewRO/OpdN+WB%vHX2pdFVKuf^D^3+E7%$l Qi[BE0ELVzp# 6|CNp@7>w b' );
define( 'LOGGED_IN_SALT',   'B`}m,3oy>EEKg@<PM7igMW-V^5bO0~4@X&f7r1+mHw]We gGyu)O3-d`muO(nyom' );
define( 'NONCE_SALT',       'h2f=:6E/6)BJUGviSY}km;xE2q/O~RQK#L%se%[,kS!3[%vtz~0Q]Jl* TwzjiMm' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
