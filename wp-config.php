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
define('DB_NAME', 'ColtzinBd');

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
define('AUTH_KEY',         'J9*2M}!47r4cnXbhaQy-a OvWfd6bV5*%(ntT;b(2w#S&{N9H2>1PF*(-Gq,1t_p');
define('SECURE_AUTH_KEY',  '4].iW|7p_Ol_2rU<Ko5Wn8fR3umQ#)oS^enp{RSj;RE|=][2:~-L-[d&]Y0:Azsr');
define('LOGGED_IN_KEY',    'SA-kxq%WWb(`~C@:/|+/ Lw1PZ/yn]W.F.3uvR=SQFlZ6itcF$&T:UagC903+vR,');
define('NONCE_KEY',        'S?Uw&;M$_<XupDI?Z!kFv*}4=s+V7X&k4*NI+ vWgy|Np22P_]ZQ,:]85r`<7FH>');
define('AUTH_SALT',        '@Ke(z[2y>gL/Sa`CX/,=6<htOna{YU)o~f:un-3%Yf#Iy<5r52vA,)`E.Kzu{n-;');
define('SECURE_AUTH_SALT', 'LZT55&`UfUC`OvkW{h{C5mGoB7ldUD|]f7[FcG?KNn$%Go8}h]Tud{?fz^eU+8<+');
define('LOGGED_IN_SALT',   'd3{NS%&U<3F}1dG?px3mvoH=4xLDum6C5>Z#8mLR0vHYNw?cD$95.uUB~<&_b<W*');
define('NONCE_SALT',       '$a0F;N-cEiavjTj/?=gl0l<T99H|Xl19lkHz;Y=oB+keK[VD=59d)b[:+8zUKpBX');

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
