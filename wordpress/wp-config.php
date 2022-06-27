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
define( 'DB_NAME', 'cidev' );

/** Database username */
define( 'DB_USER', 'cidev' );

/** Database password */
define( 'DB_PASSWORD', 'E93b00K#9' );

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
define( 'AUTH_KEY',         '|l<_}?*0pujfslZ! l_UP,VZpH^Hy6$7Co@> |hJ.r.9kNp66q:pF@.+b=Mh-/20' );
define( 'SECURE_AUTH_KEY',  '`H&Ba<)q-={R[l`#J_ U?9V.OpS[Q`?x*5^Vwl{kLNF{OpnalVN7Rq2wF6wLqr0,' );
define( 'LOGGED_IN_KEY',    'u#V[Q8W61-zqv{?SVHAdK+gWO?<p0D-!5`yYKoN%e?c/u$nAj@esEb(<,`1sFN$o' );
define( 'NONCE_KEY',        'q8kP` CwCquQq7J3n_jTR4ax`PJC?g/D1$[}DpZGu2]$|or)b~*4 XW(BG9E%B@`' );
define( 'AUTH_SALT',        ']-cLfh*FFNUI<bi b_|9#UvmdU:?8yl S75R8|OJ0`G?~SZci6K3u*!?[Tdg=:]v' );
define( 'SECURE_AUTH_SALT', '4&tWBpec?js~,P%~<eK9}v8wLpZ3(Ym#g?Cqp)_*:oN- F;g2{(jm#2~*]v2p`$A' );
define( 'LOGGED_IN_SALT',   '>>}xHp,GnmRf.G9l67i}uOFAZV6TC0vT$)/EH3W,&Ba0Whg)/62Qkebq7!g1(G4^' );
define( 'NONCE_SALT',       'ZdMp}6Z+h2NO5&5qU+A3mE9?n/cE5AyWJ<lBcQwfR9pGkw<t#W)LekS[Pmc8f6xq' );

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
