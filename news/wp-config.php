<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chrisjames_wp1' );

/** Database username */
define( 'DB_USER', 'chrisjames_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'O.yYQydCjbR7u83Wbo035' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pevUAW8TcN3X6GXldkmsenKvXBQPXrC7KkWl3T8RuQ4m1ru3RgbVt1YD5PRU72VQ');
define('SECURE_AUTH_KEY',  'Eb827Jjya5sXNGoXN2LjrztbUWJLZATGsXFItQx5PVmi8ulVTQ8W7LPd9uTFgDQO');
define('LOGGED_IN_KEY',    'PaQQObq5dhrHTztYqweL5XQS6jOBG6ALwURMUBkIlKt2QVjO75QOOBkF8Yfg3y4G');
define('NONCE_KEY',        'sJb7iY7r7rS2hGVW0dvyIOn9ZNEAobOIU3A49zKkUinDf6xgRyOmu6v2Is4zZW6z');
define('AUTH_SALT',        'u6tLjMJNPDqTJL3g4Ijwt9vd2LzJmoDlDQd6EpwI8STSJYsomluwOcUsqLz5xjSK');
define('SECURE_AUTH_SALT', 'A2RkY6WK1xvnLT6ehIJ23JgoBEV2RdFpusqsL5Vjicu5ZxOiVLonuqA1k2TaJBar');
define('LOGGED_IN_SALT',   '5i6Jnb7aUgdiPy7jq0rl8s5LYYddenb739LgUEh4tPGfNP72cCAqWmZefqbnL9KV');
define('NONCE_SALT',       'NaFY7qqGPFQnIroWC0Vi1kHavf8an3ZBItBdqLRvOCWQMkeUlirO0r5hWIjfaSDE');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
