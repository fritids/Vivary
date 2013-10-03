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
define('DB_NAME', 'wp_vivary');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         ']<D5g2Bq+-[2B7)EXf7QUROg0U&eQ*$ltPtFd*UcXIqib@*2I3}ZbBB0LWn%gb81');
define('SECURE_AUTH_KEY',  'mXKoHyq!{+KtAY`l_|%V@>ae ]k,EHn%k2m+6@[^EH-.=0o69@^PG{=cfa&eSg{x');
define('LOGGED_IN_KEY',    'k=9n$rE[``I=cZ^=6(X[IcOl>,hyKIqqs`3+09z+=2l-v8(Ew3adx6F-t/|sDxOO');
define('NONCE_KEY',        '0XVn|{8&JdhooG7*]:*my)*tw9/~ Y3c,=xFrrxp*>qRbGP:_ID_9T_HC]|+_Ax6');
define('AUTH_SALT',        'Nv@4Fy()7|F1d+Lh+vO)|?kH!7l;wTY0`B8be[zxi~xE8j94_-pjf=s -O2ltY-L');
define('SECURE_AUTH_SALT', ' (X*|%Xy<VAX<=uly<kzA/+j(]9*D_+&,=@f7rPI9#f)H-wA5:Pvm.cftmC/,Gwz');
define('LOGGED_IN_SALT',   'Y2Ab(or=:s4FQ=kp_awV{SQt6[$NM_JRLSaHm@P*D>S;_;}HmGsVLgf|gC]^c@2b');
define('NONCE_SALT',       'E:&5Zft|r^DDvc]T7H!gO6|84;c/*RW+Ve9U2jq8u;eyx G0Sdo@}7p~|ev~ul!`');

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
