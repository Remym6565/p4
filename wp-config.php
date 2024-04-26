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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'pdlbnaDu)xx7O^_yyK]ME`[c`eCXqxPZtgailv;r~/99IP#%YlHxK&@Z[n[>?rnC' );
define( 'SECURE_AUTH_KEY',   '.0!f|?[Tt8f<MiXmroqjTPkUJ)kEIgi6V{OY3z}IbF9aMHG<vh4Ok9,|QXFB)JvS' );
define( 'LOGGED_IN_KEY',     'SWuFe:Tq ]u /4=PvJ$q5Zd?2o*Y!7_h~*Bgl)4X$jY1A1Z%jud!g`3osP_s>:+3' );
define( 'NONCE_KEY',         'iY=ez9:_nUnY5.6Kbc<:0#,)p=|^T-Os+tL#V+zVDTRRTtcei]4nvE0^^s:mvWD#' );
define( 'AUTH_SALT',         'm!A|k6;d&h[6t96rUiyBA}TXC=~2?c3,&!EP|VSVg^m6G+@YtyNd{`V{LuADsJrW' );
define( 'SECURE_AUTH_SALT',  '3j!(xQH C&-%<M8YvP=PbkC$Cx,nbr{843-aaig/B38=w1puB^$61%J!cM@X8S 9' );
define( 'LOGGED_IN_SALT',    ',Z/qi4O^2?`5s!QQZz;AT*&CaQ4z$b%@;XP48AHDu)+5gHFrh<OJA(&&Y>BTA&#d' );
define( 'NONCE_SALT',        'NXB|H6EOoc<G{`^Gfd$F>%lk>(y|q8>$o[4 F_dOag64s+~XFy_poT*t,-@L^mzE' );
define( 'WP_CACHE_KEY_SALT', 'LE8xd=BijMB6YeenLFVC88mPAjF*`Lv.EV]trGHfTj6o;Sqg<`-XV{I~/*&k(s3b' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
