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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '_*k-*bz]>3+{?6F*fB(MX4>liRjNu!d#Q8s&RQckzfx1BM{6b6<xrXV*N0/Mz]43' );
define( 'SECURE_AUTH_KEY',  '2G,y9adEM<O`((U8DS gFJ3,KRQrLqg;[%^%|fy&VA{F@-gv_>F}>dsH!; `lz_s' );
define( 'LOGGED_IN_KEY',    '8B1tV$./fqboiT^V|H+#TK&yy?K1N>1/X0C^,63u/iR* KvGH`T92v}{3Vwc9~Y}' );
define( 'NONCE_KEY',        '>v5S`5BB42)eSVCphxwq8Jx[SfA@j)}00b6+10 c=>y{Dv+(Kc;}Vw=r]ysRs_+q' );
define( 'AUTH_SALT',        '$?IG#:/1|,_tiV}/yxqfb0_ %dqHEsTY$N)F3jros0gDM<um.>mXw^`1eE[v:Z.|' );
define( 'SECURE_AUTH_SALT', 'q6OTuY=sp*dDdJtKmOZ%C)[8~zfEK$)]f= <8p7/ =1BjNq9fZn:+%f<kv8Q<J2W' );
define( 'LOGGED_IN_SALT',   '#[! #~HIm?A&Hv/h`1+s87cYR0A-3o^GP&};]uDM3U:$e=1!.^-1TVXnwaG@S0Gn' );
define( 'NONCE_SALT',       '#j7f;,&!/?CH^!n*lZF|cfTqEku(0<8[)_B`4AEphDB~l6rXa8C28H63[8RnVe4_' );

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
