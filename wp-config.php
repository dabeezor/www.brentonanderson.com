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
define('DB_NAME', 'alpha');

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
define('AUTH_KEY',         '[c_6&h+d8Q{c(h:2#2Lf=<`aatd1a+@J>#=9%kF1py{-2Dog](@/KXv=z(K;8c=n');
define('SECURE_AUTH_KEY',  'VN%F*?7&V<p8_xV{D~N|iDh$^.lK6?3KrbT-y/d[W41$M>a2|f#C,Yag~4NVyJ`;');
define('LOGGED_IN_KEY',    'GqsKgGC_+1F)OF>6flbZ{n$^4j&H{]{Jw-ulilCTQ=V{QJz{4E1lt?:oBNvE!)l,');
define('NONCE_KEY',        '|6Z(pQ4}@lF?-Z}};PNPv+1KSbUy}uHt^[_>W@[|/m%kG`NH1lZP.~=)/+F8p#E>');
define('AUTH_SALT',        '$p26i&&,@v;4jslUt-WqFa0w^joCqk$T;13HUYE` CVgcay=hprD>QUiQV[a?{s?');
define('SECURE_AUTH_SALT', '<]z00?GCIqEbs}Q+b/,wK0M2ZxSfE(6tJSM0a15yQZ7#.5g7E|*?<,]`d@kToa_3');
define('LOGGED_IN_SALT',   'vvGVv]<B]UoFJ!wtrKM@siKz|`pp4.>9;K;(Xw@9SUfO(Gu/$[9[AQhDc(G5.D8A');
define('NONCE_SALT',       'eu` *ShK@^9 Y(!2uz=z^y/-,DzOtf%gr%}AAPF-tbXJ$&Wd?MuTn81xMh<V|${k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_dev';

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
