<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress30');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '{DY0k:&*lYy}HmJ!EjY&Non]o3Dr&=({mz^pojF]Xnc`n~KJ)X5JC{cSh&IW<s$6');
define('SECURE_AUTH_KEY',  'q9L&tIA/Yt?-Z{LK>c@w*rNNEk]Tnb?x+4QgVkZsUNgC1ENq|vzNzW4Lin4LJLEr');
define('LOGGED_IN_KEY',    'xpdk>n7g_c1?Fdmmdz2F*7XRr)F&-F[?URweZkB[<[mK2FPak6L!={e}nV}~OyQS');
define('NONCE_KEY',        '&?W02t:U,tsaztG2.H6|S<oqV!A[5zQl[1w|~%P&mNb)R?@UHXnT;$e%Y%(7iKsa');
define('AUTH_SALT',        'uqAAI[~|_+M;c!sAa+6bupTxMw@bh}G{{=*m%F%BAX#*{r3[!4OBGeO$kD0=]7lo');
define('SECURE_AUTH_SALT', 'SY9$ObOrWd`z2eH.61$OxWkDEhFLO6j(>G(qfX&ACAN-g1nx<ZgNTa!bq;mgt=fa');
define('LOGGED_IN_SALT',   ' YupB?vTPX5e3vj#a01xx<irlCV/w11*IA*@fqFU~vq>MSf;}C0VPkj3UjZ>%2`3');
define('NONCE_SALT',       '2EAO;)~|UB%WO?~X<&/]3WCTJ(D>XI aTdG1@m(hbo_WO8aii6hH<5sQ2Oo$86n)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp3_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
