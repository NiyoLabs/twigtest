<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/** MySQL database username */

/** MySQL database password */

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

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('FS_METHOD', 'direct');
define('AUTH_KEY',         '}|.4e%+,*| ^Lk|8&,?@hy(9ov[ODBaZbu&iQIWZH@CH*E242@B b!PLz#-TNjy^');
define('SECURE_AUTH_KEY',  'A*(6+w-QwQQj~GV>|=0bg_.i.sW+yt2C{mHQ1O]:SOT:L*,_NC ;O<OC+/E0ReIl');
define('LOGGED_IN_KEY',    'xvi1w3b98>nu3>;k)#SS1h.dV}f7[&x*X[=KP|ZvT>p[yIm*7ibQw[y$WxH8|K$B');
define('NONCE_KEY',        'X I>fj+GZ|A48^M3vlf}Jb L&@FX7)C4n9Oo(E}@;]qhOb>SC{BXn}D=wan2j<#*');
define('AUTH_SALT',        'f_{T@-XP~Nr#JoOF[:p]awSqYJFQOXH@) mmMB$wxM]|=`)y^Xe<8*AO8sVXjq03');
define('SECURE_AUTH_SALT', 'o]l-9$lW:2~]]*N)aTF-mmU5ZO#v&La9Vp}YFb+sxks1v7<[fZSB87vz4>W`b&W/');
define('LOGGED_IN_SALT',   'r|ddl2]>oxiiA>]`1lMvjHxa.v$k!om;S0$q}VGf-P|1|%AZ%ga6?S*PJGLidkG/');
define('NONCE_SALT',       '4J%xdEW|*>#g<sy{p2SwOfa,+bz9)0xDAeNspqtT-<vSkYEKj63A$|<tPTxTp,;5');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'Jv5Pv9smKa');
require_once(ABSPATH . 'wp-settings.php');
