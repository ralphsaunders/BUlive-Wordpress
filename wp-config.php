<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bulive');

/** MySQL database username */
define('DB_USER', 'bulive_a');

/** MySQL database password */
define('DB_PASSWORD', 'mistythepig');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'V9CD~ZQcx[nW?aOH(%/$jBXgC,*/W+?hnEnIqIh#V1vJtz}l0|||LHN5>)j>5LyC');
define('SECURE_AUTH_KEY',  'Y~4l!_?RLDOpQwG7v%7cL2831QQDCSc<})EG:!Ed+|EcR<Pf{B.tW74>Y-4hYG$c');
define('LOGGED_IN_KEY',    ',b8nn@6>^oK5$llTnVq^|EWvo $yXA-u)C~+VU#^} q~#X#7I|klU *z.:H9mXG:');
define('NONCE_KEY',        '8T8Wf4H&6gz8Q2uk1$Z@|VBW;??=Sd:I<nT8SlmbbSGA1Z/d6%Sk=Cq/-a1!x|<x');
define('AUTH_SALT',        'lN`HwH-fd7J2Vq$RCa5RjU2}j_3R#E2Rt:*;y,dU)~;^MMlG:{!sIS8taQ_x;Mc_');
define('SECURE_AUTH_SALT', 'lI`+I8!1pM#./`pW]Fq+Q9_nW8N0a7Bqr{Py0gJ}ISKRiQ`MYk(8|e0,PE~=hCT ');
define('LOGGED_IN_SALT',   '??^951c:t8 tiWj?T-/#G-fNQXq{Ck7*8I/)L=zMYj}baSr{I+lw}saGv9+0,D[I');
define('NONCE_SALT',       '#Z~F6-W# ix(h*IF{Lu#Od%:3&}Q^>!$$Q3)&aBMnIL& C/hy~fmoat2[[iGAo??');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
