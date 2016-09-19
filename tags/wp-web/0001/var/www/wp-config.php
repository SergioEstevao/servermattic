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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'qNDKAe6fV53h');

/** MySQL hostname */
define('DB_HOST', 'db1.g1.gm.a8c.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o|P`Ym:CL-MELys8be;BE,p*fDk^7kPf_SENx6;3!T}Q4]3eT&Gs#<b Ze?2~L_}');
define('SECURE_AUTH_KEY',  'eu]tT:o5NtYpEV@6Gd9qo0F_|>Mv-ul?+2r4) z PceaGTK;({^07lAbBmDWlB3X');
define('LOGGED_IN_KEY',    'AsM)U7?;S3TDsJ<aqC6am<TFM;O)2u(~ >`!,1>.S=E{FkGzlEOss6;z{%4/8Cv@');
define('NONCE_KEY',        'R^fUj=X^T46ur-4{@)u_IOzox[@zqlNFyH.9C8_[Q]/I*w({U~ 9UM>gH[g9R>M(');
define('AUTH_SALT',        'NqgQlO.a7K#ee&>En%|S?ld{ZIo85fTLY9K@vAsvXuGQY5,T&XNbRIQV9o0M(Ug<');
define('SECURE_AUTH_SALT', 'xB./Mo>!2:Fl@@#sOo-Y{l4<pBMPX/-Rn@NIF]-0 d(>N&Af}EFbQ>=rVz5g=IWP');
define('LOGGED_IN_SALT',   '@kaWX9m5zXPu4O#wQE:<0|Iw=pZatNgv(7~Nb`}2s*c(`c+BmHLhB%qgJMG[.eP~');
define('NONCE_SALT',       '^rkONw)1.2Xyu@f5w6]/;.r%r2!y621IQHb`$Je:QRP|:y<hs5Q0>D(r~|Jd)w,V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
