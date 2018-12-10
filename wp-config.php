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
define('DB_NAME', 'mebfur00_shol');

/** MySQL database username */
define('DB_USER', 'mebfur00_shol');

/** MySQL database password */
define('DB_PASSWORD', 'K)7%y1Ra4d');

/** MySQL hostname */
define('DB_HOST', 'mebfur00.mysql.tools');

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
define('AUTH_KEY',         'MA*ei!aTN9&CtpcQW&dQkxrQj(p1%TGi*IKQZy#kwLvU&hvrq1ma98LgDMpPy9a*');
define('SECURE_AUTH_KEY',  'mOr#!!2cBxkNrCwF7GECw6f%tTk0AH@F5vUl(jsLLO)sda^KXbJ%^15M3ndNK#bj');
define('LOGGED_IN_KEY',    'D*9FMpk3vzQJr4JAuYmLWj2kFk9tmXRW5DQG1YQLrkkDCUGtny7^e@vG70O0kzZN');
define('NONCE_KEY',        '%(DwU3S@FHBsspAW*oV^C1EH%(40N7tW)qGm#Q^0oYS5#!M40H1pKgKHwHYgZYOf');
define('AUTH_SALT',        'PxgDXrug%BeMX(&VBBWY0sr8W70q%sY5TQQun!#xNzC1hHbgmVW!rQfkNhhoGyef');
define('SECURE_AUTH_SALT', 'R0buiOZu%MoUMtc4i8UNJV0ywAupi^zaWEg9MjH&Y4Yk5Yt0rbVmSHfLJoCf#n@7');
define('LOGGED_IN_SALT',   '6YZ&GYinCA%!ZwdRX58O1MuoL5i5*cLIsHQWShHfiNRGKfzd0i^PO2^eH0uG8KoD');
define('NONCE_SALT',       'y^RUBsGocEN4cuL8d3^6dDvuc(2Y3SQ2%xymGwnPWSxX2Y7YVRP5&Ezsqpb%(gJd');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
