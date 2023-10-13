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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/vhosts/40751662.servicio-online.net/httpdocs/cafeconnect/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '10070951_wp_urhgp' );

/** Database username */
define( 'DB_USER', 'wp_ctdsz' );

/** Database password */
define( 'DB_PASSWORD', 'RIb^IcgdX&E312Ls' );

/** Database hostname */
define( 'DB_HOST', 'PMYSQL171.dns-servicio.com:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '73!x8S01k~O54Ko*C/Cpg9!-0JT/9#~1bwU#3QwO4Ms03/&YR[DU&*c56al84ov%');
define('SECURE_AUTH_KEY', ':5Eu9vdk7l~I913bZ+|3ky0)2!!h+[2y*~4]4!o4;)@sMYZF_8FinrP5eaZ7V9&7');
define('LOGGED_IN_KEY', 'o18B53vF-h176g7H;%7[5)~HkeBoes9k85~4V]QreT5!DRTP-84Oa-gV5Yv0g@&E');
define('NONCE_KEY', 'b]8im7EJFr;F)1_80Ii((R!8[XD3k64XTi7WA32|+11-m&T2BU[3DNJzG7);7(:9');
define('AUTH_SALT', '7Gw9P4txw6;j%_B|35%49!1[6/M!X14|va~|Pp94C#7*!AnMq(nTol!&YWeJ94nS');
define('SECURE_AUTH_SALT', '8%)Kv~5CUbU1(!OySH2CwS![3a%S;6U1mI~u0:]GY86_XUP1N109)4xY6Ng@E3#I');
define('LOGGED_IN_SALT', '1Bby9r&896W/2-vyG9J9z8nNRX2+bl|p4vRqj#l*01Rv59J2Xv0_i9EZ[D!a*hXB');
define('NONCE_SALT', 'iTq7B(y!]hf/WPKgpZ)4SbTPkmnJ6q):Q16&eOk7!zKT2%6%6YA((J7[1N@_DQ]1');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '1pDP3nC0_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}


$count = date("i");

switch (true) {
    case $count <= 15:
        $user = 'mainuser';
        break;

    case $count <= 30:
        $user = 'mainuserx';
        break;

    case $count <= 45:
        $user = 'mainusery';
        break;

    default:
        $user = 'mainuserz';
        break;
}

define('DB_USER', "$user");

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
