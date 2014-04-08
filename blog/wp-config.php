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
define('DB_NAME', 'hiram_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'U]_GO41,M+(j{o-tBx!Egi#%mLY~lRG/LpJ|YaZ4)r3*lvhT|DLZytQfB,@qo%B}');
define('SECURE_AUTH_KEY',  'CAKjd~.:<7oxc$B@{89[qT1i+09CBucyq<jROYrBgM!:x)2Nk$&&[SDEc4U+7Kly');
define('LOGGED_IN_KEY',    '+^4RcR;fXy&$bh49sf>XNm~_-,fxtye_~~s?Hs2i7(N=D,SzG;H`J1om2h<|E9C5');
define('NONCE_KEY',        'i`Mp (rsO)<,JP 0<$POzY:0vr~B+_,yY9@EycG}:7O}pdjEBbaWMHL.VQ|MAU.8');
define('AUTH_SALT',        'uT>bw%AU(fJ0XND@`r/0O`SQF- XYc[9KPJN-umcYx3~7-SM>!1?}h6-:Ty@vII+');
define('SECURE_AUTH_SALT', '5Cf#H7]g~Z8^XJb1nLZ{?4+(rw(~q~O)9ZG3MBoQZ[VS4.L`2o[]tPfL0X%#x?p7');
define('LOGGED_IN_SALT',   '~.1?bp=J+%_.t3ma4m8+6`#j@@@CdL3!4t#mxR-z_eDSAR4UPYg#Z1&hy-R>oBv.');
define('NONCE_SALT',       '`p<J_BSR--JQS@Z.a/kI]`{_EcifGU&-jSL,vm8P+qzplPeZvlN^pgA~l+@vZZ>#');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
