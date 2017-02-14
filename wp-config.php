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
define('DB_NAME', 'db_hebble');

/** MySQL database username */
define('DB_USER', 'joshuaHeb');

/** MySQL database password */
define('DB_PASSWORD', '7rnskn17rnskn1');

/** MySQL hostname */
define('DB_HOST', '213.171.200.92');

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
define('AUTH_KEY',         'fBEq#OMnWOga#/nC8bi+xuOe39JmRdVj=9g9V@KBm#2ASkk#Rxd&mM;IyvNCw4Jn');
define('SECURE_AUTH_KEY',  'C$.mIIj+Imq)8RFwlX!(|tDGu]9It?e+^L|pau?;Tp!RrSfbg XkV<tp8jNpV^sM');
define('LOGGED_IN_KEY',    '02wpW2*(DbXvQb6)H&#7xVx6e4LP2q3C=hKaWlyg^5Wd{P7/-5sof)tE(sAI|KOL');
define('NONCE_KEY',        '>(LE*-C0,_w8%yofTxuMjnN&mGpoBG{A}}$N9?bqP8(:|f_}-fL&LUufA+P.3q1%');
define('AUTH_SALT',        '**05.HuJ&^f.*Ie.}t/6w#rebf-r>}Z?U  ^?ShF#{<)@$-nxBom.wh}KVQviV}_');
define('SECURE_AUTH_SALT', '02H3>.mmMNx@>%UHbj^I?`!6>F]t|!TqvcQ1/!VG57Aet4t|Zxt}A7?/;k=+d_+s');
define('LOGGED_IN_SALT',   '%$DuM5ouH~(l94[F8ac@kUMTF;CQk058GBr!%U&mnz|<Hw1CYlQi7Q@4j[}|B?kH');
define('NONCE_SALT',       'ZWW1n|ee-p<h&gW|P{AfwH:!w`_#xbGRDco#4~k&G[ThVjSZ;v.jYD[2Bk2TM}lk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'heb_';

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
