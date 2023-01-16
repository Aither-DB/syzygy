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
define( 'DB_NAME', 'syzygy' );

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
define( 'AUTH_KEY',         'W,w7,KAP9#e~4$b0|)%6>b)8:a{w7=*t<5U%X9/+(gGA-5x=1L.65yYfqRqW%[TY' );
define( 'SECURE_AUTH_KEY',  'Jhk?9On7O8$tt-^!G~=e?J8QCbYX;8DGH^H@SM1M!*uxj3WH~-{|b!x#._8%q{q{' );
define( 'LOGGED_IN_KEY',    '/-dPdX=4a;]@54~o6Q@$5DNQ}1:Krfb4=/B)k9c6742CN[1BbF1c4qB:ORv/hPyO' );
define( 'NONCE_KEY',        '.=N s[P^GtwoYsa`:]o2|Ih;<^q3Dh_=.(Djre+qNtp`4gn?6-E{_eoxeiwm+e{<' );
define( 'AUTH_SALT',        'd@DNjr1.K~LeK)B6}aV;:Ni{ke9&$!s7jHrXp6%nW,fKLoE$Np8,MLKGU-=^|s2b' );
define( 'SECURE_AUTH_SALT', 'C)4y4@oky7U-~OMiZY0ZCZ`a)>*I-8dM*{CzuCG^n%#!.!<Fbd]H,+H3rcr9u{ s' );
define( 'LOGGED_IN_SALT',   'jV i<Y9Yr+%.FS)G;5;<VMv~8FyBz8+Cu(6K>{t|H2D>KC-?&_JMUS)xXj,/:TyO' );
define( 'NONCE_SALT',       '_J:]U4=|8EQ5)ZYzl#lBe`};rh;nskA*p7$D2B`YJ)O4,$xg$x&M^LXQdWDcTkOa' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
