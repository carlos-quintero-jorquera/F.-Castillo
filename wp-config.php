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
define( 'DB_NAME', 'heroku_4e340b3b1708944' );

/** MySQL database username */
define( 'DB_USER', 'b09486720f07d7' );

/** MySQL database password */
define( 'DB_PASSWORD', '5c3818b6' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-east-02.cleardb.com/heroku_4e340b3b1708944' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'pb|-5VO+swvNCBDW,K@s(,CQl~Cgh2J03-`uw0GwRh-MqFC=ZO>]Nb5A7c$Yw[$4' );
define( 'SECURE_AUTH_KEY',  'FM_)d:,+h5FQ@D!s#O_!dPRP?O[,6ED/ &olV$$uvB oc&<:oRx6|[]oiyLn#C%:' );
define( 'LOGGED_IN_KEY',    'gu]@m.({vL.gGFd|,i]b`Fb0,8RQ&xfK;h%DeLShj^PHZpJKuC^FBCf<a0ZRWMOV' );
define( 'NONCE_KEY',        'h1OFynN8>4);rY[qC7Q:Eyz STE}x[3S)]f$YQnr-^&aLVJ>CS=LPa)s*vV61C%r' );
define( 'AUTH_SALT',        '-;$TG}}Y.>+8g%wJX?&=W^JtYU+WPb}|g9`n3b})VzT9wFM5fLE#5XAn.9ws98Tp' );
define( 'SECURE_AUTH_SALT', '%-#7{Y|c_F7[zlNNpaDZ:@@o{GxBZx,^*Ko&O<+!V^W4Kq8hPCvb6}-gpd*@K-![' );
define( 'LOGGED_IN_SALT',   'NlhGIjLW$nuMM:9!3 A0~$pHQ) [0tX}xhK<p]T,bh#<G|?`hDzaqZC#4izdf6sr' );
define( 'NONCE_SALT',       'WKkPGj_/%j:NIj<bqiI8Gg[-|Pns,S_.!L$Je_W`k/7h!a0|BV94crC,lDf>wfCq' );

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
