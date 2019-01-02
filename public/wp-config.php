<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wotton-fireworks');

/** MySQL database username */
define('DB_USER', 'rtable');

/** MySQL database password */
define('DB_PASSWORD', '3PDvhqUHuWkMGMgpM8!£');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('TWO_FACTOR_DISABLE', true);

define('AUTH_KEY',         ')eF]u,{:<Fx<wy6i:+IZ@MT)E9Y+%+JA`;$<za|D;y|2)KjAc,CwvzOY/V@1|3^|');
define('SECURE_AUTH_KEY',  '^mhjBFsE+ /m.}B$I#Zw`-lrJ--s;&+r.4_MXoqc+z)?d6m,&c#eCmaL_~~ RK(8');
define('LOGGED_IN_KEY',    '$4002053wP[UGE K#`1pmJlqLIFDtIh9odsm!<ac<25s>yI^Y{tQh75xG^q&Sj(N');
define('NONCE_KEY',        'e?NJUXKz)s)Y*e2{N|CHVfEGtwHvpL|&<~;SNFtK~E$!,[LyZw+zq]q0=L5Y9nQ?');
define('AUTH_SALT',        '$#@A%t~6Y,NwX&e1dtjoBit{jgbN74q<uM4=K}Rj-b@T-%1gE|L^TT-0N)>T|TN<');
define('SECURE_AUTH_SALT', 'TEk6+;)*BIX4MC2~|)7%wZ+Xu DrQ%QO@p }e_kXj#%6O:gDF}W%l*:V~t#(k qW');
define('LOGGED_IN_SALT',   '9`[zvsfjQh([&8{lnw>Ma>9/+BbP(5:<%T9;2|w|jETuy{Z0XmZH[~!#p^D]q[I5');
define('NONCE_SALT',       'bVE]0+SXKZTv$oO|,VOE7,A%IHQ;0QV:RWM$P1&Ntz2Kb:(<c>73E0tXzk=, g[m');

$table_prefix = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
