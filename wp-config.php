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
define('DB_NAME', 'cpMidterm');

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
define('AUTH_KEY',         '%l@%vrY(Hyd<xbFocyBGnF)e@Fp oi@s`&x<5YuEm*/)Giy>@`EuP)HzD3*Sxxo;');
define('SECURE_AUTH_KEY',  '>1mDPWVb@>S17NB<^DLXF&U^XPI$+%*P0|XE487<3}]&ybbEz3,ttjY*&VM2kWa ');
define('LOGGED_IN_KEY',    'Q]fkq!S8k|0w$5aD018pTcDhVh=(1bmO]FHwb8#bAM[I!Viwq.`iWGY2?GST[ +y');
define('NONCE_KEY',        'eusI#h^0mcXE0f8H,w|+Nf<Jektk_6JnQN:wS4(d@/2_M0{-&hCrUT38h74|0j P');
define('AUTH_SALT',        'd{~XoSRWdztq~Qc=fkZ73^jn$S?Wp6@e8MQ8skxsWXS*kVuAlm;R5hYa[uhgrZOG');
define('SECURE_AUTH_SALT', 'mVX$GNcf]M7Agb?;2dSW],H.o?|7(jaq*g-W/qPMWp$py-h=i}J/Aac.?oS!m6Wi');
define('LOGGED_IN_SALT',   '3&8>!s=MjDxQVPSW6}9 V_CY_O{hhw6aD-xV8QopS9*E2^(WN1SOfXrd)mTQ#IXM');
define('NONCE_SALT',       'By0D;,|a*KrpUD6$onY^*`N]3(uoz~]A<g*Ku;cT<8Dvlidh,A&2%vdwKo)M?<rt');

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
