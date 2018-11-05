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
define('DB_NAME', 'dalePortfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'xspToDh/.I2D^^Xj;%S`/RF4#$+:^)4Zh[vWbqN!^iKN/J2/|l _1?R.l3$F2_Ho');
define('SECURE_AUTH_KEY',  'sa6+uHQ*cQUK&*_;xGj}rj!-1)Pl~u7{OHN*Z|AX4XDI@pA^]FAZ1%;TW%O9h;=+');
define('LOGGED_IN_KEY',    '(V:w4E}KmViQ@c6*Wm-hYA=*83DJ1g2`lK;7oNwe3&.0W/tw;YF8knP@)YF{i8%e');
define('NONCE_KEY',        'fP`(7u80 +++-D9LC%-&V?xJ6Go_g}P2&ai<=gFQ2:Fs|*p.z4Hp!6HF`_aKstTt');
define('AUTH_SALT',        'Hy76f|ge1J@I[bP=H:]at4Aw 7-q!,6R)7WQF2#EZj&=& ~4MEF=@nVa@@rCWM`i');
define('SECURE_AUTH_SALT', 'RjtqD^,XhYoE{xoQ6:>rZ/m<UuA=$(u~DZg0?)t`.L/4M4eN.cbqYlJ105tY*rgW');
define('LOGGED_IN_SALT',   'x=UkF}0 G6`%@ew$]U@Pg%B#`5-d;PB2.*w6$euvQ.633z/i(nLy),Jlh4Q2KJp]');
define('NONCE_SALT',       'e}$p?OH1^r!:Aex)kdC~~OGnesS`DyLGbfRbWp:iCLsZo-bG^):b#NR<6*ng;ihQ');

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
