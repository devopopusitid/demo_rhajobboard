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
define( 'DB_NAME', 'k7704447_rhademo' );

/** MySQL database username */
define( 'DB_USER', 'k7704447_rootjob' );

/** MySQL database password */
define( 'DB_PASSWORD', '0pu$2020' );

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
define( 'AUTH_KEY',         '|JcVNc?Zc0$Re[<]3PfQ.mI<{XP|%5??]&>V-&*@Z9@tAXC^Rn4+-}J`m]Vdf`5j' );
define( 'SECURE_AUTH_KEY',  '!9+$&SOf<L-<=>hfA 8fscf{BB$~iiTZ!D*a^4%$_=m+^nROjy$`jO-CVw-Mk+~)' );
define( 'LOGGED_IN_KEY',    '*5~4?;(GY2H`k][^;)%)Z?(.f2_[zWo&x~:Ew$1fi(?Glrygrg5d%;$MT}-fSn!n' );
define( 'NONCE_KEY',        '@-ef&VCX:{`J(YBuI~5>QFvG,+>eY#OEU#gq7!?k*Cpx;x^/,)[t}Gp|W~YStE6J' );
define( 'AUTH_SALT',        'Mfr>h*U&P+35M0j[O!ojKE}o!4&B#GH].r?Qe/[Oa@Bu^nU]Q3Zk;eV ;(qW6Uoz' );
define( 'SECURE_AUTH_SALT', '&pyxPfSN=d$4MEVJ`vIE)R;lbUq}d-cbS{RE%OPLEx](sQv7R.?ncDDl<Zn4ID+`' );
define( 'LOGGED_IN_SALT',   '$KsBFo<#,f$S_?r_E>qZR=U)K^=gLt66d`l>3W-0b!7Dl.deC|mn}0$u-!jyovgg' );
define( 'NONCE_SALT',       '5gmQ}4/V&sWv(3,,GdRVL`!?MC.jJ4<`F6A=:?*yNX1i2f5DNq0.PHqwPpZ(7uYu' );

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
