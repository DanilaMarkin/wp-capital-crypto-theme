<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'capital-crypto' );

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
define( 'AUTH_KEY',         'x^U<>C%$78/dIY@$=Z:lnXT4U-j*ujidg|FDWai4Marab|?W_;a1(8,PU8CYG`Sc' );
define( 'SECURE_AUTH_KEY',  '2eTy1k1a$[LW)r $v^!fs?6N!:<@lOD)S%52QfD5r%8<Z_W3(#n=lB#3n),ru?79' );
define( 'LOGGED_IN_KEY',    '#V8@;osYk:qz{zGm6X:!l Db.Sj&]dO,+gc}Z*9fP<[PcyR[!0x5T?ffsI#xveOM' );
define( 'NONCE_KEY',        'RIBP]uFuM:r_$RHK){]t5A&m)L+;2.,_PZp3xw:|]0!V5+#akiq9,WvV*|DY}Ui2' );
define( 'AUTH_SALT',        '!$vhqtcA3<T9Qm!T1CQ-$SB<$hFPLc`y9rKf]~G,:&prY~hJICI4yaP3K-##?3Sz' );
define( 'SECURE_AUTH_SALT', '(VEI8riYeVqXK{A|MwS$tz)UhgNQF-gmZs~]LWslt#CI7(BRNa{nvLn$6OIWNm7v' );
define( 'LOGGED_IN_SALT',   'oaWHb/i7wCWvUza&*Gbp9+Okrv~Q>[.Eeu)~t]qld,0H}kqr13L#Z-aXG%GzgJ2H' );
define( 'NONCE_SALT',       '7VV8YA}&u@P24*2LDg-}ret)1t-^zMa-@JR/,8O_oOIA$+&(O]n$GX/]a8S+bvY}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
