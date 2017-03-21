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
define('DB_NAME', 'bmktpt_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '`UM2=:;20&r~J|+0CM]G!hg{j}%bdI0Oz?O~*+kktbsc/i?NJI5j_%sXl6144i*.');
define('SECURE_AUTH_KEY',  'YPa{s U R=g2Y@M4gE>=is6]dU0qYJyEFK,c`E>xV|%Br5|qrv4zY4qF{K,Judl=');
define('LOGGED_IN_KEY',    '_Br%3y$eZ6i-]gZjw3Ym:Ct>X>CRHy3X=]}Vb30ooX|p%`iDDrX^%gaaqTQj2gtq');
define('NONCE_KEY',        '7,vf5[kh|n{nPN?j#8UljuIC0A>DrZmZj&{N%7%1c_*-.t?O{!(4`:s8e ,Sz}T6');
define('AUTH_SALT',        '|DsD5w89cQ)9ZP2V&lM+7Gx6;q:e*JE>t&eXJUJ2kpt<PEk*]xe!O_$t]K@ObU9l');
define('SECURE_AUTH_SALT', ')Ez@xbc,#+<Vfsu7qJyqYl)UVaFxQ4**^Nt1c}RW)bVU1Vdu&UcUPE{op`$)HFWW');
define('LOGGED_IN_SALT',   '+LGFFi&`}8+f5Tm,I<r8jMFw?gRkM?k$)VT@h=3z%I|OG|B5hes;6`Z,~AkEWU2k');
define('NONCE_SALT',       ',,qRG(~v1L@jepu.(~X8;.:opPMm_ppZY,FsFWav]] @%/181HEL0Ca4l5@1h{(]');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
