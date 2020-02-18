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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VdedYmGxnO2RyZUMbC7oX7A9eU/DzWZyplKoEzLcrEa2CAbXpgLpCTods1iR/bRX7ZJR9Hleul2jBKY3QYUBZg==');
define('SECURE_AUTH_KEY',  '0zPCofXKYcxxytu75B0Lj/YTbM9Gemt/VHRDcGAzCs/hGH4eH5fvIL5p8T+AgtyeTJ219YtYUCnQGl5viwk1PA==');
define('LOGGED_IN_KEY',    'zhbX3x50GZYrY/L0N55YNtIyEH+qZ9QDbKf+Il1fd5fxGA+bII1S7gqchCUhQvBXkoQhrrnzzP9bAuMU6a+tnQ==');
define('NONCE_KEY',        'z4Uaj1/4do9QpCIDkUxbU9izsphlCy3Pk1Y8Nzsu2BfortLRBYoIsXxFYvp47rQL+Lre8IgwZHkFzEYqYB18QA==');
define('AUTH_SALT',        'xMHF4EO6xVpQ85+oVBCQAOsGpK7x5iGWcMWgpDQ/XaPGtvfcK7qg1yWrIoAcv8+zbu/U+5dRjfUbhTz0ZHOkRQ==');
define('SECURE_AUTH_SALT', 'ayuOMKvHCzLjTFHPFlpnoXSvs/53IcU9vNSKQPELH5CPmIVsZH2iCfTTz/r2K6+gMsvs33yWO+azakFRqKhasQ==');
define('LOGGED_IN_SALT',   'rbf0zBnbme9D9sSrVwyOLwdVLhFWQyBq7vIG+SmuC55jdgLDa6yekN08TJGOMwDl4RMZcEKKfg4iHE5IUQNqBQ==');
define('NONCE_SALT',       'uJYFOS9zpuAgKnYoFgwLlAWGXYgKsEkavilHxDx3LDpRXDsw7V4lu9dzoUUHNv+h5IFcg72+NFTOHc+3FWI+sA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
