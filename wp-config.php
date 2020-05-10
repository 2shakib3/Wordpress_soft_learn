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
define( 'DB_NAME', 'soft-learn' );

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
define( 'AUTH_KEY',         'X 9n8FDa:>Y1aE1sAOUK63Z~;.avVS&p&7*&rUDi{gru$4aB-4b^cPB1WO6<3;V/' );
define( 'SECURE_AUTH_KEY',  'ja2Bxq5G*}hVgCG*e[X,~)iPd33CK @$/hR4D`;#rj5zXi*iP(7c^kX|%Q#:7B54' );
define( 'LOGGED_IN_KEY',    '&nzk4?aKe|.xW%uIec0! L5lG|;mh|9[oTu{/d$f5;qbs$jv<:azm?x3D+q~Wr!7' );
define( 'NONCE_KEY',        'A?=RMXBH8s/$~nUu,@x,yJT4& 6Dvp!kbf:<M*B+%DLVA(jZKvL7}~t]0?Cw!^Pr' );
define( 'AUTH_SALT',        '[9XTS*e@(Np-M$4{Orbb0XEjdZ3==KD!3d*&%L:LV%[Zg&mR[t~?JJSc$roYbX~q' );
define( 'SECURE_AUTH_SALT', 'v@W|D9zSo=p,t8cpF}6XSiCApL6Rq%:PSow6.`GZT))3a)@)8pIfsD),ita59OGu' );
define( 'LOGGED_IN_SALT',   'T$}EGsnt/20Ur73$/w^Ad1j,)W+rB1X0v)x(!Mp@MHOaGwxSUr3Gc%Vs(VZ/H/d`' );
define( 'NONCE_SALT',       '7u,B==]`<i%bd@7GPi[%XGdLlAVlk4zt#e%f:cinFO`1 K{ktU_Nt{2CQ48t!viR' );

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
