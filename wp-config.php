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
define( 'DB_NAME', 'junecreative' );

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
define( 'AUTH_KEY',         'cLV~)6`(rk0s-`DfnxWE-5>Fv@=&;W]`o{<qx1[9/dhULs+:|:9Q^m)n@*%Dr>Uq' );
define( 'SECURE_AUTH_KEY',  '/XY[J|-_},M~)1v0xFXF[Qc4>~>i|_Pk=90Wl SDI;jlS0(h<,ue=VmuDoU`pAZW' );
define( 'LOGGED_IN_KEY',    '1ZbR$BTS$IQiM?kQx%+`l5<!&  S+sb7S(l,|+V-(-*HX2.Unk,WXDAW{Jt/r{4c' );
define( 'NONCE_KEY',        '>@4#L+n4x%l6auc`}.u`8}4>c(3D}gI.oP]K3M!>sF)^}gF?[pY$;KhBzN>R /Ld' );
define( 'AUTH_SALT',        'C*n+9i/d4U{$B~I4;2k)*2r9F#+4m7M]Berur01~V~pjDXvDkzPLi8*o<c5S78%u' );
define( 'SECURE_AUTH_SALT', 'pRbK?s#7tT)oi7z;eCZ5rTwmSVb*E*7p2}c1b%CG5ViHk@m$x.-x?0hl@%>i[4-V' );
define( 'LOGGED_IN_SALT',   '#1]F=>,038F(F!CFFi}<,%$jkITkponiOdbFhT+vLv3Rn0AS?%U>Ve)zJD[a,wJ.' );
define( 'NONCE_SALT',       'EJy&2%[4=kmjZy?/O0A&3Nz%@tRR)^;e]hKM /@e,q23#-^g%/XDHzD80FL)JqbM' );

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
