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
define('DB_NAME', 'news24');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'an^3~<n`*pO`<4IF)j7I3V_W${Lki;Jez)02jT`^SbYmS=uT2Ugcxq]bh3Y::#g_');
define('SECURE_AUTH_KEY',  'r,zRmr27U%$STjTe3d]m{Bhaax>TKjQ[i4XAqbN/-dcYij jR-v.1E<OG1pX+wQC');
define('LOGGED_IN_KEY',    'wegMp6qv<+c]VwvUs&LwA*7j7_47# *J(1Rjbi}[V>y:H1yMdh0uS?G$~18^^o=T');
define('NONCE_KEY',        'l)%zrKJDegZIJ>d^}@,gG4!KHAc<5@<Dh3!I13zA,w~8R$H?G4I,(wOj}Z+{6TC[');
define('AUTH_SALT',        'uJfs9?*/|c-+m5F#Km`7B+]`i.qkJl((l:b}g>|!bHv3&i.S{d p]S^e}*dN-;l/');
define('SECURE_AUTH_SALT', 'sD/Pu2~;J#%WjQF6D%++_Hi`TtC>Beb}Ku{BWgk:)xsn)DBEuyQ 9LE7aa[Hqp@P');
define('LOGGED_IN_SALT',   '3J*9#]t}bt{nfUMVVe1ed86,,;!&`-kTwxCXvw#-yd+~ms);fl(:)|Cu-GnFPVM.');
define('NONCE_SALT',       'WZ8E|r }5f7/d<8}{@<Q7._qCa+hh)eDZFjZW*y3~9]*IGX M=Go] ],tG(:;<dY');

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
