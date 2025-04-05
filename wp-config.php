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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'harmando_wp946' );
/** Database username */
define( 'DB_USER', 'harmando_wp946' );
/** Database password */
define( 'DB_PASSWORD', '7S2k12[)p3' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
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
define( 'AUTH_KEY',         '0sahubjmarqjmvd12xe97eubdyl11c44tmcfa9jjthkweynacws99ichnug4iq8c' );
define( 'SECURE_AUTH_KEY',  'jr3tezmxm2g5wvafcaiji53ppsvtyhz8s3gvmwlash2kjrvzwe2srkizim7esr7l' );
define( 'LOGGED_IN_KEY',    'wcb5osr8kpikksagzgdfm2r4bxvixeanjfkoodmrbrz6hssghe8m8nexcjgzjrhc' );
define( 'NONCE_KEY',        'ohtxl6tvb4mn0bzljtnr5fsp1svxkq7xubcixf3fch2al4liqqvuqymlv8r5wecr' );
define( 'AUTH_SALT',        'y7yjnlzeau3pvtypdwag7ysx3tazmi8czxyyu43vlemka5diz2c4tusspuqe7fum' );
define( 'SECURE_AUTH_SALT', 'koquciygji5fnfa2y4wtsrqsv32jf4fkzoilcba6pekuqtspive3bff6f4uksvcr' );
define( 'LOGGED_IN_SALT',   'kkfobrc0awhnwpusxoqotvdnvmtlzfkbmwciatg1ovmaw6ygrtrlzvu7rhhls68d' );
define( 'NONCE_SALT',       '2lphrmydj9b3xw3u0yqistajbcusiylzh2onqb3kj6bnitfezqyt35egz4rzegux' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvw_';
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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