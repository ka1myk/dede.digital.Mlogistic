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

define('DB_NAME', 'c212mLogistick');



/** MySQL database username */

define('DB_USER', 'c212mLogistick');



/** MySQL database password */

define('DB_PASSWORD', 'kalmyk244kk_');



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

define('AUTH_KEY',         ':6F++c$<qkqg(/jQ.|fHmwKic~yTBk=hYVGc7lM6J-7i0/N(KPk{g#C:72kSHOxl');

define('SECURE_AUTH_KEY',  'g=p?{I%38k&7.G{P71Vv&sw[9r<&{<elJ4zdU.:[YNnkDpgKxT2WAKdX<*?rKdex');

define('LOGGED_IN_KEY',    '3^fhLuKz#GCwQOR][BOexdU[# =|uALKfd52D!Gpm^)<DH%,{P21*{ii1H$wn%5,');

define('NONCE_KEY',        '$?E2M0aE@slj*l W7urLztR(7M1`2_}$>8uFRyQLk)}/JR60k+v|,3[;Fr9!Py]y');

define('AUTH_SALT',        'xaC#CaAm5Rdk99GjCy$ ag0J2kq5sLy#&[po@o2-J@3P0Kro%DDj$E;wGwnt`+:6');

define('SECURE_AUTH_SALT', '9`aJc$Qblam>6ZwKa1LvHWC5C8=OnOJmdKLQ0ccFg&OowK!+)q?rs$sQ^{+u}9ZF');

define('LOGGED_IN_SALT',   'HK_vhXP9J6Wm<;jjZqs)#sMX}MY[+?%IZJNzH;kGH]q]F!!6Vk VuE;`YNXmj}HC');

define('NONCE_SALT',       'Y6J_C&+/1e|ZI/Q/Ab&lbE~O+eEN_n5H,1ouS,WT0%nZt^s.W%B3Wv+ E;=UID4K');



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

