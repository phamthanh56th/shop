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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         ':n)L5~<>S@$L,y;AwN,[a6a<jYY8]SyjyC? O1>x^fx(<#fG hJkV+|^<DI&2NvS' );
define( 'SECURE_AUTH_KEY',  'ZXNnL)2^Wv{X_#(Xl&%ChQu=Rh#R,}SiuQ%@~zKk8@5WZnQ_`c6}n/TvbFd?M]Yu' );
define( 'LOGGED_IN_KEY',    '%S|%<>Uw>XUl%hC%s$pYq)Ea8!4uW1R}a{D1Hdp%dV&b-q00jGj9mQ/-+YS.SHE>' );
define( 'NONCE_KEY',        '&%.x1@@~AJ?Zq,@=b{/QRyE*1a`UQg8]#VKH5ad.ON3,wcSh^X=WiJQdISTxaLXZ' );
define( 'AUTH_SALT',        'LNID%1X(2yE>>VHEof;->0jVIft[8WS~_$l}Qv#jV*9%N]ke[4qA%2ML!BCgA:(d' );
define( 'SECURE_AUTH_SALT', '/HLtw,E?8g`rqDRp0@(5P91`ji03C%bePZe~?JM^]u_=619B(SNKcvq=30ho5Cir' );
define( 'LOGGED_IN_SALT',   ']TdF3h/9tkuaLAl.gO+1-KS[F%!,hLiMnCDW}X<ttS=9sQn:I[*0e86Vjun>I%Xv' );
define( 'NONCE_SALT',       'z`&pN3eT/iNE%~g98#QzbUb@spIkC!;~.C,n,(LHbS+7 ^S{<u1ogH~AvED!tjwD' );

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
