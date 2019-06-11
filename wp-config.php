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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'veron' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'D{uVIK2#,@4tg8X8v%V5fAco~LuL=ZF3ca{ McS;$:B[^F-kxdQ2G7]qy^WpD[3!' );
define( 'SECURE_AUTH_KEY',  'JU3!P`EDu~}(EH>{xWPtgv.>~^L}N<[T?NSxh?EEu!^r4sOk_aC2[![4bx8<zZ)j' );
define( 'LOGGED_IN_KEY',    'FqPO:#@9uFqd9.%QRnnk_8$vr`xrQ]^<<f.(yr9It|=X1uV$~9j)*;hid@1mnYLo' );
define( 'NONCE_KEY',        '/AO{ym)UT%:486DCOfcpU]utE X##azlN]R}dQs bxBO`BI-U( 6y1M=Q^lbO1M|' );
define( 'AUTH_SALT',        '*z;U2ru}w].vc_Ry6ZDIZ-H*FxV0IUQ*;B|0 -&LL>n>}4Dmvg/bLR!xaYkC_]%J' );
define( 'SECURE_AUTH_SALT', 'STj_:YNCjUunsM2qcLA_Ie?A3Iw&l_/pMRA)f_0MYa@Pe flKzNWd]Uf/wIX;%#/' );
define( 'LOGGED_IN_SALT',   'T(ge8sN2hqBjN|K.%^6]k+?mC&0$U-*!:|-`CLzb|rm5]5[F2CH146oaC2CU.e)<' );
define( 'NONCE_SALT',       'GCD`xtA$+<xAku[dlt%jh<FtzAB+L2qa]e<gjty++*+|#T4.tq(zT09r2v6:-J99' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
