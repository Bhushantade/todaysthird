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
define( 'DB_NAME', 'todaysthird' );

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
define( 'AUTH_KEY',         'L0t8bMrK@59a#)BaRR[<HTH,ccx%>4jK=C Z H9_|R~uT&vf4RX9:1mDr{MXz4g7' );
define( 'SECURE_AUTH_KEY',  '?H-x2?;x=m>,J]{h;!~Sov%&+eX8zSw~N~RAcraYxceiiC1I?Q(L,Ybz`[70b/KN' );
define( 'LOGGED_IN_KEY',    ' SNL rJ4Uk6_nDHPuXW^!l27UJRqsO&b#=WJ^_#+J%LEJ,t5Hey{_fYHe<{Rm)F2' );
define( 'NONCE_KEY',        'RvzHC8^awn>D{-+0:-KsWXUZ8pQ@PS.DCBF[4|pX9}&o>#1r!lci_QkVj,a_.wq*' );
define( 'AUTH_SALT',        '7t*Rhd%_ym/$;6m/J(tZ0NxbiLl_<O/5{b&=hvvY%C/6:0,27p~srWVioOw#te!t' );
define( 'SECURE_AUTH_SALT', '-S|`kGmyZ,AE_)xW7onMYn OmhLz<e4wC!7/#Zc+Yn?_p|}nNM1xO&~5r.(S;fay' );
define( 'LOGGED_IN_SALT',   '@R@/aA7iT0&7`1|^]m~dWt10~9HSN/Ca=+W&;`oUT[s@glZaC)UZDv({u}q:2UiR' );
define( 'NONCE_SALT',       '9YwznU!!Sv(|fcoQ7<u8}|jP{hb+r6d4*nnf|e0?!4H29a<j(#tAg<7+M%yjHt.M' );

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
