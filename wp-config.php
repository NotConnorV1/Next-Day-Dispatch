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
define( 'DB_NAME', 'next_day_dispatch' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'homomiller1' );

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
define( 'AUTH_KEY',         '#X1`iK#^v=sS${eZU5*y(O18O4(f9eo(2g-~#auwzPc)Tr}C01y-v(1,s>(X@6Q5' );
define( 'SECURE_AUTH_KEY',  'Lre2[zpB8uEZV%qqitiF_:]f^3Sx}?FSk>6lST-8?q~TO$ [LaOT~7mczg:&uuVP' );
define( 'LOGGED_IN_KEY',    'M,)3PWeT}+%OWK9j2ubt<ueaEjvEE~`HG#QzO;R93aSWY-~KI=cC@a%AE6lZB#Lp' );
define( 'NONCE_KEY',        'Y80~o*:AzQw[/.BNYHQU<*gk8QWttkNjMpNsF5[KH}9i`;}Y,W z}%=bNPfI%J*U' );
define( 'AUTH_SALT',        'JOvodNLbO`kIM]h4MiNMZ8g!ZKSJ{|?doqY+h~iqHf/H B<0D2zu2}RW,zb3%eBw' );
define( 'SECURE_AUTH_SALT', 'CH-ukIYoAFEHrHz_{o4U>}qExEoh,q|-M`?2d~b%7QyA3q7./q&Yl#,/2DC4Td%R' );
define( 'LOGGED_IN_SALT',   '0ka}wnYz )_h99=D2GX:ng7?8)wPeBvIxXg!/>AtLOl$C_By^*^}P?gpfy0u(xAS' );
define( 'NONCE_SALT',       '+[)j9XJ}!xYs,9fGV7]|DYy+8U!-fX&xKj$?bpL$P$G&[s1mf^MDwt*~yo{[j2!9' );

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
