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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db30373_theo_media' );

/** MySQL database username */
define( 'DB_USER', '1clk_wp_6EqdaYe' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LsRiPuDu' );

/** MySQL hostname */
define( 'DB_HOST', $_ENV{'DATABASE_SERVER'} );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3M1PSspY PioOjmza axHhXdvG i2ewQW74 85b8Felm' );
define( 'SECURE_AUTH_KEY',  '3e5KT2O5 WD5MgCVn e8HVha2u r4vcmu62 tEaBObwO' );
define( 'LOGGED_IN_KEY',    'TWFjfcwc y6RnUkaI WEZ1SDDk tcmA1sDL 2E1sPgxH' );
define( 'NONCE_KEY',        '2vVIXOHZ sljsCc4p cdBpbTUM 67vCyNfC zz4HttEI' );
define( 'AUTH_SALT',        'dAzBA7um FVFlmmAD On5TXQMq VBbOerhd 3GlbzuvT' );
define( 'SECURE_AUTH_SALT', 'ouxzaoax lUQA4LIh eggm7dJI gOKequ1H gZdf3ALb' );
define( 'LOGGED_IN_SALT',   'OLpepjss 7MCHtaKk fLj3LQax zyWpeq6T Sweruzje' );
define( 'NONCE_SALT',       'lFKns1y5 B1wnupmk bnmjLhDq UrzA82sE rl5TNd8d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

# Automatic Updater enabled by (mt) Media Temple
define('AUTOMATIC_UPDATER_DISABLED', false);
define('WP_AUTO_UPDATE_CORE', true);